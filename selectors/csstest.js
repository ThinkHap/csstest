$(function(){
    var testCase = ['any', 'element', 'class', 'id', 'descendant', 'child', 'adjacent', 'attribute-present', 
				'attribute-equal', 'attribute-space', 'attribute-hyphen', 'firstchild', 
				'lang', 'before', 'before3', 'after', 'after3', 'firstletter', 'firstletter3', 'firstline', 
				'firstline3', 'attribute-begin', 'attribute-end', 'attribute-contains', 'combine', 
				'root', 'lastchild', 'onlychild', 'nthchild', 'nthlastchild', 'firsttype', 'lasttype', 'onlytype', 
				'nthtype', 'nthlasttype', 'empty', 'not', 'target', 'enabled', 'disabled', 'checked' ], 
        counter = 0;

    function changeSrc() {
        var attr = testCase.shift(),
            results = false;

        var testBox = $('<iframe>', {
            'name': 'test-'+ attr,
            'id': 'test-'+ attr,
            'src': 'test-'+ attr +'.html?t='+ +new Date +'#'+ attr
        }).appendTo('body');

        setTimeout(check, 200);

        function check() {
            var testNum = 0,
                testPassed = 0,
                testFailed = 0,
                baseColor = testBox.contents().find('.base').css('background-color');
            testBox.contents().find('.test').each(function() {
                counter++;
                testNum++;
                if ($(this).hasClass('float')) {
                    var f = $(this).css('float');
                    if ($(this).hasClass('default')) {
                        results = f == 'none';
                    } else {
                        results = f == 'right';
                    }
                } else if ($(this).hasClass('height')) {
                    var h = $(this).height();
                    if ($(this).nextUntil()) {
                        var control = $(this).nextUntil();
                        while (control.nextUntil() && control[0].nodeType != 1) {
                            control = control.nextUntil();
                        }
                        control = control.height();
                        if ($(this).hasClass('default')) {
                            results = h == control;
                        } else {
                            results = h > control;
                        }
                    } else {
                        if ($(this).hasClass('default')) {
                            results = h == 0;
                        } else {
                            results = h > 0;
                        }
                    }
                } else {
                    var c = $(this).css('background-color');
                    if ($(this).hasClass('default')) {
                        results = c == 'transparent' || c == 'rgba(0, 0, 0, 0)';
                    } else {
                        results = c == baseColor;
                    }
                }
                if (results) {
                    testPassed++;
                } else {
                    testFailed++;
                }
            });

            if (results) {
                if (testPassed == testNum) {
                    $('<li class="passed"><a href="test-'+ attr +'.html?t='+ +new Date +'#'+ attr +'">'+ window.frames['test-'+ attr].document.title +'</a></li>').appendTo('#results');
                } else {
                $('<li class="buggy"><a href="test-'+ attr +'.html?t='+ +new Date +'#'+ attr +'">'+ window.frames['test-'+ attr].document.title +'</a><span>('+ testFailed +' out of '+ testNum +' failed)</span></li>').appendTo('#results');
                }
            } else {
                $('<li class="failed"><a href="test-'+ attr +'.html?t='+ +new Date +'#'+ attr +'">'+ window.frames['test-'+ attr].document.title +'</a><span>('+ testFailed +' out of '+ testNum +' failed)</span></li>').appendTo('#results');
            }

            if (testCase.length) {
                setTimeout(changeSrc, 200);
            } else {
                console.log(counter +'tests');
            }

            $('#test-'+ attr).remove();
        }

    }

    setTimeout(changeSrc, 200);
});


/*
var CSSTest = {
    init: function() {
    },
    create: function() {
        var testBox = $('<iframe>', {
            'name': 'test-iframe',
            'id': 'test-iframe',
            'src': 'test-'+ attr +'.html',
            'width': '400px',
            'height': '200px'
        }).appendTo('body');
    },
    check: function() {
    },
    load: function() {
        setTimeout(function(){this.check()}, 1);
    },
    destory: function() {
    },
    next: function() {
    }
}
*/
