<!DOCTYPE html>
<html>
    <head>
        <meta charset="gbk" />
        <title>CSS Properties Test Result</title>
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


            table {border-collapse: separate;}
            table th, table td {border:1px solid #fff;padding:1px;background-color:#f4f4f4;} 
            table span {display:block;padding:2px;text-align:center;}
            .css-property {background-color:#f4f4f4;}
            .support {background-color:#0f0;}
            .unsupport {background-color:#f00;}
            .time, .browser, .ua-string {white-space:nowrap;}

            .background, .color, .dimension, .layout, .margin, .others, .positioning, .table, .user-interface {background-color:#fcc;}
            .border, .content, .font, .list, .media-queries, .padding, .printing, .text {background-color:#ccf;}
        </style>
    </head>
    <body>
        <div class="result">
            <h1>CSS Properties Test Result</h1>
                <?php
                    $con = mysql_connect("127.0.0.1","root","wanghao");
                    //$con = mysql_connect("localhost","csstest","csstest");
                    if (!$con) {
                        die('Could not connect: ' . mysql_error());
                    }
                    
                    mysql_select_db("csstest", $con);

                    $sql_query_group = "SELECT type FROM prop GROUP BY type";
                    $prop_group = mysql_query($sql_query_group);

                    $properties = array();
                    $prop = array();
                    while($row_group = mysql_fetch_array($prop_group)) {
                        $temp = array();
                        $sql_query = "SELECT * FROM prop";
                        $prop_query = mysql_query($sql_query);
                        while($row = mysql_fetch_array($prop_query)) {
                            if($row_group['type'] == $row['type']){
                                array_push($temp, $row['property']);
                            }
                        }
                        $properties[$row_group['type']] = $temp;
                        array_push($prop, $row_group['type']); 
                    }
                    //sort($properties);
                    echo '<table>';
                    echo '<tr>';
                    echo '<th><span class="time">Time</span></th>';
                    echo '<th><span class="browser">browser</span></th>';
                    foreach($prop as $key=>$value){
                        foreach($properties[$value] as $val){
                            echo '<th class="'.$value.'"><span class="css-property">'.$val.'</span></th>';
                        }      
                    }
                    echo '<th><span class="ua-string">UA String</span></th>';
                    echo '</tr>';
                    
                    $sql="SELECT * FROM properties";
                    
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)) {
                        echo "<tr>";
                        echo '<td><span class="time">' . $row['time'] . '</span></td>';
                        echo '<td><span class="browser">' . $row['browser'] . '</span></td>';
                        foreach($prop as $key=>$value){
                            foreach($properties[$value] as $val){
                                if($row[$val] == "N"){
                                    echo '<td class="'.$value.'"><span class="unsupport">' . $row[$val] . '</span></td>';
                                }else {
                                    echo '<td class="'.$value.'"><span class="support">' . $row[$val] . '</span></td>';
                                }
                            }
                        }
                        echo '<td><span class="ua-string">' . $row['uastring'] . '</span></td>';
                        echo "</tr>";

                    }
                    echo "</table>";
                    mysql_close($con);
                ?>
        </div>    
    </body>
</html>
