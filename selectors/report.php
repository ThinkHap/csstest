<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>CSS Selectors 测试结果</title>
<style>
table {
    margin: 0 auto;
	font: 12px/1.5 Tahoma, Geneva, sans-serif;
	border-collapse: collapse;
}
th {
    color: #eee;
    background-color: #333;
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
</style>
</head>
<body>
<table border="1" collapse="0" cellpadding="8">
    <tr>
        <th>选择器 \ 浏览器</th>
        <th>IE 6</th>
        <th>IE 7</th>
        <th>IE 8</th>
        <th>IE 9</th>
        <th>IE 10</th>
        <th>Chrome 17</th>
        <th>Safari 5.12</th>
        <th>Firefox 10.02</th>
        <th>Opera 11.61</th>
    </tr>
    <tr>
        <th>*</th>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E</th>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>.class</th>
        <td class="buggy">buggy</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>#id</th>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E F</th>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E > F</th>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E + F</th>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E[attribute]</th> 
        <td class="failed">failed</td>
        <td class="buggy">buggy</td>
        <td class="buggy">buggy</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E[attribute=value]</th>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E[attribute~=value]</th>
        <td class="failed">failed</td>
        <td class="buggy">buggy</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E[attribute|=value]</th>
        <td class="failed">failed</td>
        <td class="buggy">buggy</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:first-child</th> 
        <td class="failed">failed</td>
        <td class="buggy">buggy</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:lang()</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:before</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>::before</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:after</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>::after</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:first-letter</th>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>::first-letter</th>
        <td class="passed">passed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:first-line</th> 
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>::first-line</th>
        <td class="passed">passed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E[attribute^=value]</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E[attribute$=value]</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E[attribute*=value]</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>E ~ F</th> 
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:root</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:last-child</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:only-child</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:nth-child()</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:nth-last-child()</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:first-of-type</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:last-of-type</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:only-of-type</th> 
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:nth-of-type()</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:nth-last-of-type()</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:empty</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:not()</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:target</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:enabled</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:disabled</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
        <th>:checked</th>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="failed">failed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
        <td class="passed">passed</td>
    </tr>
</table>
</body>
</html>
