<?php
$db_host="localhost";  
$db_user="root";	
$db_password="";	   
$db_name="doctor";

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if($conn)
{
    echo "";
}
else{
    die("Connection failed because" .mysqli_connect_error());
}
?>