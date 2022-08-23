<?php
$db_name="site";
$db_host="localhost";
$db_pass="";
$db_user="root";
$pdo=new PDO('mysql:dbname='.$db_name.';charset=utf8mb4;host='.$db_host,$db_user,$db_pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 