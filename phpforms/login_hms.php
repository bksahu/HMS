<?php
$connect = mysqli_connect('localhost','root','','final');

if (mysqli_connect_errno($connect)) {


	echo "failed to connect";
	# code...
}
  $email_id = $_POST['email_id'];
  $password = $_POST['password'];
  





 mysqli_query($connect,"INSERT INTO login_hms(email_id,password)
 	VALUES('$email_id','$password')");


?>




<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" type="text/css" href="../images/suiitlogo.png">
	<title>Login HMS</title>
	
	<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
<style>
        .custom{
            width:55%;
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
						<center><h2 class="page-title">Login </h2></center>

						<div class="row" >
							<div class="col-md-12">
								<div class="panel panel-default custom" >
									<div class="panel-heading">login</div>
									<div class="panel-body panel-resizable" style="padding: 30px 50px;">
		<form method="post" action="" name="register" class="form-horizontal" onSubmit="return valid();" >
											


										

<div class="form-group">
<label class="col-sm-2 control-label"> Email ID : </label>
<div class="col-sm-8">
<input type="text" name="email_id" id="regno"  class="form-control" required="required" autocapitalize="off" autocorrect="off" autocomplete="off" maxlength="30" placeholder="Username" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Password : </label>
<div class="col-sm-8">
<input type="password" name="password" id="inputPassword" class="form-control" aria-describedby="passwordHelpInline" placeholder="Password" required="required" >

</div>
</div>


<div class="col-sm-12 col-sm-offset-5 btn-group btn-group-md">

<button class="btn " type="submit">Sign in</button>  
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