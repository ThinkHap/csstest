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

var Supports = {
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
		
		property = camelCase(property);
        //console.log(property)
		
        //console.log(inline)
        //console.log(inline[property])

		inline.cssText = '';
		inline[property] = '';


        //console.log(inline.cssText)
        //console.log(inline[property])
		
		for(var i=0; i<_.prefixes.length; i++) {
			var prefixed = _.prefixes[i] + value;
        //console.log(inline[property])
        //console.log(prefixed)
			
			//try {
				inline[property] = prefixed;
			//} catch(e) {}
        //console.log(inline[property])
			
        //console.log(inline.length)
			if(inline.length > 0) {
				return prefixed;
			}
		}
		
		return false;
	}
	
  

};

console.log(Supports.property('animation'));

//var h2 = D.create('<h2>', { href: 'url', title: 'title-ti', text: 'text-h2' });
//D.append(h2, '#all');

/*
var Score = function(parent) {
	this.passed = this.total =
	this.passedTests = this.totalTests = 0;
	
	this.parent = parent || null;
};

Score.prototype = {
	update: function(data) {
		if(!data.total) { return; }
		
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
*/

var Test = function (tests, spec, title) {
	this.tests = tests;
	this.id = spec;
	this.title = title;
	
	this.score = new Score(mainScore);
	
	style = document.createElement('style');
    document.documentElement.appendChild(style);
	var h2 = document.createElement('h2');
		tag: 'h2',
		contents: [
			this.title,
		]
	}), valuesSection;
	
	// Wrapper section
	this.section = $u.element.create({
		tag: 'section',
		properties: {
			id: this.id,
			className: 'tests'
		},
		contents: [h2]
	});
	
	// Perform tests
	for(var id in Test.groups) {
		this.group(id, Test.groups[id]);
	}
	
	// Add overall spec score to BrowserScope
	_bTestResults[this.id] = mainScore.percent();
	
	// Display score for this spec
	$u.element.create({
		tag: 'span',
		contents: this.score + '',
		properties: {
			className: 'score'
		},
		inside: h2
	});
	
	all.appendChild(this.section);
	
	// Add to list of tested specs
	$u.element.create({
		tag: 'li',
		properties: {
			className: passclass({ passed: this.score.passed, total: this.score.total }),
			title: this.score + ' passed'
		},
		contents: [
			$u.element.create({
				tag: 'a',
				prop: {
					href: '#' + spec
				},
				contents: title
			}),
    
	        // Display score for this spec
	        $u.element.create({
	        	tag: 'span',
	        	contents: this.score + '',
	        	properties: {
	        		className: 'score'
	        	},
	        	inside: h2
	        })
		],
		inside: specsTested
	});
}
