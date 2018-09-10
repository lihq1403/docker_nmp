<?php
	$redis = new Redis();
	$redis->connect('redis', 6379);
	$br = "<br>";
    echo "Connection to server sucessfully".$br;
    $redis->auth('lihq');
    echo "Server is running: " . $redis->ping().$br;
    $redis->set( "test" , "Hello World");
    echo $redis->get( "test").$br;