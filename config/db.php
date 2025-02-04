<?php
error_reporting(0);
//echo '<p style="color:black; margin-top:40px;">'.$_SERVER['REQUEST_URI'].'</p>';


$host = "localhost";
$user = "root";
$dbpass = "";
$dbname = "thesis";
//$dbname = "bsau_library";
global $conn;
$conn = mysqli_connect($host,$user,$dbpass) or die('Failed to connect to Database Server');
$db = mysqli_select_db($conn,$dbname);

mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");


