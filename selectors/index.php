<?php
if (array_key_exists('browser', $_GET)) {
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    header("Content-type:text/html;charset=utf-8");

    // $linkId = mysql_connect('localhost', 'root', '0.00');
    $linkId = mysql_connect('localhost', 'csstest', 'csstest');
    if (!$linkId) {
        echo "connect database failed.";
        die;
    }
    if (!@mysql_select_db('csstest', $linkId)) {
        echo "cannot use this database.";
        die;
    }
    mysql_query("set names 'utf8'");

    $key = array();
    $val = array();
    foreach ($_GET as $k => $v) {
        array_push($key, '`'. $k .'`');
        array_push($val, "'". $v ."'");
    }

    $strKey = join(',', $key);
    $strVal = join(',', $val);
    $sql = "INSERT INTO selectors($strKey) VALUES($strVal)";
    if (!mysql_query($sql,$linkId)) {
        die('Error: ' . mysql_error());
    };
    mysql_close($linkId);
    die;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>CSS Selectors Test</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<style>
* { 
    padding: 0;
    margin: 0;
}
body {
    font: 12px/1.5 Verdana, Arial, sans-serif;
}
#wrap {
    width: 990px;
    margin: 0 auto;
}
#results {
    margin-top: 5px;
    list-style: none;
}
#results li {
    line-height: 28px;
    text-indent: 10px;
    margin: 0 0 3px 0;
}
.passed { 
    background-color: #090 !important; 
    color: #fff; 
}
.failed { 
    background-color: #900 !important; 
    color: #fff; 
}
.buggy {
    background-color: #f60 !important;
    color: #fff;
}
#results li span {
    margin: 0 0 0 3em;
    font-size: 0.8em;
}	
#results li a { 
    color: #fff; 
    font-size: 10px;
    text-decoration: none;
}
iframe {
    position: absolute;
    top: -450px;
    right: -450px;
    width: 400px;
    height: 200px;
}
</style>
</head>
<body>
<div id="wrap">
    <h1>CSS Selectors Test</h1>
    <p>自动运行大量测试用例，以判断你的浏览器是否兼容这些CSS选择器。不兼容的特殊选择器，会被标记。你可以点击每一个选择器，查看一个包含示例和解释的结果页面。</p>
    <p>由于从技术上不可能模拟某些依赖于用户交互行为的选择器，因些本测试套件不包含以下选择器：:hover, :active, :foucs, :selection。</p>
    <ul id="results"></ul>
</div>	
<script src="csstest.js"></script>
<!--
$(function() {
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
    };
});
-->
</body>
</html>
