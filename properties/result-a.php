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

            .wrap {width:990px;margin:0 auto;}
            .browser {font-weight:bold;color:#c00;}
            table {line-height:24px;border-collapse: separate;margin:10px 0 30px;}
            table caption {line-height:30px;padding-left:10px;color:#eee;font-size:14px;font-weight: bold;text-align:left;background-color:#333;}
            table th {color:#fff;background-color:#555;}
            table th, table td {width:100px;color:#fff;font-weight:bold;padding:3px;border-right:1px solid #999;border-bottom:1px solid #999;background-color:#666;} 
            table span {display:block;padding:2px;text-align:center;}
            .properties {padding-left:20px;width:179px;background-color:#333;}
            .support, .supp {background-color:#090;}
            .unsupport, .unsupp {background-color:#b00;}
        </style>
    </head>
    <body>
        <div id="wrap" class="wrap">
            <h1>CSS Properties Test Result</h1>
            <div id="result" class="result">
            <?php
                $con = mysql_connect("127.0.0.1","root","wanghao");
                //$con = mysql_connect("localhost","csstest","csstest");
            
                if (!$con) {
                    die('Could not connect: ' . mysql_error());
                };
                mysql_select_db("csstest", $con);
                //$sql="SELECT count(*) as sum FROM properties WHERE id IN (SELECT Max(id) FROM properties GROUP BY uastring)";
                //$query_num=mysql_query($sql);
                //$sum = mysql_fetch_array($query_num);
                //print_r($sum['sum']);

                $sql_brow="SELECT * FROM properties WHERE id IN (SELECT Max(id) FROM properties GROUP BY uastring)";
                $sql_prop = "SELECT * FROM prop GROUP BY type";
                $query_brow = mysql_query($sql_brow);
                $query_prop = mysql_query($sql_prop);
                $prop_name = array();
                $prop_type = array();
                $prop_brow = array();
                    echo '<table>';
                    echo '<tr>';
                    echo '<th class="properties">Properties / Browser</th>';
                while($row = mysql_fetch_array($query_brow)) {
                    $prop_brow[] = $row['browser'];
                    echo '<th>'.$row['browser'].'</th>';
                }
                    echo '<tr>';
                while($row = mysql_fetch_array($query_prop)) {
                    $type = $row["type"];
                    $prop_name[$type] = array();
                    $prop_ver[$type] = array();
                    $prop_type[] = $type;
                    $sql_query_type = "SELECT * FROM prop WHERE type='$type'";
                    $sql_prop_type = mysql_query($sql_query_type);
                    while($row_prop = mysql_fetch_array($sql_prop_type)) {
                        $prop_name[$type][] = $row_prop['property'];
                        $prop_ver[$type][] = $row_prop['version'];
                    }
                }
                foreach($prop_name as $key=>$value){
                    echo '<th >'.$key.'</th>';
                    foreach($value as $k=>$val){
                        echo '<tr>';
                        echo '<td>'.$val.'</td>';
                        echo '</tr>';
                    }
                }

            
                mysql_close($con);
                die;
                //$sql="SELECT * FROM properties WHERE id IN (SELECT Max(id) FROM properties GROUP BY uastring)";
            ?>
            </div>
        </div>    
    </body>
</html>
