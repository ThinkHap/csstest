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
        //console.log(property)
        //console.log(value)
        //console.log('inline:')
        //console.log(inline)
        
        if(!property) { return false; }
        
        //console.log('property: '+property)
        
        //console.log(inline)
        //console.log(inline.length)
        //console.log(inline[property])

        inline.cssText = '';
        try {
            inline[property] = '';
        } catch(e) {};


        //console.log(inline.cssText)
        //console.log(inline[property])
        
        

        for(var i=0; i<_.prefixes.length; i++) {
            var prefixed = _.prefixes[i] + value;
            
            try {
                inline[property] = prefixed;
            } catch(e) {};
            
            if(inline.length > 0) {
                return prefixed;
            }
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
    this.passed = this.total =
    this.passedTests = this.totalTests = 0;
    
    this.parent = parent || null;
};

Score.prototype = {
    update: function(data) {
        if(!data.total) { return; };
        
        this.passedTests += data.passed;
        this.totalTests += data.total;
        
        this.total++;
        this.passed += data.passed / data.total;
        
        if(this.parent) {
            this.parent.update(data);
        }
    },
    
    toString: function() {
        return this.percent() + '%';
    },
    
    percent: function() {
        return Math.round(100 * this.passed / this.total);
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
    //    //console.log('id: '+id);
    //    //console.log('Test.groups[id]: ');
    //    //console.log(Test.groups[id]);
    //    this.group(id, Test.groups[id]);
    //}
    
    // Add overall spec score to BrowserScope
    _bTestResults[this.id] = mainScore.percent();
    //console.log('bTestResult:' + _bTestResults[this.id])



    var score = D.create('<span class="score">', { text: this.score });
    var h2 = D.create('<h2>', { text: this.title});
    D.append(score, h2);
    this.section = D.create('<div class="tests">', { id: this.id});
    D.append(h2, this.section);
    D.append(thisSection, this.section);

    D.append(this.section, '#all');
    //D.get('#all').appendChild(this.section);
    

    // Add to list of tested specs
    var url = '#' + spec;
    var testedA = D.create('<a>', { href: url, text: title });
    var testedScore = D.create('<span class="score">', { text: this.score });
    var testedSpecs = D.create('<li class="'+passclass({ passed: this.score.passed, total: this.score.total })+'">', { title: this.score + ' passed' });
    D.append(testedA, testedSpecs);
    D.append(testedScore, testedSpecs);
    D.append(testedSpecs, '#specsTested');

}


Test.prototype = {
    //group: function(what, testCallback) {
    group: function() {
        var theseTests = this.tests['properties'];
        var h3 = D.create('<h3>', {text: 'properties'});
        thisSection = D.create('<div class="tests properties">');
        D.append(h3, thisSection);
        //D.append(thisSection, this.section);


        for(var feature in theseTests) {

            var results = Test.groups['properties'](feature);
            //console.log('results: '+ results)

            //if the browser doesn't support this property, then skip to next property
            if(!results){
                var dl = document.createElement('dl'),
                    dt = D.create('<dt class="unsupport">', {tabIndex: '0', text: feature});
                D.append(dt, dl);
                D.append(dl, thisSection);
                
                continue;
            };

            var dl = document.createElement('dl'),
                dt = D.create('<dt>', {tabIndex: '0', text: feature});
            D.append(dt, dl);
            
            var passed = 0, tests = theseTests[feature].value;
        
            tests = tests instanceof Array ? tests : [tests];
        
            //console.log('tests: '+tests)
            for(var i=0, test; test = tests[i++];) {
                //console.log('test: '+test)
                //console.log('feature: '+feature)
                //console.log('theseTests: ')
                //console.log(theseTests)
                var results = Test.groups['values'](feature, test),
                    success, note;
                
                //console.log('results: ')
                //console.log(results)
                if(typeof results === 'object') {
                    success = results.success;
                    note = results.note;
                }
                else { success = +!!results }
                
                passed += +success;
                //console.log('passed: '+passed)
                //console.log('success: '+success)
                
                var notes = test + (note? '<small>' + note + '</small>' : '');
                var dd = D.create('<dd class="'+ passclass({passed: Math.round(success * 10000), total: 10000 }) +'">', { text: notes });
                //D.append(test, dd);
                //D.append(notes, dd);
                D.append(dd, dl);
            }
            
            this.score.update({passed: passed, total: tests.length });
            
            dt.className = passclass({ passed: passed, total: tests.length });
            
            //thisSection.appendChild(dl);
            D.append(dl, thisSection);
            //D.append(thisSection, this.section);
            D.append(thisSection, this.section)
            D.append(this.section, '#all')
            //console.log(thisSection)
            
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
    
        //console.log(value)
        //console.log(property)
        //for(var j=0, property; property = properties[j]; j++) {
            //if(!Supports.property(property)) {
            //    properties.splice(--j, 1);
            //    continue;
            //}
            
        //    console.log(Supports.value(property, test))

        //    if(!Supports.value(property, test)) {
        //        failed.push(property);
        //    }
        //    console.log(Supports.value(property, test))
        //}

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
            note: success > 0 && success < 1? 'Failed in: ' + failed.join(', ') : ''
        }
    },

    'Media queries': function(test) {
		var matches = matchMedia(test);
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
    if (success === 0) { return 'epic-fail' }
    
    var classes = [
        'fail',
        'buggy',
        'very-buggy',
        'slightly-buggy',
        'almost-pass',
    ];
    
    var index = Math.round(success * (classes.length - 1));
    
    return classes[index];
}

S.Node.one('#all').delegate('click', 'dl', function(e){
    e.currentTarget.className = e.currentTarget.className === 'open'? '' : 'open';
});

Array.prototype.and = function(arr2, separator) {
    separator = separator || ' ';
    
    var ret = [],
        map = function(val) {
            return val + separator + arr2[j]
        };
    
    for(var j=0; j<arr2.length; j++) {
        ret = ret.concat(this.map(map));
    }
    
    return ret;
};

// [ x or y or z ]{min, max}
Array.prototype.times = function(min, max, separator) {
    separator = separator || ' ';

    max = max || min;
    
    var ret = [];
    
    
    if(min === max) {
        if(min === 1) {
            ret = this.slice(); // clone
        }
        else {
            ret = this.and(this, separator);
            
            for(var i=2; i<min; i++) {
                ret = this.and(ret, separator);
            }
        }
    }
    else if(min < max) {
        for(var i=min; i<=max; i++) {
            ret = ret.concat(this.times(i, i, separator));
        }
    }
    
    return ret;
};

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
            score.textContent = mainScore + '';
            passedTests.textContent = mainScore.passedTests;
            totalTests.textContent = mainScore.totalTests;
            total.textContent = mainScore.total;
            
            // Schedule next test
            setTimeout(arguments.callee, 50)
        }
        else {
            // Done!
            
            // Display time taken
            timeTaken.textContent = +new Date - timeBefore + 'ms';
            
            // Send to Browserscope
            //var testKey = 'agt1YS1wcm9maWxlcnINCxIEVGVzdBidzawNDA';
            
            _bTestResults['Overall'] = mainScore.percent();
              
            //var script = D.create('<script>', {src: '#'});
            //D.append(script, '#head');
        }
    })();
}
