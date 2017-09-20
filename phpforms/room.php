<?php
$connect = mysqli_connect('localhost','root','','final');

if (mysqli_connect_errno($connect)) {


	echo "failed to connect";
	# code...
}
  $admin_id = $_POST['admin_id'];
  $student_id = $_POST['student_id'];
  $hostel_name = $_POST['hostel_name'];
  $room_no = $_POST['room_no'];
  $room_type = $_POST['room_type'];
  $capacity = $_POST['capacity'];
  $block_no = $_POST['block_no'];
  $room_alloted = $_POST['room_alloted'];
  $remarks = $_POST['remarks'];
  





 mysqli_query($connect,"INSERT INTO room(admin_id,student_id,hostel_name,room_no,room_type,capacity,block_no,room_alloted,remarks)
 	VALUES('$admin_id','$student_id','$hostel_name','$room_no','$room_type','$capacity','$block_no','$room_alloted','$remarks')");


?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" type="text/css" href="../images/suiitlogo.png">
	<title>Room </title>
	
	<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
<style>
        .custom{
            width:70%;
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
						<center><h2 class="page-title">Room </h2></center>

						<div class="row" >
							<div class="col-md-12">
								<div class="panel panel-default custom" >
									<div class="panel-heading">Room</div>
									<div class="panel-body panel-resizable" style="padding: 30px 50px;">
		<form method="post" action="" name="register" class="form-horizontal" onSubmit="return valid();" >
											



<div class="form-group">
<label class="col-sm-2 control-label"> Admin ID : </label>
<div class="col-sm-8">
<input type="text" name="admin_id" id="adminid"  class="form-control" required="required" placeholder="Admin ID" >
</div>
</div>

										

<div class="form-group">
<label class="col-sm-2 control-label"> Student ID : </label>
<div class="col-sm-8">
<input type="text" name="student_id" id="studentid"  class="form-control" required="required" placeholder="Student ID" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Hostel Name : </label>
<div class="col-sm-8">
<input type="text" name="hostel_name" id="hname"  class="form-control" required="required" placeholder=" Hostel Name" >
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
        <option value="Single">Single</option>
        <option value="Double">Double</option>        
        
</select>
</div>
</div>


 
<div class="form-group">
<label class="col-sm-2 control-label">Capacity : </label>
<div class="col-sm-8">
<select name="capacity" class="form-control" required="required">
        <option value="">Select Capacity</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>         
        
</select>
</div>
</div>







<div class="form-group">
<label class="col-sm-2 control-label">Block No : </label>
<div class="col-sm-8">
<input type="number" name="block_no" id="bn"  class="form-control" required="" placeholder="Block No">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room Alloted : </label>
<div class="col-sm-8">
<input type="number" name="room_alloted" id="roomalloted"  class="form-control" required="required" placeholder="Room Alloted">
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Remarks : </label>
<div class="col-sm-8">
<input type="text" name="remarks" id="remark"  class="form-control" required="required" placeholder="Remarks">
</div>
</div>  

<div class="col-sm-6 col-sm-offset-4 btn-group btn-group-md">
<button class="btn btn-default" type="submit">Cancel</button>
<button class="btn " type="submit">Update</button>  
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