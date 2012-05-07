$(function(){
    var testCase = ['any', 'element', 'class', 'id', 'descendant', 'child', 'adjacent', 'attribute-present', 
				'attribute-equal', 'attribute-space', 'attribute-hyphen', 'firstchild', 
				'lang', 'before', 'before3', 'after', 'after3', 'firstletter', 'firstletter3', 'firstline', 
				'firstline3', 'attribute-begin', 'attribute-end', 'attribute-contains', 'combine', 
				'root', 'lastchild', 'onlychild', 'nthchild', 'nthlastchild', 'firsttype', 'lasttype', 'onlytype', 
				'nthtype', 'nthlasttype', 'empty', 'not', 'target', 'enabled', 'disabled', 'checked' ], 
    //var testCase = ['checked' ], 
        counter = 0;

    function changeSrc() {
        var attr = testCase.shift(),
            result = true;

        var testBox = $('<iframe>', {
            'name': 'test-'+ attr,
            'id': 'test-'+ attr,
            'src': 'test-'+ attr +'.html?t='+ +new Date +'#'+ attr
        }).appendTo('body');

        setTimeout(check, 200);

        function check() {
            var testTotal = 0,
                testPassed = 0,
                testFailed = 0,
                requiredTotal = 0,
                requiredPassed = 0,
                baseColor = testBox.contents().find('.base').css('background-color');

            testBox.contents().find('.test').each(function() {
                var res = false;
                counter++;
                testTotal++;
                if ($(this).hasClass('float1')) {
                    var f = $(this).css('float');
                    if ($(this).hasClass('default')) {
                        res = f == 'none';
                        console.log(counter)
                        console.log($(this))
                        console.log('f1+'+f)
                        console.log('f1+res:'+res)
                    } else {
                        res = f == 'right';
                        console.log(counter)
                        console.log($(this))
                        console.log('f2+'+f)
                        console.log('f2+res:'+res)
                    }
                } else if ($(this).hasClass('height')) {
                    var h = $(this).height();
                    console.log(h);
                    if (!$(this).nextUntil()) {
                        var control = $(this).nextUntil();
                        while (control.nextUntil() && control[0].nodeType != 1) {
                            control = control.nextUntil();
                        }
                        control = control.height();
                        if ($(this).hasClass('default')) {
                            res = h == control;
                        } else {
                            res = h > control;
                        }
                    } else {
                        if ($(this).hasClass('default')) {
                            res = h == 0;
                        } else {
                            res = h > 0;
                        }
                    }
                } else {
                    var c = $(this).css('background-color');
                    if(counter < 573){
                    if ($(this).hasClass('default')) {
                        res = c == 'transparent' || c == 'rgba(0, 0, 0, 0)';
                    } else {
                        res = c == baseColor;
                    }
                    }else{
                        if ($(this).hasClass('default')) {
                            res = c == 'transparent' || c == 'rgba(0, 0, 0, 0)';
                        } else {
                            res = c == baseColor;
                        }
                    }
                }
                if ($(this).hasClass('required')) {
                    requiredTotal++;
                    if (res) {
                        requiredPassed++;
                    }
                }
                if (res) {
                    testPassed++;
                } else {
                    testFailed++;
                }
                result &= res;
            });

            if (result || (requiredTotal > 0 && requiredTotal == requiredPassed)) {
                if (testPassed == testTotal) {
                    $('<li class="passed" data-attr="'+ attr +'"><a href="test-'+ attr +'.html#'+ attr +'">'+ window.frames['test-'+ attr].document.title +'</a></li>').appendTo('#results');
                } else {
                    $('<li class="buggy" data-attr="'+ attr +'"><a href="test-'+ attr +'.html#'+ attr +'">'+ window.frames['test-'+ attr].document.title +'</a><span>('+ testFailed +' out of '+ testTotal +' failed)</span></li>').appendTo('#results');
                }
            } else {
                $('<li class="failed" data-attr="'+ attr +'"><a href="test-'+ attr +'.html#'+ attr +'">'+ window.frames['test-'+ attr].document.title +'</a><span>('+ testFailed +' out of '+ testTotal +' failed)</span></li>').appendTo('#results');
            }

            if (testCase.length) {
                setTimeout(changeSrc, 50);
            } else {
                if ($.browser.version != '6.0') {
                    console.log(counter +'tests');
                }
                var arrRes = [],
                    //ua = UA(),
                    //browser = ua['shell'],
                    //version = ua[browser],
                    browser = getBrowserVersion();
                    userAgent = navigator.userAgent,
                    datetime = +new Date;

                arrRes.push('browser='+ browser);
                //arrRes.push('version='+ version);
                arrRes.push('userAgent='+ userAgent);
                arrRes.push('datetime='+ datetime);
                
                $('#results li').each(function(){
                    if($(this).attr('class') == 'passed'){
                        arrRes.push($(this).attr('data-attr') +'=Y');
                    }else if($(this).attr('class') == 'failed'){
                        arrRes.push($(this).attr('data-attr') +'=N');
                    }else {
                        arrRes.push($(this).attr('data-attr') +'='+ $(this).attr('class'));
                    }
                });

                $.get('index.php?'+ arrRes.join('&'));
            }

            $('#test-'+ attr).remove();
        }

    }

    setTimeout(changeSrc, 200);
});


function getBrowserVersion() {  
    var browser = {};  
    var userAgent = navigator.userAgent.toLowerCase();  
    var s;  
    (s = userAgent.match(/msie ([\d.]+)/))  
            ? browser.ie = s[1]  
            : (s = userAgent.match(/firefox\/([\d.]+)/))  
                    ? browser.firefox = s[1]  
                    : (s = userAgent.match(/chrome\/([\d.]+)/))  
                            ? browser.chrome = s[1]  
                            : (s = userAgent.match(/opera.([\d.]+)/))  
                                    ? browser.opera = s[1]  
                                    : (s = userAgent.match(/android ([\d.]+)/))  
                                            ? browser.android = s[1]
                                            : (s = userAgent.match(/iphone os ([\d\w]+)/))  
                                                    ? browser.iphone = s[1]
                                                    : (s = userAgent.match(/ipad.+os ([\d\w]+) like/))  
                                                            ? browser.ipad = s[1]
                                                            : (s = userAgent.match(/version\/([\d.]+).*safari/))  
                                                                ? browser.safari = s[1]  
                                                                : 0;  
    var version = "";  
    if (browser.ie) {  
        version = 'IE ' + browser.ie;  
    } else if (browser.firefox) {  
        version = 'Firefox ' + browser.firefox;  
    } else if (browser.chrome) {  
        version = 'Chrome ' + browser.chrome;  
    } else if (browser.opera) {  
        version = 'Opera ' + browser.opera;  
    } else if (browser.android) {  
        version = 'Android ' + browser.android;  
    } else if (browser.iphone) {  
        version = 'iPhone OS ' + browser.iphone;  
    } else if (browser.ipad) {  
        version = 'iPad OS ' + browser.ipad;  
    } else if (browser.safari) {  
        version = 'Safari ' + browser.safari;  
    } else {  
        version = '未知浏览器';  
    }  
    return version;  
}  
var browser = getBrowserVersion();

/*
Copyright 2011, KISSY UI Library v1.30dev
MIT Licensed
build time: Dec 31 15:26
*/
/**
 * @fileOverview ua
 * @author lifesinger@gmail.com
 */
//function UA() {  
//    var ua = navigator.userAgent,
//        EMPTY = '', MOBILE = 'mobile',
//        core = EMPTY, shell = EMPTY, m,
//        IE_DETECT_RANGE = [6, 9], v, end,
//        VERSION_PLACEHOLDER = '{{version}}',
//        IE_DETECT_TPL = '<!--[if IE ' + VERSION_PLACEHOLDER + ']><s></s><![endif]-->',
//        div = document.createElement('div'), s,
//        o = {
//            // browser core type
//            //webkit: 0,
//            //trident: 0,
//            //gecko: 0,
//            //presto: 0,
//
//            // browser type
//            //chrome: 0,
//            //safari: 0,
//            //firefox:  0,
//            //ie: 0,
//            //opera: 0
//
//            //mobile: '',
//            //core: '',
//            //shell: ''
//        },
//        numberify = function(s) {
//            var c = 0;
//            // convert '1.2.3.4' to 1.234
//            return parseFloat(s.replace(/\./g, function() {
//                return (c++ === 0) ? '.' : '';
//            }));
//        };
//
//    // try to use IE-Conditional-Comment detect IE more accurately
//    // IE10 doesn't support this method, @ref: http://blogs.msdn.com/b/ie/archive/2011/07/06/html5-parsing-in-ie10.aspx
//    div.innerHTML = IE_DETECT_TPL.replace(VERSION_PLACEHOLDER, '');
//    s = div.getElementsByTagName('s');
//
//    if (s.length > 0) {
//
//        shell = 'ie';
//        o[core = 'trident'] = 0.1; // Trident detected, look for revision
//
//        // Get the Trident's accurate version
//        if ((m = ua.match(/Trident\/([\d.]*)/)) && m[1]) {
//            o[core] = numberify(m[1]);
//        }
//
//        // Detect the accurate version
//        // 注意：
//        //  o.shell = ie, 表示外壳是 ie
//        //  但 o.ie = 7, 并不代表外壳是 ie7, 还有可能是 ie8 的兼容模式
//        //  对于 ie8 的兼容模式，还要通过 documentMode 去判断。但此处不能让 o.ie = 8, 否则
//        //  很多脚本判断会失误。因为 ie8 的兼容模式表现行为和 ie7 相同，而不是和 ie8 相同
//        for (v = IE_DETECT_RANGE[0],end = IE_DETECT_RANGE[1]; v <= end; v++) {
//            div.innerHTML = IE_DETECT_TPL.replace(VERSION_PLACEHOLDER, v);
//            if (s.length > 0) {
//                o[shell] = v;
//                break;
//            }
//        }
//
//    } else {
//
//        // WebKit
//        if ((m = ua.match(/AppleWebKit\/([\d.]*)/)) && m[1]) {
//            o[core = 'webkit'] = numberify(m[1]);
//
//            // Chrome
//            if ((m = ua.match(/Chrome\/([\d.]*)/)) && m[1]) {
//                o[shell = 'chrome'] = numberify(m[1]);
//            }
//            // Safari
//            else if ((m = ua.match(/\/([\d.]*) Safari/)) && m[1]) {
//                o[shell = 'safari'] = numberify(m[1]);
//            }
//
//            // Apple Mobile
//            if (/ Mobile\//.test(ua)) {
//                o[MOBILE] = 'apple'; // iPad, iPhone or iPod Touch
//            }
//            // Other WebKit Mobile Browsers
//            else if ((m = ua.match(/NokiaN[^\/]*|Android \d\.\d|webOS\/\d\.\d/))) {
//                o[MOBILE] = m[0].toLowerCase(); // Nokia N-series, Android, webOS, ex: NokiaN95
//            }
//        }
//        // NOT WebKit
//        else {
//            // Presto
//            // ref: http://www.useragentstring.com/pages/useragentstring.php
//            if ((m = ua.match(/Presto\/([\d.]*)/)) && m[1]) {
//                o[core = 'presto'] = numberify(m[1]);
//
//                // Opera
//                if ((m = ua.match(/Opera\/([\d.]*)/)) && m[1]) {
//                    o[shell = 'opera'] = numberify(m[1]); // Opera detected, look for revision
//
//                    if ((m = ua.match(/Opera\/.* Version\/([\d.]*)/)) && m[1]) {
//                        o[shell] = numberify(m[1]);
//                    }
//
//                    // Opera Mini
//                    if ((m = ua.match(/Opera Mini[^;]*/)) && m) {
//                        o[MOBILE] = m[0].toLowerCase(); // ex: Opera Mini/2.0.4509/1316
//                    }
//                    // Opera Mobile
//                    // ex: Opera/9.80 (Windows NT 6.1; Opera Mobi/49; U; en) Presto/2.4.18 Version/10.00
//                    // issue: 由于 Opera Mobile 有 Version/ 字段，可能会与 Opera 混淆，同时对于 Opera Mobile 的版本号也比较混乱
//                    else if ((m = ua.match(/Opera Mobi[^;]*/)) && m) {
//                        o[MOBILE] = m[0];
//                    }
//                }
//
//                // NOT WebKit or Presto
//            } else {
//                // MSIE
//                // 由于最开始已经使用了 IE 条件注释判断，因此落到这里的唯一可能性只有 IE10+
//                if ((m = ua.match(/MSIE\s([^;]*)/)) && m[1]) {
//                    o[core = 'trident'] = 0.1; // Trident detected, look for revision
//                    o[shell = 'ie'] = numberify(m[1]);
//
//                    // Get the Trident's accurate version
//                    if ((m = ua.match(/Trident\/([\d.]*)/)) && m[1]) {
//                        o[core] = numberify(m[1]);
//                    }
//
//                    // NOT WebKit, Presto or IE
//                } else {
//                    // Gecko
//                    if ((m = ua.match(/Gecko/))) {
//                        o[core = 'gecko'] = 0.1; // Gecko detected, look for revision
//                        if ((m = ua.match(/rv:([\d.]*)/)) && m[1]) {
//                            o[core] = numberify(m[1]);
//                        }
//
//                        // Firefox
//                        if ((m = ua.match(/Firefox\/([\d.]*)/)) && m[1]) {
//                            o[shell = 'firefox'] = numberify(m[1]);
//                        }
//                    }
//                }
//            }
//        }
//    }
//
//    o.core = core;
//    o.shell = shell;
//    o._numberify = numberify;
//    return o;
//}
