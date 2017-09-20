<?php
$connect = mysqli_connect('localhost','root','','final');

if (mysqli_connect_errno($connect)) {


	echo "failed to connect";
	# code...
}
  $full_name = $_POST['full_name'];
  $hostel_name = $_POST['hostel_name'];
  $room_no = $_POST['room_no'];
  $room_type = $_POST['room_type'];
  $complain_type = $_POST['complain_type'];
  $status = $_POST['status'];
  $other = $_POST['other'];
  





 mysqli_query($connect,"INSERT INTO complain(full_name,hostel_name,room_no,room_type,complain_type,status,other)
 	VALUES('$full_name','$hostel_name','$room_no','$room_type','$complain_type','$status','$other')");


?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" type="text/css" href="../images/suiitlogo.png">
	<title>Complain HMS</title>
	
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

    <!--  jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	
	<div class="ts-main-content" >
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<center><h2 class="page-title">Complain Detail </h2></center>

						<div class="row" >
							<div class="col-md-12">
								<div class="panel panel-default custom" >
									<div class="panel-heading">complain</div>
									<div class="panel-body panel-resizable" style="padding: 30px 50px;">
		<form method="post" action="" name="register" class="form-horizontal" onSubmit="return valid();" >
											


										

<div class="form-group">
<label class="col-sm-2 control-label"> Full Name : </label>
<div class="col-sm-8">
<input type="text" name="full_name" id="fullname"  class="form-control" required="required" autocapitalize="off" autocorrect="off" autocomplete="off" maxlength="30" placeholder="Full Name" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Hostel Name : </label>
<div class="col-sm-8">
<input type="text" name="hostel_name" id="hname"  class="form-control" required="required" placeholder="Hostel Name" >
</div>
</div>

 
<div class="form-group">
<label class="col-sm-2 control-label">Room No : </label>
<div class="col-sm-8">
<input type="number" name="room_no" id="roomno"  class="form-control" required="required" placeholder="Room No">
</div>
</div>  


 
<div class="form-group">
<label class="col-sm-2 control-label">Room Type : </label>
<div class="col-sm-8">
<select name="room_type" class="form-control" required="required">
        <option value="">Select Room Type</option>
        <option value="1">Single</option>
        <option value="2">Double</option>        
        
</select>
</div>
</div>

 
<div class="form-group">
<label class="col-sm-2 control-label">Complain Type : </label>

<div class="col-sm-4">
<label for="inputComplainType" class="col-form-label"></label>
<select class="form-control" name="complain_type" id="inputComplainType" onchange = "if ($('#inputComplainType').val() == '4') {
                      $('#text').show();
                    } else {
                      $('#text').hide();
                    }">
				    <option value="1">1</option>
				    <option value="2">2</option>
				    <option value="3">3</option>
				    <option value="4">Other</option>
			      </select>
</div>


<div class="col-sm-4">
<label for="inputStatus" class="col-form-label"></label>
			      <select class="form-control" name="status" id="inputStatus">
			        <option value="">Status</option>
				    <option value="1">Active</option>
				    <option value="2">Inactive</option>
			      </select>
</div>
</div>

<div class="form-group" name="other" id="text" style='display:none;'> 
			      <label class="col-sm-2 control-label">Other : </label>
			      <textarea class="col-sm-8 form-control" cols="30" id="message" name="message" rows="5">
			      	
			      </textarea>
			    </div>





		  

			    
			

<div class="col-sm-12 col-sm-offset-5 btn-group btn-group-md">

<button class="btn " type="submit">Submit</button>  
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