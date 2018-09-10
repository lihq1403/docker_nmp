<?php
	$mysqli=new mysqli("mysql5.6.40","root","root","test");
    if($mysqli->connect_error){
        die("连接失败".$mysqli->connect_error);
    }
    var_dump($mysqli);