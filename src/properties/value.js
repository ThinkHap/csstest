var ua = navigator.userAgent;  
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
        if(userAgent.indexOf('360se')>0){
            version = 'IE ' + browser.ie + ' - 360SE';  
        }else if(userAgent.indexOf('maxthon')>0){
            version = 'IE ' + browser.ie + ' - Maxthon';  
        }else if(userAgent.indexOf('qqbrowser')>0){
            version = 'IE ' + browser.ie + ' - QQBrowser';  
        }else if(userAgent.indexOf('taobrowser')>0){
            version = 'IE ' + browser.ie + ' - TaoBrowser';  
        }else if(userAgent.indexOf('phone')>0){
            s = userAgent.match(/windows phone os ([\d.]+)/)  
            version = 'IE ' + browser.ie + ' - WP'+s[1];  
        }else{
            version = 'IE ' + browser.ie;  
        }
    } else if (browser.firefox) {  
        version = 'Firefox ' + browser.firefox;  
    } else if (browser.chrome) {  
        if(userAgent.indexOf('360se')>0){
            version = 'Chrome ' + browser.chrome + ' - 360SE';  
        }else if(userAgent.indexOf('maxthon')>0){
            version = 'Chrome ' + browser.chrome + ' - Maxthon';  
        }else if(userAgent.indexOf('qqbrowser')>0){
            version = 'Chrome ' + browser.chrome + ' - QQBrowser';  
        }else if(userAgent.indexOf('taobrowser')>0){
            version = 'Chrome ' + browser.chrome + ' - TaoBrowser';  
        }else{
            version = 'Chrome ' + browser.chrome;  
        }
    } else if (browser.opera) {  
        version = 'Opera ' + browser.opera;  
    } else if (browser.android) {  
        if(userAgent.indexOf('UC')>0){
            version = 'Android ' + browser.android + '- UC';  
        }else{
            version = 'Android ' + browser.android;  
        }
    } else if (browser.iphone) {  
        version = 'iPhone OS ' + browser.iphone;  
    } else if (browser.ipad) {  
        version = 'iPad OS ' + browser.ipad;  
    } else if (browser.safari) {  
        version = 'Safari ' + browser.safari;  
    } else {  
        version = 'unknown';  
    }  
    return version;  
}  
var browser = getBrowserVersion();

var resultHtml = "<p>以下是你目前正在使用的<span>" + browser + "</span>浏览器对CSS属性的支持情况。</p>" + "<p>" + ua + "</p>" ;
var resultDiv = document.getElementById("browser");
resultDiv.innerHTML = resultHtml;
