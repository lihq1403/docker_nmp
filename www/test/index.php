<?php

try {
	$pdo = new PDO('mysql:dbname=test;host=mysql5.6.40;charset=utf8mb4;port=3306','root','root');
} catch (Exception $e) {
	echo $e->getMessage();
}

var_dump($pdo);exit();
 phpinfo();