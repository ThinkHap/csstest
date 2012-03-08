<?php
    $json_string='"动画(Animation)": { "animation": {"version":3, "value":""} } ';
    
    //$json = (array) $json_string;
    $json = json_decode($json_string);

	function objectToArray($d) {
		if (is_object($d)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars($d);
		}
 
		if (is_array($d)) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}
    
    $json_arr = objectToArray($json);
    print_r($json_arr);
    die;

    foreach($json_arr as $k=>$v){
        foreach($json_arr[$k] as $ke=>$va){
            foreach($json_arr[$k][$ke] as $key=>$val){
                if($key == "version"){
                    echo "<h4>$k</h4>"; //type
                    echo $ke; //property
                    echo "</br>";
                    echo "$key : $val"; //version & value
                    echo "</br>";
                }elseif($key == "value"){
                    
                    echo "<h4>$k</h4>"; //type
                    echo $ke; //property
                    echo "</br>";
                    echo "$key : $val"; //version & value
                    echo "</br>";
                };
            };
        };
    };
    

    if (array_key_exists('background', $json_arr)) {
        $con = mysql_connect("127.0.0.1","root","wanghao");
        //$con = mysql_connect("localhost","csstest","csstest");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        };
    
        mysql_select_db("csstest", $con);

        foreach($json_arr as $k=>$v){
            foreach($json_arr[$k] as $ke=>$va){
                foreach($json_arr[$k][$ke] as $key=>$val){
                    if($key == "version"){
                        echo "<h4>$k</h4>"; //type
                        echo $ke; //property
                        echo "</br>";
                        echo "$key : $val"; //version & value
                        echo "</br>";
                        $sql="INSERT INTO prop (`property`, `type`, `version`) VALUES ('$ke', '$k', '$val')";
                        mysql_query($sql);
                    };
                };
            };
        };
        
        
        if (!mysql_query($sql,$con)) {
            die('Error: ' . mysql_error());
        };
        mysql_close($con);
        die;
    };
?>
