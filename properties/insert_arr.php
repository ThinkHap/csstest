<?php
    //$json = json_decode($_POST);
    //$json = (array)$json;
    //print_r($json);
    $json = $_POST;

    if (array_key_exists('sid', $json)) {
        $con = mysql_connect("127.0.0.1","root","wanghao");
        //$con = mysql_connect("localhost","csstest","csstest");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        };
    
    
        $results = array();
    
        mysql_select_db("csstest", $con);
        
        $sql="INSERT INTO prop (`property`, `type`, `version`) VALUES ('$property', '$_POST[browser]', '$_POST[uastring]', '$res')";
        
        if (!mysql_query($sql,$con)) {
            die('Error: ' . mysql_error());
        };
        mysql_close($con);
        die;
    };
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

            function submitData(url, data) { 
                xmlHttp=GetXmlHttpObject()
                if (xmlHttp==null) {
                   alert ("Browser does not support HTTP Request")
                   return
                };
                //var url="inert_arr.php";
                xmlHttp.onreadystatechange=stateChanged;
                xmlHttp.open("POST",url,true);
                xmlHttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlHttp.send("data"+ data +"&sid="+ Math.random());
            };
            
            function stateChanged() { 
                if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") { 
                    var data = xmlHttp.responseText;
                    console.log(data);
                    //submitData("insert_arr.php", data);
                    //document.write(xmlHttp.responseText);
                    //document.write("request result");
                } 
            }

            submitData("properties-json-test.js","data");
        
        </script>
</html>
