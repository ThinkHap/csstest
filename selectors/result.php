<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>CSS Selectors Report Table</title>
    <?php include "../uxcommon/assets.php" ?>
    <link rel="stylesheet" type="text/css" href="../src/base.css" />
    <link rel="stylesheet" type="text/css" href="../src/nav.css" />
    <link rel="stylesheet" type="text/css" href="../src/selectors/result.css" />
</head>
<body>
<?php include "../uxcommon/header.php" ?>
<?php
    // $linkId = mysql_connect('localhost', 'root', '0.00');
    //$linkId = mysql_connect('127.0.0.1', 'root', 'wanghao');
    $linkId = mysql_connect('localhost', 'csstest', 'csstest');
    if (!$linkId) {
        echo "connect database failed.";
        die;
    }
    if (!@mysql_select_db('csstest', $linkId)) {
        echo "cannot use this database.";
        die;
    }
    mysql_query("set names 'UTF8'");
    $sql = "SELECT * FROM selectors ";
?>
<div class="page_content">
    <div class="wrap">
        <div class="header">
            <h1>CSS Selectors Report Table</h1>
            <a href="../" title="" class="return">返回首页>></a>
        </div>
        <div id="result" class="result">
            <table border="1" collapse="0" cellpadding="8">
                <tr>
                    <!--th>in</th-->
                    <th class="browser"><span>Browsers / Selectors</span></th>
                    <!--<th>version</th>-->
                    <!--th>userAgent</th>-->
                    <!--th>datetime</th>-->
                    <th><span>*</span></th>
                    <th><span>E</span></th>
                    <th><span>.class</span></th>
                    <th><span>#id</span></th>
                    <th><span>E F</span></th>
                    <th><span>E > F</span></th>
                    <th><span>E + F</span></th>
                    <th><span>E[attribute]<</span>/th> 
                    <th><span>E[attribute=value]</span></th>
                    <th><span>E[attribute~=value]</span></th>
                    <th><span>E[attribute|=value]</span></th>
                    <th><span>:first-child<</span>/th> 
                    <th><span>:lang()</span></th>
                    <th><span>:before</span></th>
                    <th><span>::before</span></th>
                    <th><span>:after</span></th>
                    <th><span>::after</span></th>
                    <th><span>:first-letter</span></th>
                    <th><span>::first-letter</span></th>
                    <th><span>:first-line<</span>/th> 
                    <th><span>:first-line</span></th>
                    <th><span>E[attribute^=value]</span></th>
                    <th><span>E[attribute$=value]</span></th>
                    <th><span>E[attribute*=value]</span></th>
                    <th><span>E ~ F<</span>/th> 
                    <th><span>:root</span></th>
                    <th><span>:last-child</span></th>
                    <th><span>:only-child</span></th>
                    <th><span>:nth-child()</span></th>
                    <th><span>:nth-last-child()</span></th>
                    <th><span>:first-of-type</span></th>
                    <th><span>:last-of-type</span></th>
                    <th><span>:only-of-type<</span>/th> 
                    <th><span>:nth-of-type()</span></th>
                    <th><span>:nth-last-of-type()</span></th>
                    <th><span>:empty</span></th>
                    <th><span>:not()</span></th>
                    <th><span>:target</span></th>
                    <th><span>:enabled</span></th>
                    <th><span>:disabled</span></th>
                    <th><span>:checked</span></th>
                    <th class="ua"><span>UserAgent</span></th>
                </tr>
            <?php
            $attr = array('any', 'element', 'class', 'id', 'descendant', 'child', 'adjacent', 'attribute-present', 'attribute-equal', 'attribute-space', 'attribute-hyphen', 'firstchild', 'lang', 'before', 'before3', 'after', 'after3', 'firstletter', 'firstletter3', 'firstline', 'firstline3', 'attribute-begin', 'attribute-end', 'attribute-contains', 'combine', 'root', 'lastchild', 'onlychild', 'nthchild', 'nthlastchild', 'firsttype', 'lasttype', 'onlytype', 'nthtype', 'nthlasttype', 'empty', 'not', 'target', 'enabled', 'disabled', 'checked'); 
            $rs = mysql_query($sql);
            while($row = mysql_fetch_array($rs)) {
                echo '<tr>';
                // echo '<td>'. $row['in'] .'</td>';
                echo '<td class="browsers">'. $row['browser'] .'</td>';
                //echo '<td>'. $row['version'] .'</td>';
                // echo '<td>'. $row['userAgent'] .'</td>';
                // echo '<td>'. $row['datetime'] .'</td>';
                for ($i = 0; $i < count($attr); $i++) {
                    if($row[$attr[$i]] == "Y"){
                        echo '<td class="support">'. $row[$attr[$i]] .'</td>';
                    }elseif($row[$attr[$i]] == "N"){
                        echo '<td class="unsupport">'. $row[$attr[$i]] .'</td>';
                    }else{
                        echo '<td class="'.$row[$attr[$i]].'">'. $row[$attr[$i]] .'</td>';
                    }
                }
                echo '<td class="ua">'. $row['userAgent'] .'</td>';
                echo '</tr>';
            }
            ?>
            </table>
        </div>
    </div>
</div>
<?php include "../uxcommon/footer.php" ?>
<script>
//    var cH = document.documentElement.clientHeight || document.body.clientHeight,
//        result = document.getElementById('result');
//    var resultHeight = cH - 46 - 20 - 36 - 19 - 40;
//    result.style.height = resultHeight + 'px';
//    console.log(resultHeight);
</script>
</body>
</html>
