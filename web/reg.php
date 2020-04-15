<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
$con=mysqli_connect('140.116.177.150:3306','root','root');
$sql = "CREATE DATABASE IF NOT EXISTS log";
if ($con->query($sql) === FALSE) {
    echo("Error: ".mysqli_error($con));
} 
$db=mysqli_select_db($con,'log');
if(!$db){
    echo("Error: ".mysqli_error($con));
    exit();
}
$sql="CREATE TABLE IF NOT EXISTS user(
    id int(10) not null auto_increment,
    user varchar(30),
    psd varchar(40),
    PRIMARY KEY(id))"; 

$con->query($sql);
date_default_timezone_set('Asia/Taipei');

$user=$_POST["user"];
$psd=$_POST["psd"];
$sql='SELECT * FROM user WHERE user = "'.$user.'" ';
$res=mysqli_query($con,$sql);
if (!$res) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
$row=mysqli_num_rows($res);

if(!$row)
{
    $sql="INSERT INTO user (id,user, psd) VALUES(null,'$user','$psd')";
    mysqli_query($con,$sql);
    echo's';
}
else
{
    echo 'already used';
}
mysqli_close($con); 
?>