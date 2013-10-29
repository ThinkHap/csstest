<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>CSS Properties Test Result</title>
        <?php include "../uxcommon/assets.php" ?>
        <link rel="stylesheet" type="text/css" href="../src/base.css" />
        <link rel="stylesheet" type="text/css" href="../src/nav.css" />
        <link rel="stylesheet" type="text/css" href="../src/properties/report.css" />
    </head>
    <body>
        <?php include "../uxcommon/header.php" ?>
        <div class="page_content">
            <div id="wrap" class="wrap">
                <div class="header">
                    <h1>CSS Properties Test Result</h1>
                    <a href="../" title="" class="return">返回首页>></a>
                </div>
                <div id="result" class="result">
                <?php
                    $con = mysql_connect("127.0.0.1","root","wanghao");
                
                    if (!$con) {
                        die('Could not connect: ' . mysql_error());
                    };
                    mysql_query("SET NAMES 'UTF8'"); 
                    mysql_select_db("csstest", $con);

                    $sql_brow="SELECT * FROM properties WHERE id IN (SELECT Max(id) FROM properties GROUP BY browser)"; //根据ua来筛选最新的一组数据
                    $sql_prop = "SELECT * FROM prop GROUP BY type"; //筛选所有type类别
                    $query_brow = mysql_query($sql_brow);
                    $query_prop = mysql_query($sql_prop);
                    $prop_name = array();
                    $prop_brow = array();
                    $prop_brow_ua = array();
                    $prop_brow_time = array();
                    $prop_id = array();
                    $prop_all = array();
                    $prop_dis = array();
                    $prop_disAll = array();
                    $table_hd = array();
                    $sum = 0;
                    $table_hd[] = '<tr><th class="properties"><span>Properties / Browser</span></th><th class="version"><span>Version</span></th>';
                    while($row = mysql_fetch_array($query_brow)) {
                        $prop_brow[] = $row['browser']; //储存浏览器名到数组
                        $prop_brow_ua[] = $row['uastring']; //储存对应浏览器的UA
                        $prop_brow_time[] = $row['time']; //储存对应浏览器的UA
                        $prop_id[] = $row['id']; //储存对应浏览器的UA
                        $prop_all[] = $row; //储存筛选出来的所有浏览器测试结果
                        $prop_dis[] = $row; //储存筛选出来的所有浏览器测试结果

                        unset($prop_dis[$sum][0]); 
                        unset($prop_dis[$sum][id]);  
                        unset($prop_dis[$sum][1]); 
                        unset($prop_dis[$sum][time]);  
                        unset($prop_dis[$sum][2]); 
                        unset($prop_dis[$sum][browser]);  
                        unset($prop_dis[$sum][3]); 
                        unset($prop_dis[$sum][uastring]);


                        //print_r($row);
                        //print_r($prop_dis);
                        //echo $sum;
                        //print_r($prop_dis[$sum]);
                        $joinArr = join('', $prop_dis[$sum]);
                        $prop_disAll[] = $joinArr;
                        //print_r($prop_disAll);
                        //die;
                        $sum++;//统计已记录的不同浏览器数量，即不同UA的数据
                    }

                    //$unique_prop[];
                    $unique_prop = array_unique($prop_disAll);
                    //print_r($prop_disAll);
                    //print_r(array_unique($prop_disAll));
                    foreach($unique_prop as $key=>$value){
                        echo $key.'<br />';
                        echo $value.'<br />';
                    }
                    die;
                    //print_r($prop_all);

                    sort($prop_brow);//对浏览器排序 
                    foreach($prop_brow as $key=>$value){ //输出浏览器表头html
                        $num = $key + 1; 
                        $table_hd[] = '<th class="browser"><span class="browser-no">'.$num.'.</span><span>'.$value.'</span></th>';
                    }
                    $table_hd[] = '</tr>';
                    $table_head = join('',$table_hd);
                    while($row = mysql_fetch_array($query_prop)) {
                        $type = $row["type"];
                        $prop_name[$type] = array();
                        $prop_ver[$type] = array();
                        
                        //根据属性分类循环输出属性名及属性版本到数组
                        $sql_query_type = "SELECT * FROM prop WHERE type='$type'";
                        $sql_prop_type = mysql_query($sql_query_type);
                        while($row_prop = mysql_fetch_array($sql_prop_type)) {
                            $prop_name[$type][] = $row_prop['property'];
                            $prop_ver[$type][] = $row_prop['version'];
                        }
                    }
                    foreach($prop_name as $key=>$value){ //key值为属性分类，value值为该类下面的属性名数组
                        $sum +=2;
                        echo '<table>';
                        echo '<caption>'.$key.'</caption>';
                        echo $table_head;
                        foreach($value as $k=>$val){//val值为该类的属性名
                            echo '<tr>';
                            echo '<td class="property">'.$val.'</td>';
                            echo '<td class="version">'.$prop_ver[$key][$k].'</td>';//根据属性分类和属性名键值查找另一相同结构数组下的属性版本值
                            foreach($prop_brow as $j=>$brow){//brow值为排序后要展示的浏览器名称
                                //$temp_ua = $prop_brow_ua[$j];  根据UA唯一值来确定输出数据的正确性
                                //$temp_brow = $brow;
                                foreach($prop_all as $row){
                                    if($row['browser']==$brow){
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
                        echo '<td class="ua-no">'. $num .'</td>';
                        echo '<td class="ua-browser">'.$value.'</td>';
                        echo '<td class="time">'.$prop_brow_time[$key].'</td>';
                        echo '<td class="ua">'.$prop_brow_ua[$key].'</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                
                    mysql_close($con);
                ?>
                </div>
            </div>    
        </div>    
        <?php include "../uxcommon/footer.php" ?>
        <script>
            //var cH = document.documentElement.clientHeight || document.body.clientHeight,
            //    result = document.getElementById('result');
            //var resultHeight = cH - 46 - 10 - 36 - 10 - 19 - 30;
            //result.style.height = resultHeight + 'px';
            //console.log(resultHeight);
        </script>
    </body>
</html>
