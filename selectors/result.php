<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>CSS Selectors Report Table</title>
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
<?php
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
    $sql = "SELECT * FROM selectors ";
?>
<table border="1" collapse="0" cellpadding="8">
    <tr>
        <!--th>in</th-->
        <th>browser</th>
        <th>version</th>
        <!--th>userAgent</th-->
        <!--th>datetime</th-->
        <th>*</th>
        <th>E</th>
        <th>.class</th>
        <th>#id</th>
        <th>E F</th>
        <th>E > F</th>
        <th>E + F</th>
        <th>E[attribute]</th> 
        <th>E[attribute=value]</th>
        <th>E[attribute~=value]</th>
        <th>E[attribute|=value]</th>
        <th>:first-child</th> 
        <th>:lang()</th>
        <th>:before</th>
        <th>::before</th>
        <th>:after</th>
        <th>::after</th>
        <th>:first-letter</th>
        <th>::first-letter</th>
        <th>:first-line</th> 
        <th>:first-line</th>
        <th>E[attribute^=value]</th>
        <th>E[attribute$=value]</th>
        <th>E[attribute*=value]</th>
        <th>E ~ F</th> 
        <th>:root</th>
        <th>:last-child</th>
        <th>:only-child</th>
        <th>:nth-child()</th>
        <th>:nth-last-child()</th>
        <th>:first-of-type</th>
        <th>:last-of-type</th>
        <th>:only-of-type</th> 
        <th>:nth-of-type()</th>
        <th>:nth-last-of-type()</th>
        <th>:empty</th>
        <th>:not()</th>
        <th>:target</th>
        <th>:enabled</th>
        <th>:disabled</th>
        <th>:checked</th>
    </tr>
<?php

$attr = array('any', 'element', 'class', 'id', 'descendant', 'child', 'adjacent', 'attribute-present', 'attribute-equal', 'attribute-space', 'attribute-hyphen', 'firstchild', 'lang', 'before', 'before3', 'after', 'after3', 'firstletter', 'firstletter3', 'firstline', 'firstline3', 'attribute-begin', 'attribute-end', 'attribute-contains', 'combine', 'root', 'lastchild', 'onlychild', 'nthchild', 'nthlastchild', 'firsttype', 'lasttype', 'onlytype', 'nthtype', 'nthlasttype', 'empty', 'not', 'target', 'enabled', 'disabled', 'checked'); 
$rs = mysql_query($sql);
while($row = mysql_fetch_array($rs)) {
    echo '<tr>';
    // echo '<td>'. $row['in'] .'</td>';
    echo '<td>'. $row['browser'] .'</td>';
    echo '<td>'. $row['version'] .'</td>';
    // echo '<td>'. $row['userAgent'] .'</td>';
    // echo '<td>'. $row['datetime'] .'</td>';
    for ($i = 0; $i < count($attr); $i++) {
        echo '<td class="'. $row[$attr[$i]] .'">'. $row[$attr[$i]] .'</td>';
    }
    echo '</tr>';
}
?>
</table>
</body>
</html>
