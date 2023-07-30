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
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Patient</title>
		
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.12.4-jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

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
                        <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                            <li class="nav-item">
                            <a class="nav-link" href="doctor_home.php">HOME</a>
							</li>
							<li class="nav-item">
                            <a style="color:#fff" class="nav-link" >ADD</a>
							</li>
							<li class="nav-item">
                            <a class="nav-link" href="nav_update.php">UPDATE</a>
							</li>
							<li class="nav-item">
                            <a class="nav-link" href="nav_delete.php">DELETE</a>
                            </li>
							<li class="nav-item">
                            <a class="nav-link" href="nav_report.php">REPORT</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="logout1.php">Logout</a>
                            </li>
						</ul>
      </form>
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
          			<div class="btn pat-info">ADD Patient</div>
        		</div>
            </div>
        </div>
  	</section>

	<div class="wrapper">	
		<div class="container">	
	        <form action="" method="GET" class="form-horizontal" enctype="multipart/form-data">			
			


			<div class="form-group">
	            <br>
                <label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Patient Name*</label>
		        <div class="col-sm-6">
		        <input type="text" name="txt_name" class="form-control" placeholder="Enter Patient Name (Required)" />
		        </div>
	        </div>
				
            <div class="form-group">
				<label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Age*</label>
				<div class="col-sm-6">
				<input type="number" name="txt_age" class="form-control" placeholder="Enter Patient Age (Required)" />
				</div>
			</div>
					
			<div class="form-group">
				<label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Contact No*</label>
				<div class="col-sm-6">
				<input type="number" name="txt_contact" class="form-control" placeholder="Enter Patient Contact No (Required)" />
				</div>
			</div>
				
			<div class="form-group">
				<label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Address</label>
				<div class="col-sm-6">
				<input type="text" name="txt_address" class="form-control" placeholder="Enter Patient Address" />
				</div>
			</div>
				
			<div class="form-group">
				<label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-6">
				<input type="text" name="txt_email" class="form-control" placeholder="Enter Patient Email" />
				</div>
			</div>
            
            <div class="form-group">
				<label style="color:black;font-weight: bold;" class="col-sm-3 control-label">Password*</label>
				<div class="col-sm-6">
				<input type="password" name="txt_password" class="form-control" placeholder="Enter Patient Password (Required)" />
				</div>
			</div>		

			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="submit" class="btn btn-success" value="Insert"/>
				<a href="#" class="btn btn-danger">Cancel</a>
				<a href="doctor_home.php" class="btn btn-success">View Patient Information</a>
				</div>
			</div>					
			</form>	

			<?php

			if($_GET['submit'])
			{
				$id = $_GET[txt_id];
				$name = $_GET[txt_name];
				$age = $_GET[txt_age];
				$contact = $_GET[txt_contact];
				$address = $_GET[txt_address];
				$email = $_GET[txt_email];
				$password = $_GET[txt_password];

				if($name!="" && $age!="" && $contact!="" && $password!="")
					{
						$query = "INSERT INTO PATIENT VALUES ('$id', '$name','$age','$contact','$address','$email','$password')";
						$data = mysqli_query($conn,$query);
						
						if($data)
						{
							echo "<br>";
							echo " Data Inserted into Database.";
							echo "<br>";
							header("location: doctor_home.php");
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


			
		</div>
	</div>	
							
</body>
</html>