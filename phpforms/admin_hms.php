<?php
$connect = mysqli_connect('localhost','root','','final');

if (mysqli_connect_errno($connect)) {


	echo "failed to connect";
	# code...
}
  $full_name = $_POST['full_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $designation = $_POST['designation'];
  $status = $_POST['status'];





 mysqli_query($connect,"INSERT INTO admin_hms(full_name,username,password,cpassword,designation,status)
 	VALUES('$full_name','$username','$password','$cpassword','$designation','$status')");


?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" type="text/css" href="../images/suiitlogo.png">
	<title>Admin HMS</title>
	
	<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
<style>
        .custom{
            width:60%;
  			margin:0 auto;
  			min-width:350px;
		}
        .panel-resizable {
            resize: vertical;
        }
    </style>
</head>
<body>
	
	<div class="ts-main-content" >
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<center><h2 class="page-title">Admin HMS </h2></center>

						<div class="row" >
							<div class="col-md-12">
								<div class="panel panel-default custom" >
									<div class="panel-heading">Admin</div>
									<div class="panel-body panel-resizable" style="padding: 30px 50px;">
		<form method="post" action="" name="register" class="form-horizontal" onSubmit="return valid();" >
											



<div class="form-group">
<label class="col-sm-2 control-label"> Full Name : </label>
<div class="col-sm-8">
<input type="text" name="full_name" id="fname"  class="form-control" required="required" placeholder="Full Name" >
</div>
</div>

										

<div class="form-group">
<label class="col-sm-2 control-label"> Username : </label>
<div class="col-sm-8">
<input type="text" name="username" id="un"  class="form-control" required="required" autocapitalize="off" autocorrect="off" autocomplete="off" maxlength="30" placeholder="Username" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Password : </label>
<div class="col-sm-8">
<input type="Password" name="password" id="inputPassword" class="form-control" aria-describedby="passwordHelpInline" placeholder="Password" required="required" >
<small id="passwordHelpInline" class="text-muted"> Must be 8-20 characters long.</small>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Confirm Password : </label>
<div class="col-sm-8">
<input type="Password" name="cpassword" id="cinputPassword" class="form-control" aria-describedby="passwordHelpInline" placeholder="Retype Password" required="required" >
<small id="passwordHelpInline" class="text-muted"> Must be 8-20 characters long.</small>
</div>
</div>

 
<div class="form-group">
<label class="col-sm-2 control-label">Designation and Status: </label>
<div class="col-sm-4">
<select name="designation" class="form-control" required="required">
        <option value="">Designation</option>
        <option value="1">Superintendent</option>
		<option value="2">Asst. superintendent</option>
		<option value="3">Warden</option>
		<option value="4">Admin</option>       
        
</select>
</div>
<div class="col-sm-4">
<select name="status" class="form-control" required="required">
        <option value="">Status</option>
        <option value="1">Active</option>
		<option value="2">Inactive</option>
		    
        
</select>
</div>
</div>



<div class="col-sm-12 col-sm-offset-5 btn-group btn-group-md">

<button class="btn " type="submit">Sign up</button>  
</div>


</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
</body>
	
</html>
