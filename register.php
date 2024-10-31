<?php
session_start();
$connect= mysqli_connect("localhost","id21287486_usergetip","Getip@123","id21287486_getip");
if(isset($_POST["registerbtn"]))
{
$fn=$_POST['fullname'];
$eid = $_POST['emailid'];
$pwd = $_POST['password'];
$dob = $_POST['dob'];
$mob = $_POST['mobile'];
$gn = $_POST['gender'];
$addr = $_POST['address'];
 $qry="INSERT INTO student(fullname,emailid,password,dob,mobile,gender,address) VALUES ('$fn','$eid','$pwd','$dob','$mob','$gn','$addr')";
$result=mysqli_query($connect,$qry);
if ($result) {
	echo "data stored successfully";
}else{
	echo "something went wrong";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 mx-auto">
			
				<form method="post" action="register.php">
			  <div class="form-group">
			    <label>Fullname</label>
			    <input type="text" class="form-control" id="fullname" placeholder="Enter name" name="fullname">
			    
			  </div>
			  <div class="form-group">
			    <label>Emailid</label>
			    <input type="email" class="form-control" id="eid" placeholder="Emailid" name="emailid">
			  </div>
			  <div class="form-group">
			    <label>Password</label>
			    <input type="password" required class="form-control" id="pwd" placeholder="Password" name="password">
			  </div>
			  <div class="form-group">
			    <label>Date of birth</label>
			    <input type="date" required class="form-control" id="dob" placeholder="Date of birth" name="dob">
			  </div>
			  <div class="form-group">
			    <label>mobile</label>
			    <input type="tel" required class="form-control" id="Password1" placeholder="mobile" name="mobile">
			  </div>
			  <div class="form-group">
			    <label>Gender</label>
			    <input type="radio" name="gender" required placeholder="gender">Male <input type="radio" name="gender">Female
			  </div>
			  <div class="form-group">
			    <label>Address</label>
			    <textarea id="address" required placeholder="address" name="address" class="form-control"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary" name="registerbtn">REGISTER</button>
			</form><p>Already have an account? <a href="index.html">LogIn</a></p>
		</div>
	</div>
</div> 
</body>
</html>
