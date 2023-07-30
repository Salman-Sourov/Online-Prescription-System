<?php

session_start();
error_reporting(0);
include("Connection.php");

$name = $_SESSION ['username'];

if($_SERVER["REQUEST_METHOD"]=="POST")
{

  $m_name = mysqli_real_escape_string($conn,$_POST['txt_name']);
  $indication = mysqli_real_escape_string($conn,$_POST['txt_indication']);
  $usage = mysqli_real_escape_string($conn, $_POST['txt_usage']);
  $instruction = mysqli_real_escape_string($conn, $_POST['txt_instruction']);
  $p_id=mysqli_real_escape_string($conn, $_POST['p_id']);
  $p_username=mysqli_real_escape_string($conn, $_POST['p_username']);
  $p_contact=mysqli_real_escape_string($conn, $_POST['p_contact']);
  $p_address=mysqli_real_escape_string($conn, $_POST['p_address']);
  date_default_timezone_set("Asia/Dhaka");
  $today_date=date('Y-m-d');

  $query1="select * from medicine where p_id = '$patientid'";
          $data1 = mysqli_query($conn,$query1);
  if($m_name!="" && $indication!="" && $usage!="")
    {
      $query2 = "INSERT INTO MEDICINE VALUES ('$mid', '$p_id', '$p_username', '$p_age', '$p_contact', '$m_name', '$indication', '$usage', '$instruction', '$today_date')";
      $data2 = mysqli_query($conn,$query2);


      if($data2)
      {
        echo ".$p_id";
        echo "<br>";
        $_SESSION['msg']= " Data Inserted into Database.";
        header("location: nav_report.php");
      }
      else
      {
        echo "Error";
      }
    }
  else
    {
    echo "Required Box are empty!";
    }
}
?>
