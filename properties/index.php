<?php
    //$con = mysql_connect("127.0.0.1","root","wanghao");
    $con = mysql_connect("localhost","csstest","csstest");

    if (!$con) {
        die('Could not connect: ' . mysql_error());
    };
    mysql_select_db("csstest", $con);

    $sql_query = "SELECT * FROM prop";
    $prop = mysql_query($sql_query);

    $properties = array();
    while($row = mysql_fetch_array($prop)) {
        array_push($properties, $row['property']);
    }
    sort($properties);

    if (!array_key_exists('browser', $_POST)) {
        mysql_close($con);
    }elseif (array_key_exists('browser', $_POST)) {
        sort($properties);
        echo "test";
        $prop = join("`, `", $properties);
    
        $results = array();
        for ($i = 0; $i < count($properties); $i++) {
            $post = $_POST[$properties[$i]];
            array_push($results, $post);
        }
        $res = join("', '", $results);
    
        $t = time();
        $time = date("Y-m-d H:i:s", $t);
    
        mysql_select_db("csstest", $con);
        
        $sql="INSERT INTO properties (`time`, `browser`, `uastring`, `$prop`) VALUES ('$time', '$_POST[browser]', '$_POST[uastring]', '$res')";
        
        if (!mysql_query($sql,$con)) {
            die('Error: ' . mysql_error());
        };
        mysql_close($con);
        die;
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="gbk" />
        <title>检测浏览器样式支持</title>
        <style type="text/css">
            body, form, h1, h2, h3, h4, p, img, ul, li, ol, dl, dt, dd, a, span, input, tr, th, td{margin:0;padding:0;}
		    body {font:normal 12px/1.5 "Arial","宋体","Simsun","Tahoma",sans-serif;}
		    li{list-style:none;}
		    img {border:0 none;vertical-align:top;}
		    table {border-collapse:collapse;border-spacing:0;}
            .cf:after{display:block;visibility:hidden;font-size:0;line-height:0;clear:both;content:"";}  
            .cf{zoom:1;}
		    a{color:#000;text-decoration:none;}
		    a:visited{}
		    a:hover{text-decoration:underline;}
		    a:active{}

            h2 a {color:#f44;}
            table {border-collapse: separate;}
            table th, table td {border:1px solid #fff;padding:1px;background-color:#f4f4f4;} 
            table span {display:block;padding:2px;text-align:center;}
            .css-property {background-color:#f4f4f4;}
            .support {background-color:#0f0;}
            .unsupport {background-color:#f00;}

        </style>
        <script src="http://a.tbcdn.cn/s/kissy/1.1.6/kissy-min.js"></script>
    </head>
    <body>
        <h1>以下是你目前正在使用的浏览器对CSS属性的支持情况：</h1>
        <div id="result" class="result">
        
        </div>
    </body>
        <script>
            <?php
                $p = join("', '", $properties);
                echo "var properties = ['$p'];";
            ?>
            cssProperties = properties.sort();
            var cssProperties = properties;
            
            var result = [];
            var fullresult = ['<table>'];
            
            var getStyleProperty = (function(){
            	var prefixes = ['', '-ms-','-moz-', '-webkit-', '-khtml-', '-o-'];
            	var reg_cap = /-([a-z])/g;
                var pre;
            	function getStyle(css, el) {
            	    el = el || document.documentElement;
            	    var style = el.style,test;
            	    for (var i=0, l=prefixes.length; i < l; i++) {
                        var pre = prefixes[i];
            		    test = (prefixes[i] + css).replace(reg_cap,function($0,$1){
            		        return $1.toUpperCase();
            		    });
            		    if(test in style && pre == ""){
            		        return true;
            		    }else if(test in style){
                            return pre;
                        };
            	    };
            	    return false;
            	};
            	return getStyle;
            })();
            
            for (var i = 0; i < cssProperties.length; i++) {
                var _this = cssProperties[i],
                    getStyle = getStyleProperty(_this);
                
                // 0. origin results
                if (getStyle == true){
                    fullresult.push('<tr><td><span class="css-property">' + _this + '</span></td>' + '<td><span class="support">Y</span></td></tr>');
                    result.push(_this +'=Y');
                }else if (getStyle) {
                    result.push(_this +'='+ getStyle);
                    fullresult.push('<tr><td><span class="css-property">' + _this + '</span></td>' + '<td><span class="support">' + getStyle + '</span></td></tr>');
                }else {
                    result.push(_this +'=N');
                    fullresult.push('<tr><td><span class="css-property">' + _this + '</span></td>' + '<td><span class="unsupport">N</span></td></tr>');
                };

            
            };       

            var cssresult = result.join("&");
            var time = new Date();
            var ua = navigator.userAgent;
            //var ua = KISSY.UA;
            document.write(ua+"</br>");
            //document.write(cssresult);

            fullresult.push('</table>');
            var resultHtml = fullresult.join("\r");


            
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
                                                : (s = userAgent  
                                                        .match(/version\/([\d.]+).*safari/))  
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
                } else if (browser.safari) {  
                    version = 'Safari ' + browser.safari;  
                } else {  
                    version = '未知浏览器';  
                }  
                return version;  
            }  
            var browser = getBrowserVersion();
            document.write(browser +"</br>");
            document.write(resultHtml);

            function GetXmlHttpObject() {
                var xmlHttp=null; 
                try { // Firefox, Opera 8.0+, Safari
                    xmlHttp=new XMLHttpRequest();
                }
                catch (e) { // Internet Explorer
                    try {
                        xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
                    }
                    catch (e) {
                        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                };
                return xmlHttp;
            };

            //function submitData() { 
            //    KISSY.IO.post('index.php' + '?browser='+ browser +'&uastring='+ ua +'&sid='+ Math.random(), function(result){
            //        alert("Success");
            //    });
            //};

            function submitData() { 
                xmlHttp=GetXmlHttpObject()
                if (xmlHttp==null) {
                   alert ("Browser does not support HTTP Request")
                   return
                };
                var url="index.php";
                xmlHttp.onreadystatechange=stateChanged;
                xmlHttp.open("POST",url,true);
                xmlHttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlHttp.send("browser="+ browser +"&uastring="+ ua +"&"+ cssresult +"&sid="+ Math.random());
            }
            
            function stateChanged() { 
                if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") { 
                    //document.write(xmlHttp.responseText);
                    //document.write("request result");
                    //alert("Success");
                } 
            }

            submitData();
        
        </script>
</html>

