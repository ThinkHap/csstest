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
    property: function(property) {
        var prefixes = ['', '-ms-', 'ms-','-moz-', '-webkit-', '-khtml-', '-o-'];
        var test;
        for (var i=0, l=prefixes.length; i < l; i++) {
            var pre = prefixes[i];
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
        //console.log(inline[property])

        inline.cssText = '';
        inline[property] = '';


        //console.log(inline.cssText)
        //console.log(inline[property])
        
        //for(var i=0; i<_.prefixes.length; i++) {
        //    var prefixed = _.prefixes[i] + value;
        ////console.log(inline[property])
        ////console.log(prefixed)
        //    
        //    //try {
        //        inline[property] = prefixed;
        //    //} catch(e) {}
        ////console.log(inline[property])
        //    
        ////console.log(inline.length)
        //    if(inline.length > 0) {
        //        return prefixed;
        //    }
        //}
        
        return false;
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
    for(var id in Test.groups) {
        //console.log('id: '+id);
        //console.log('Test.groups[id]: ');
        //console.log(Test.groups[id]);
        this.group(id, Test.groups[id]);
    }
    
    // Add overall spec score to BrowserScope
    _bTestResults[this.id] = mainScore.percent();
    console.log('bTestResult:' + _bTestResults[this.id])



    var score = D.create('<span>', { class: 'score', text: this.score });
    var h2 = D.create('<h2>', { text: this.title});
    D.append(score, h2);
    this.section = D.create('<div>', { id: this.id, class: 'tests'});
    D.append(h2, this.section);

    D.append(this.section, '#all');
    //D.get('#all').appendChild(this.section);
    

    // Add to list of tested specs
    var url = '#' + spec;
    var testedA = D.create('<a>', { href: url, text: title });
    var testedScore = D.create('<span>', { class: 'score', text: this.score });
    var testedSpecs = D.create('<li>', { class: passclass({ passed: this.score.passed, total: this.score.total }), title: this.score + ' passed' });
    D.append(testedA, testedSpecs);
    D.append(testedScore, testedSpecs);
    D.append(testedSpecs, '#specsTested');

}


Test.prototype = {
    group: function(what, testCallback) {
        console.log('what: '+what)
        console.log('testCallback: '+testCallback)
        var thisSection, theseTests = this.tests[what];

        console.log('theseTests: '+theseTests)
        
        for(var feature in theseTests) {
            console.log('feature:'+feature)

            var results = testCallback(feature);
            console.log('results: '+ results)



            if(feature === 'properties') {
                continue;
            }
            
            if(thisSection){
                thisSection = thisSection;
            }else {
                var h3 = D.create('<h3>', {text: what});
                thisSection = D.create('<div>', {class: 'tests ' + what});
                D.append(h3, thisSection);
                D.append(thisSection, this.section);
            }
            //console.log(thisSection)
            
            var dl = document.createElement('dl'),
                dt = D.create('<dt>', {tabIndex: '0', text: feature});
            D.append(dt, dl);
            
            var passed = 0, tests = theseTests[feature].value;
            console.log('tests: '+tests)
        
            tests = tests instanceof Array ? tests : [tests];
        
            for(var i=0, test; test = tests[i++];) {
                console.log('test: '+test)
                console.log('feature: '+feature)
                console.log('theseTests: ')
                console.log(theseTests)
                var results = testCallback(test, feature, theseTests),
                    success, note;
                
                console.log('results: '+results)
                if(typeof results === 'object') {
                    success = results.success;
                    note = results.note;
                }
                else { success = +!!results }
                
                passed += +success;
                console.log('passed: '+passed)
                console.log('success: '+success)
                
                var notes = test + (note? '<small>' + note + '</small>' : '');
                var dd = D.create('<dd>', {class: passclass({passed: Math.round(success * 10000), total: 10000 }), text: notes });
                //D.append(test, dd);
                //D.append(notes, dd);
                D.append(dd, dl);
            }
            
            this.score.update({passed: passed, total: tests.length });
            
            dt.className = passclass({ passed: passed, total: tests.length });
            
            //thisSection.appendChild(dl);
            D.append(dl, thisSection);
            //D.append(thisSection, this.section);
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

    'values': function(test, label, tests) {
        var properties = tests.properties,
            failed = [];
        //console.log('groups:'+properties)
    
        for(var j=0, property; property = properties[j++];) {
            if(!Supports.property(property)) {
                properties.splice(--j, 1);
                continue;
            }
            
            if(!Supports.value(property, test)) {
                failed.push(property);
            }
        }
        
        success = 1 - failed.length / properties.length;
        
        return {
            success: success,
            note: success > 0 && success < 1? 'Failed in: ' + failed.join(', ') : ''
        }
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

document.onclick = function(evt) {
    var target = evt.target;
    
    if(/^dt$/i.test(target.nodeName)) {
        evt.stopPropagation();
        
        var dl = target.parentNode;
        
        dl.className = dl.className === 'open'? '' : 'open';
    }
}

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
