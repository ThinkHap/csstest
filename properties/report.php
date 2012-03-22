<!DOCTYPE html>
<html>
    <head>
        <meta charset="gbk" />
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
                    <a href="../" title="" class="return">������ҳ>></a>
                </div>
                <div id="result" class="result">
                <?php
                    //$con = mysql_connect("127.0.0.1","root","wanghao");
                    $con = mysql_connect("localhost","csstest","csstest");
                
                    if (!$con) {
                        die('Could not connect: ' . mysql_error());
                    };
                    mysql_query("SET NAMES 'GBK'"); 
                    mysql_select_db("csstest", $con);

                    $sql_brow="SELECT * FROM properties WHERE id IN (SELECT Max(id) FROM properties GROUP BY uastring)";//����ua��ɸѡ���µ�һ������
                    $sql_prop = "SELECT * FROM prop GROUP BY type";//ɸѡ����type���
                    $query_brow = mysql_query($sql_brow);
                    $query_prop = mysql_query($sql_prop);
                    $prop_name = array();
                    $prop_brow = array();
                    $prop_brow_ua = array();
                    $prop_brow_time = array();
                    $prop_id = array();
                    $prop_all = array();
                    $table_hd = array();
                    $sum = 0;
                    $table_hd[] = '<tr><th class="properties"><span>Properties / Browser</span></th><th class="version"><span>Version</span></th>';
                    while($row = mysql_fetch_array($query_brow)) {
                        $prop_brow[] = $row['browser'];//�����������������
                        $prop_brow_ua[] = $row['uastring'];//�����Ӧ�������UA
                        $prop_brow_time[] = $row['time'];//�����Ӧ�������UA
                        $prop_id[] = $row['id'];//�����Ӧ�������UA
                        $prop_all[] = $row;//����ɸѡ������������������Խ��
                        $sum++;//ͳ���Ѽ�¼�Ĳ�ͬ���������������ͬUA������
                    }
                    //sort($prop_brow);//����������� 
                    foreach($prop_brow as $key=>$value){//����������ͷhtml
                    $table_hd[] = '<th class="browser"><span>'.$value.' ('.$prop_id[$key].')</span></th>';
                    }
                    $table_hd[] = '</tr>';
                    $table_head = join('',$table_hd);
                    while($row = mysql_fetch_array($query_prop)) {
                        $type = $row["type"];
                        $prop_name[$type] = array();
                        $prop_ver[$type] = array();
                        
                        //�������Է���ѭ����������������԰汾������
                        $sql_query_type = "SELECT * FROM prop WHERE type='$type'";
                        $sql_prop_type = mysql_query($sql_query_type);
                        while($row_prop = mysql_fetch_array($sql_prop_type)) {
                            $prop_name[$type][] = $row_prop['property'];
                            $prop_ver[$type][] = $row_prop['version'];
                        }
                    }
                    foreach($prop_name as $key=>$value){//keyֵΪ���Է��࣬valueֵΪ�������������������
                        $sum +=2;
                        echo '<table>';
                        echo '<caption>'.$key.'</caption>';
                        echo $table_head;
                        foreach($value as $k=>$val){//valֵΪ�����������
                            echo '<tr>';
                            echo '<td class="property">'.$val.'</td>';
                            echo '<td class="version">'.$prop_ver[$key][$k].'</td>';//�������Է������������ֵ������һ��ͬ�ṹ�����µ����԰汾ֵ
                            foreach($prop_brow as $j=>$brow){//browֵΪ�����Ҫչʾ�����������
                                $temp_ua = $prop_brow_ua[$j];
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
                    echo '<caption>��Ӧ�������UA</caption>';
                    foreach($prop_brow as $key=>$value){
                        echo '<tr>';
                        echo '<td class="ua-browser">'.$value.' ('.$prop_id[$key].')</td>';
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
