<?php
    //$con = mysql_connect("127.0.0.1","root","wanghao");
    $con = mysql_connect("localhost","csstest","csstest");

    if (!$con) {
        die('Could not connect: ' . mysql_error());
    };
    mysql_query("SET NAMES 'UTF8'"); 
    mysql_select_db("csstest", $con);

    $sql_query = "SELECT * FROM prop GROUP BY type";
    $sql_prop = mysql_query($sql_query);
    $prop_name = array();
    $prop_type = array();
    $prop_ver = array();
    $prop_ajax = array();
    while($row = mysql_fetch_array($sql_prop)) {
        $type = $row["type"];
        $prop_name[$type] = array();
        $prop_ver[$type] = array();
        $prop_type[] = $type;
        $sql_query_type = "SELECT * FROM prop WHERE type='$type'";
        $sql_prop_type = mysql_query($sql_query_type);
        while($row_prop = mysql_fetch_array($sql_prop_type)) {
            $prop_name[$type][] = $row_prop['property'];
            $prop_ver[$type][] = $row_prop['version'];
            $prop_ajax[]=$row_prop['property'];
        }
    }

    //ajax数据储存
    if (!array_key_exists('browser', $_POST)) {
        mysql_close($con);
    }elseif (array_key_exists('browser', $_POST)) {
        sort($prop_ajax);
        print_r("test");
        $prop = join("`, `", $prop_ajax);
        $results = array();
        for ($i = 0; $i < count($prop_ajax); $i++) {
            $post = $_POST[$prop_ajax[$i]];
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
        <meta charset="utf-8" />
        <title>检测浏览器样式支持</title>
        <?php include "../uxcommon/assets.php" ?>
        <link rel="stylesheet" type="text/css" href="../src/base.css" />
        <link rel="stylesheet" type="text/css" href="../src/nav.css" />
        <link rel="stylesheet" type="text/css" href="../src/properties/index.css" />
        <script src="http://a.tbcdn.cn/s/kissy/1.1.6/kissy-min.js"></script>
    </head>
    <body>
        <?php include "../uxcommon/header.php" ?>
        <div class="page_content">
            <div class="wrap">
                <div class="header">
                    <h1>CSS Properties Test</h1>
                    <a href="../" title="" class="return">返回首页>></a>
                </div>
                <div id="result" class="result">
                </div>
            </div>
        </div>
        <?php include "../uxcommon/footer.php" ?>
        <script>
            <?php
                echo "var prop_name = ".json_encode($prop_name).";";
                echo "var prop_ver = ".json_encode($prop_ver).";";
                echo "var prop_type = ".json_encode($prop_type).";";
            ?>

            var result = [];
            var fullresult = [];

            for(var i in prop_type) {
                //document.write(prop_type[i] + '</br>');
                var type = prop_type[i];
                fullresult.push('<table>');
                fullresult.push('<caption>' + type + '</caption>');
                fullresult.push('<th>Properties</th><th>Compatibility</th><th>Version</th>');
                for(var j in prop_name[type]){
                    //document.write(cssProperties[type][j] + ' | ');
                    cssResult(prop_name[type][j],prop_ver[type][j])
                }
                fullresult.push('</table>');
            }        
            
            function getStyleProperty(prop){
            	var prefixes = ['', 'ms-','-moz-', '-webkit-', '-khtml-', '-o-'];
            	var reg_cap = /-([a-z])/g;
                var style = document.documentElement.style,
                    test;
            	for (var i=0, l=prefixes.length; i < l; i++) {
                    var pre = prefixes[i];
            	    test = (prefixes[i] + prop).replace(reg_cap,function($0,$1){
            	        return $1.toUpperCase();
            	    });
            	    if(test in style && pre == ""){
            	        return true;
            	    }else if(test in style){
                        if(pre == 'ms-'){
                            return '-'+pre;
                        }else{
                            return pre;
                        }
                    };
            	};
            	return false;
            };
            
            function cssResult(ele,ver) {
                var _this = ele,
                    getStyle = getStyleProperty(_this);
                if (getStyle == true){
                    fullresult.push('<tr><td class="css-property supp">' + _this + '</li>' + '<td class="compatibility support">Y</td><td class="version support">' + ver + '</td></tr>');
                    result.push(_this +'=Y');
                }else if (getStyle) {
                    result.push(_this +'='+ getStyle);
                    fullresult.push('<tr><td class="css-property supp">' + _this + '</td>' + '<td class="compatibility support">' + getStyle + '</td><td class="version support">' + ver + '</td></tr>');
                }else {
                    result.push(_this +'=N');
                    fullresult.push('<tr><td class="css-property unsupp">' + _this + '</td>' + '<td class="compatibility unsupport">N</td><td class="version unsupport">' + ver + '</td></tr>');
                };
            }

            var cssresult = result.join("&");
            var ua = navigator.userAgent;
            //var ua = KISSY.UA;

            fullresult.push('</table>');
            
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

            var resultHtml = "<p>以下是你目前正在使用的<span class='browser'>" + browser + "</span>浏览器对CSS属性的支持情况</p>" + "<p>" + ua + "</p>" + fullresult.join("\r");
            var resultDiv = document.getElementById("result");
            resultDiv.innerHTML = resultHtml;

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
    </body>
</html>

