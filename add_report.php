<?php
session_start();
error_reporting(0);
include("Connection.php");

$name = $_SESSION ['username'];
if($name==true)
{

}
else {
    header('location:doctor_login.php');
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$patientid = mysqli_real_escape_string($conn,$_POST['patientid']);
  $p_username = mysqli_real_escape_string($conn,$_POST['p_username']);
  $p_age= mysqli_real_escape_string($conn,$_POST['p_age']);
  $p_contact = mysqli_real_escape_string($conn,$_POST['p_contact']);
  $p_address = mysqli_real_escape_string($conn,$_POST['p_address']);
  $p_email = mysqli_real_escape_string($conn,$_POST['p_email']);
  $p_password = mysqli_real_escape_string($conn,$_POST['p_password']);
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Add Patient Medicine</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js"></script>

		<div class="wrapper">
		    <div class="col-lg-12">
		        <header role="doctor-banner">
                    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                        <div class="container">
                            <a class="navbar-brand" href="index.php">E-DOCTOR</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample05">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                            <a href="doctor_home.php">HOME</a>
							</li>
							<li class="nav-item">
                            <a href="add.php" class="nav-link" >ADD</a>
							</li>
							<li class="nav-item">
                            <a class="nav-link" href="nav_update.php">UPDATE</a>
							</li>
							<li class="nav-item">
                            <a class="nav-link" href="nav_delete.php">DELETE</a>
                            </li>
							<li class="nav-item">
                            <a style="color: #0aabab" class="btn btn-light" href="nav_report.php">REPORT</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="logout1.php">Logout</a>
                            </li>
						</ul>
						</div>
					</nav>
				</header>
			</div>
		</div>
</head>

<body>

	<section id="doctor">
    	<div class="container text-center">
     		<div class="row">
        		<div class="col-md-12">
          			<div class="btn pat-info">ADD Medicine</div>
        		</div>
            </div>
        </div>
  	</section>


      <div class="wrapper">
		<div class="container">
	        <form action="add_report_2.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
	            <br>
                <label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Medicine Name*</label>
		        <div class="col-sm-6">
		        <input type="text" name="txt_name" class="form-control" placeholder="Enter Medicine Name (Required)" />
		        </div>
	        </div>

            <div class="form-group">
				<label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Indication*</label>
				<div class="col-sm-6">
				<input type="text" name="txt_indication" class="form-control" placeholder="Enter Indication (Required)" />
				</div>
			</div>

			<div class="form-group">
				<label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Usage*</label>
				<div class="col-sm-6">
				<input type="text" name="txt_usage" class="form-control" placeholder="Enter Patient Usage (Required)" />
				</div>
			</div>

			<div class="form-group">
				<label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Instruction</label>
				<div class="col-sm-6">
				<input type="text" name="txt_instruction" class="form-control" placeholder="Enter Instruction" />
				</div>
			</div>
      <?php
      echo'
      <input type="hidden" name="p_id" value="'.$patientid.'" >
      <input type="hidden" name="p_username" value="'.$p_username.'" >
      <input type="hidden" name="p_contact" value="'.$p_contact.'" >
      <input type="hidden" name="p_email" value="'.$p_email.'" >
      <input type="hidden" name="p_address" value="'.$p_address.'" >
      ';
       ?>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit" name="submit" class="btn btn-success" value="Insert"/>
				<a href="#" class="btn btn-danger">Cancel</a>
				</div>
			</div>
			</form>

		</div>
	</div>

</body>
</html>
