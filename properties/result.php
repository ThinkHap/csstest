<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
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

            .wrap {width:990px;margin:0 auto;}
            .properties {text-align:center;width:179px;background-color:#333;}
            .browser {font-weight:bold;background:#666;}
            table {line-height:24px;border-collapse: separate;margin:10px 0 30px;}
            table caption {line-height:30px;padding-left:10px;border-bottom:1px solid #999;color:#eee;font-size:14px;font-weight: bold;text-align:left;background-color:#333;}
            table th {color:#fff;background-color:#666;}
            table th, table td {width:100px;font-weight:bold;padding:3px;border-right:1px solid #999;border-bottom:1px solid #999;} 
            table td {color:#fff;background:#666;} 
            table span {display:block;padding:2px;text-align:center;}
            .property {padding-left:20px;width:179px;background-color:#666;}
            .version {text-align:center;}
            .support, .supp {text-align:center;background-color:#090;}
            .unsupport, .unsupp {text-align:center;background-color:#b00;}

            .ua-browser {width:150px;padding-left:20px;font-weight:bold;background:#666;}
            .ua {width:820px;padding:0 20px;}
        </style>
    </head>
    <body>
        <div id="wrap" class="wrap">
            <h1>CSS Properties Test Result</h1>
            <div id="result" class="result">
            <?php
                //$con = mysql_connect("127.0.0.1","root","wanghao");
                $con = mysql_connect("localhost","csstest","csstest");
            
                if (!$con) {
                    die('Could not connect: ' . mysql_error());
                };
                mysql_query("SET NAMES UTF8"); 
                mysql_select_db("csstest", $con);

                $sql_brow="SELECT * FROM properties WHERE id IN (SELECT Max(id) FROM properties GROUP BY uastring)";
                $sql_prop = "SELECT * FROM prop GROUP BY type";
                $query_brow = mysql_query($sql_brow);
                $query_prop = mysql_query($sql_prop);
                $prop_name = array();
                //$prop_type = array();
                $prop_brow = array();
                $prop_brow_ua = array();
                $prop_all = array();
                $table_hd = array();
                $sum = 0;
                $table_hd[] = '<tr><th class="properties property">Properties / Browser</th><th class="version">Version</th>';
                while($row = mysql_fetch_array($query_brow)) {
                    $prop_brow[] = $row['browser'];
                    $prop_brow_ua[$row['browser']] = $row['uastring'];
                    $prop_all[] = $row;
                    $sum++;
                }
                sort($prop_brow);
                foreach($prop_brow as $key=>$value){
                    for($i=0;$i<$sum;$i++){
                        $j=$i+1;
                        $prop_col = 'prop_brow_'.$j;
                        $$prop_col = $prop_col;
                    }
                    $table_hd[] = '<th class="browser">'.$value.'</th>';
                }
                $table_hd[] = '</tr>';
                $table_head = join('',$table_hd);
                while($row = mysql_fetch_array($query_prop)) {
                    $type = $row["type"];
                    $prop_name[$type] = array();
                    $prop_ver[$type] = array();
                    for ($i = 1; $i <= count; $i++) {
                        $prop_browser = 'prop_brow_'.$i;
                        $$prop_browser = array();
                        ${$prop_browser}[$type] = array();
                    }
                    
                    //循环输出属性名及属性版本到数组
                    $sql_query_type = "SELECT * FROM prop WHERE type='$type'";
                    $sql_prop_type = mysql_query($sql_query_type);
                    while($row_prop = mysql_fetch_array($sql_prop_type)) {
                        $prop_name[$type][] = $row_prop['property'];
                        $prop_ver[$type][] = $row_prop['version'];
                        $properties_name = $row_prop['property'];
                    }
                }
                foreach($prop_name as $key=>$value){
                    $sum +=2;
                    echo '<table>';
                    echo '<caption>'.$key.'</caption>';
                    echo $table_head;
                    foreach($value as $k=>$val){
                        echo '<tr>';
                        echo '<td class="property">'.$val.'</td>';
                        echo '<td class="version">'.$prop_ver[$key][$k].'</td>';
                        foreach($prop_brow as $j=>$brow){
                            $temp_ua = $prop_brow_ua[$brow];
                            foreach($prop_all as $row){
                                if($row['uastring']==$temp_ua){
                                    if($row[$val] == 'N'){
                                        echo '<td class="unsupport">'.$row[$val].'</td>';
                                    }else{
                                        echo '<td class="support">'.$row[$val].'</td>';
                                    }
                                }
                            }
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
                }

                echo '<table>';
                echo '<caption>对应浏览器的UA</caption>';
                foreach($prop_brow as $key=>$value){
                    echo '<tr>';
                    echo '<td class="ua-browser">'.$value.'</td>';
                    echo '<td class="ua">'.$prop_brow_ua[$value].'</td>';
                    echo '</tr>';
                }
                echo '</table>';
            
                mysql_close($con);
                die;
            ?>
            </div>
        </div>    
    </body>
</html>
