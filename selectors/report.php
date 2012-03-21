<!DOCTYPE HTML>
<html>
<head>
    <meta charset="gbk">
    <title>CSS Selectors ���Խ��</title>
    <?php include "../uxcommon/assets.php" ?>
    <link rel="stylesheet" type="text/css" href="../src/nav.css" />
    <link rel="stylesheet" type="text/css" href="../src/selectors/report.css" />
</head>
<body>
<?php include "../uxcommon/header.php" ?>
<div class="page_content">
    <div class="wrap">
        <div class="header">
            <h1>CSS Selectors Test Report</h1>
            <a href="/csstest" title="" class="return">������ҳ>></a>
        </div>
        <table border="1" collapse="0" cellpadding="8">
            <tr>
                <th>ѡ���� \ �����</th>
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
    </div>
</div>
<?php include "../uxcommon/footer.php" ?>
</body>
</html>
