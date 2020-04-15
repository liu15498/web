<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
$con=mysqli_connect('localhost','root','root');
$db=mysqli_select_db($con,'log');
if(!$db){
    echo("Error: ".mysqli_error($con));
    exit();
}
date_default_timezone_set('Asia/Taipei');

$user=$_POST["user"];
$psd=$_POST["psd"];
$sql='SELECT * FROM user WHERE user = "'.$user.'"and psd = "'.$psd.'" ';
$res=mysqli_query($con,$sql);
if (!$res) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
$row=mysqli_num_rows($res);
if($row)
{
    
    echo's';
}
else
{
    echo 'psd or username wrong';
}
mysqli_close($con); 
?>