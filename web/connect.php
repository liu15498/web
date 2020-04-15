<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$con=mysqli_connect('140.116.177.150:3306','root','root');
mysqli_select_db($con,'log');
//$sql="TRUNCATE TABLE user"; 

//mysqli_query($con,$sql);
$query = "SELECT * FROM user";
 
if ($result = $con->query($query)) {
    echo "data";
    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {
        $field1name = $row["user"];
        $field2name = $row["psd"];
        echo "<br>".$field1name." ".$field2name."</br>";
    }
 
    /* free result set */
}
date_default_timezone_set('Asia/Taipei');
mysqli_close($con); 
?>