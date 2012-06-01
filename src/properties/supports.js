/*! matchMedia() polyfill - Test a CSS media type/query in JS. 
Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
window.matchMedia = window.matchMedia || (function(doc, undefined){
  
  var bool,
      docElem  = doc.documentElement,
      refNode  = docElem.firstElementChild || docElem.firstChild,
      // fakeBody required for <FF4 when executed in <head>
      fakeBody = doc.createElement('body'),
      div      = doc.createElement('div');
  
  div.id = 'mq-test-1';
  div.style.cssText = "position:absolute;top:-100em";
  fakeBody.appendChild(div);
  
  return function(q){
    
    div.innerHTML = '&shy;<style media="'+q+'"> #mq-test-1 { width: 42px; }</style>';
    
    docElem.insertBefore(fakeBody, refNode);
    bool = div.offsetWidth == 42;  
    docElem.removeChild(fakeBody);
    
    return { matches: bool, media: q };
  };
  
})(document);

/**
 * Setup dummy elements
 */
var dummy = document.createElement('_'),
    inline = dummy.style,
    style = document.createElement('style');
    
document.documentElement.appendChild(style);
dummy.setAttribute('data-foo', 'bar');
dummy.setAttribute('data-px', '1px');
document.documentElement.appendChild(dummy);

var _ = Supports = {
    prefixes: ['', '-ms-', 'ms-','-moz-', '-webkit-', '-o-', '-khtml-'],

    property: function(property) {
        var test;
        for (var i=0, l=_.prefixes.length; i < l; i++) {
            var pre = _.prefixes[i];
            test = (pre + property).replace(/-([a-z])/g,function($0,$1){
                return $1.toUpperCase();
            });
            if(test in inline && pre == ""){
                return property;
            }else if(test in inline){
                if(pre == 'ms-'){
                    return '-' + pre + property;
                }else{
                    return pre + property;
                }
            };
        };
        return false;
    },

    value: function(property, value) {
        property = _.property(property);
        
        if(!property) { return false; }

        property = property.replace(/-([a-z])/g,function($0,$1){
            return $1.toUpperCase();
        });
        
        //console.log('property: '+property)
        
        //console.log(inline)
        //console.log(inline.length)
        //console.log(inline[property])

        inline.cssText = '';
        try {
            inline[property] = '';
        } catch(e) {};


        //console.log(property)
        //console.log(inline[property])
        
        

        for(var i=0; i<_.prefixes.length; i++) {
            var prefixed = _.prefixes[i] + value;
            
            //console.log('test: '+prefixed)
            try {
                inline[property] = prefixed;
            } catch(e) {};
            
            //console.log('inline[property]: '+inline[property])
            //console.log(_.prefixes[i])
            //console.log(prefixed)
            //console.log(inline.cssText)
            //console.log(!!inline.cssText)
            //console.log('-- next --')
            if(inline.length > 0) {
                return prefixed;
            };

            // for ie6-8
            if(S.UA.ie < 9){
                if(inline.cssText){
                    return prefixed;
                }
            };
        }
        
        return false;
    },

    mq: function(mq) {
		if(window.matchMedia) {
			return matchMedia(mq).media !== 'invalid';
		}
		else {
			style.textContent = '@media ' + mq + '{ foo {} }';
			
			return style.sheet.cssRules.length > 0? mq : false;
		}
	}
    
  
};


var Score = function(parent) {
    this.passed = this.total = this.passedTests = this.totalTests = 0;
    
    this.parent = parent || null;
};

Score.prototype = {
    update: function(data) {
        if(!data.total) { return; };
        
        this.passedTests += data.passed;
        this.totalTests += data.total;
        
        this.total++;
        this.passed += Math.round(data.passed / data.total);
        
        if(this.parent) {
            this.parent.update(data);
        }
    },
    
    toString: function() {
        return this.percent() + '%';
    },
    
    percent: function() {
        return Math.round(1000 * this.passed / this.total) / 10;
    }
};

var mainScore = new Score(), _bTestResults = {};

//var h2 = D.create('<h2>', { href: 'url', title: 'title-ti', text: 'text-h2' });
//D.append(h2, '#all');

var Test = function (tests, spec, title) {
    this.tests = tests; //Specs[spec]
    this.id = spec; //Specs[i] = spec
    this.title = title; //Specs[i].title = Specs[spec].title
    
    this.score = new Score(mainScore);
    


    // Perform tests
    this.group();
    //for(var id in Test.groups) {
        //console.log('id: '+id);
        //console.log('Test.groups[id]: ');
        //console.log(Test.groups[id]);
        //this.group(id, Test.groups[id]);
        //console.log(id);
    //}
    
    // Add overall spec score to BrowserScope
    _bTestResults[this.id] = mainScore.percent();
    //console.log('bTestResult:' + _bTestResults[this.id])



    //var score = D.create('<span class="score">', { text: this.score });
    //D.append(this.score, score);
    //var h2 = D.create('<h2>', {text: this.title});
    //D.append(this.title, h2);
    //D.append(score, h2);
    //console.log(h2)
    var h2 = D.create('<h2>'+this.title+'<span class="score">'+this.score+'</span></h2>');
    this.section = D.create('<div class="tests">', { id: this.id});
    D.append(h2, this.section);
    //D.append(score, h2);
    D.append(thisSection, this.section);

    D.append(this.section, '#all');
    //D.get('#all').appendChild(this.section);
    

    // Add to list of tested specs
    var url = '#' + spec;
    //var testedA = D.create('<a>', { href: url, text: title });
    //var testedScore = D.create('<span class="score">', { text: this.score });
    var testedSpecs = D.create('<li class="'+passclass({ passed: this.score.passed, total: this.score.total })+ '" title="'+ this.score + ' passed' + '"><a href="' + url + '">' + title + '</a><span class="score">' + this.score + '</span></li>');
    //D.append(testedA, testedSpecs);
    //D.append(testedScore, testedSpecs);
    D.append(testedSpecs, '#specsTested');

}


Test.prototype = {
    //group: function(what, testCallback) {
    group: function() {
        //console.log(this.tests['properties']);
        var testType;
        if(this.tests['properties']){
            var flag = 0;

            testType = 'properties';
            var h3 = D.create('<h3>', {text: 'properties'});
            thisSection = D.create('<div class="tests properties">');
        }else if(this.tests['Media queries']){
            var flag = 1;

            testType = 'Media queries';
            thisSection = D.create('<div class="tests mediaqueries">');
        };

        var theseTests = this.tests[testType];
        var h3 = D.create('<h3>', {text: testType});
        D.append(h3, thisSection);

        for(var feature in theseTests) {
            if(this.tests['properties']){
                var results = Test.groups[testType](feature);
            }else if(this.tests['Media queries']){
                var results = feature;
                //console.log(results);
            };
            //console.log('results: '+ results)


            //if the browser doesn't support this property, then skip to next property
            if(!results){
                var dl = document.createElement('dl'),
                    dt = D.create('<dt class="unsupport">', {tabIndex: '0', text: feature});
                D.append(dt, dl);

                var passed = 0, tests = theseTests[feature].value;
                tests = tests instanceof Array ? tests : [tests];
                for(var i=0, test; test = tests[i]; i++) {
                    var dd = D.create('<dd class="unsupport">', { text: test });
                    D.append(dd, dl);
                };


                this.score.update({passed: 0, total: tests.length });

                D.append(dl, thisSection);
                continue;
            };

            var dl = document.createElement('dl'),
                dt = D.create('<dt>', {tabIndex: '0', text: results});
            D.append(dt, dl);
            
            var passed = 0, tests = theseTests[feature].value;
        
            tests = tests instanceof Array ? tests : [tests];
        
            for(var i=0, test; test = tests[i++];) {
                if(flag === 0){
                    var results = Test.groups['values'](feature, test);
                }else if (flag === 1) {
                    var results = Test.groups['Media queries'](test);
                    //console.log(results);
                };
                var success, note;
                
                if(typeof results === 'object') {
                    success = results.success;
                    note = results.note;
                    if(results.value){
                        test = results.value;
                    }
                } else { 
                    success = +!!results 
                };

                passed += +success;
                var notes = test + (note? '<small>' + note + '</small>' : '');
                var dd = D.create('<dd class="'+ passclass({passed: Math.round(success * 10000), total: 10000 }) +'">', { text: notes });
                D.append(dd, dl);
            }
            
            this.score.update({passed: passed, total: tests.length });
            
            dt.className = passclass({ passed: passed, total: tests.length });

            D.append(dl, thisSection);
            D.append(thisSection, this.section)
            D.append(this.section, '#all')
            
            // Add to browserscope
            _bTestResults[this.id + ' / ' + feature.replace(/[,=]/g, '')] = Math.round(100 * passed / tests.length);
        }

    }
}

Test.groups = {
    'properties': function(property) {
        return Supports.property(property);
    },

    'values': function(property, value) {
        var failed = [];
        //console.log('groups:'+properties)

        var resultValue = Supports.value(property, value)
        
        //success = 1 - failed.length / properties.length;
        //success = 1 - failed.length / (++j);
        success = 1 - !resultValue;
        //console.log(failed.length)  //0
        //console.log(j) //2
        //console.log(success) //1
        
        //console.log(success > 0 && success < 1? 'Failed in: ' + failed.join(', ') : '111')
        return {
            success: success,
            note: success > 0 && success < 1? 'Failed in: ' + failed.join(', ') : '',
            value: resultValue
        }
    },

    'Media queries': function(test) {
		var matches = matchMedia(test);
        //console.log(matches);
		return matches.media !== 'invalid' && matches.matches;
	}
    

};

function passclass(info) {
    var success;
    
    if('passed' in info) {
        success = info.passed / info.total;
    }
    else if('failed' in info) {
        success = 1 - info.failed / info.total;
    }
    
    if (success === 1) { return 'pass' }
    if (success === 0) { return 'unsupport' }
    
    var classes = [
        'epic-fail',
        'fail',
        'buggy',
        'very-buggy',
        'slightly-buggy',
        'almost-pass',
    ];
    
    var index = Math.round(success * (classes.length - 1));
    
    return classes[index];
}

S.one('#all').delegate('click', 'dt', function(e){
    e.currentTarget.parentNode.className = e.currentTarget.parentNode.className === 'open'? '' : 'open';
});



onload = function() {
    var timeBefore = +new Date,
        duration = 0;
    
    var specs = [];
    
    for(var spec in Specs) {
        specs.push(spec);
        //console.log(spec)
        //console.log(specs)
    }
    
    (function() {
        if(specs.length) {
            // Get spec id
            var spec = specs.shift();
            //console.log(spec)
            
            // Run tests
            var test = new Test(Specs[spec], spec, Specs[spec].title);
            //console.log('Test: '+test)
            //console.log('tests: ')
            //console.log(Specs[spec])
            //console.log('spec: '+spec)
            //console.log('title: '+Specs[spec].title)
            
            // Count test duration
            duration += +new Date - timeBefore;
            timeBefore = +new Date;
            
            // Output current score
            //var score = D.get('#score');
            D.text('#score', mainScore + '');
            D.text('#passedTests', mainScore.passedTests);
            D.text('#totalTests', mainScore.totalTests);
            D.text('#passed', mainScore.passed);
            D.text('#total', mainScore.total);
            
            // Schedule next test
            setTimeout(arguments.callee, 50)
        }
        else {
            // Done!
            
            // Display time taken
            D.text('#timeTaken', +new Date - timeBefore + 'ms');
            
            // Send to Browserscope
            //var testKey = 'agt1YS1wcm9maWxlcnINCxIEVGVzdBidzawNDA';
            
            _bTestResults['Overall'] = mainScore.percent();
              
            //var script = D.create('<script>', {src: '#'});
            //D.append(script, '#head');
        }
    })();
}
