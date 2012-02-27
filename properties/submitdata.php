<?php
$con = mysql_connect("localhost","csstest","csstest");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    };
    
    $t = time();
    $time = date("Y-m-d H:i:s", $t);

    mysql_select_db("test", $con);
    
    $sql="INSERT INTO css (time, browser, uastring, cssresult) VALUES ('$time', '$_POST[browser]', '$_POST[uastring]', '$_POST[cssresult]')";
    
    if (!mysql_query($sql,$con)) {
        die('Error: ' . mysql_error());
    };

    //echo "1 record added";
    
    mysql_close($con)
?>
