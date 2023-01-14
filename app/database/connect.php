<?php
$host='localhost';
$user='root';
$pass='';
$db_name='blog';

$conn=new MySQli($host,$user,$pass,$db_name);

if($conn->connect_error) {
    die('error connection to database' .$conn->connect_error);
} 