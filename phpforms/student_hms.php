<?php
$connect = mysqli_connect('localhost','root','','final');

if (mysqli_connect_errno($connect)) {


	echo "failed to connect";
	# code...
}
  $student_id = $_POST['student_id'];
  $student_name = $_POST['student_name'];
  $branch = $_POST['branch'];
  $roll_no = $_POST['roll_no'];
  $contact_no = $_POST['contact_no'];
  $email_id = $_POST['email_id'];
  $date_of_birth = $_POST['date_of_birth'];
  $address = $_POST['address'];
  $father_name = $_POST['father_name'];
  $father_occupation = $_POST['father_occupation'];
  $father_contact_no = $_POST['father_contact_no'];
  $mother_name = $_POST['mother_name'];
  $mother_occupation = $_POST['mother_occupation'];
  $mother_contact_no = $_POST['mother_contact_no'];
  $mother_email_id = $_POST['mother_email_id'];
  $home_address = $_POST['home_address'];
  $office_address = $_POST['office_address'];
  $local_guardian_name = $_POST['local_guardian_name'];
  $relationship = $_POST['relationship'];
  $guardian_contact_no = $_POST['guardian_contact_no'];
  $guardian_email_id = $_POST['guardian_email_id'];
  $guardian_occupation = $_POST['guardian_occupation'];
  $local_guardian_address = $_POST['local_guardian_address'];
  $hostel_name = $_POST['hostel_name'];
  $room_type = $_POST['room_type'];
  $room_no = $_POST['room_no'];
  $last_room_change_dt = $_POST['last_room_change_dt'];
  $starting_date = $_POST['starting_date'];
  $leaving_date = $_POST['leaving_date'];
  $status = $_POST['status'];
  $remarks = $_POST['remarks'];
  





 mysqli_query($connect,"INSERT INTO student_hms(student_id,student_name,branch,roll_no,contact_no,email_id,date_of_birth,address,father_name,father_occupation,father_contact_no,mother_name,mother_occupation,mother_contact_no ,mother_email_id,home_address,office_address,local_guardian_name,relationship,guardian_contact_no,guardian_email_id,guardian_occupation,local_guardian_address,hostel_name,room_type,room_no,last_room_change_dt,starting_date,leaving_date,status,remarks )
 VALUES('$student_id','$student_name','$branch','$roll_no','$contact_no','$email_id','$date_of_birth','$address','$father_name','$father_occupation','$father_contact_no','$mother_name','$mother_occupation','$mother_contact_no' ,'$mother_email_id','$home_address','$office_address','$local_guardian_name','$relationship','$guardian_contact_no','$guardian_email_id','$guardian_occupation','$local_guardian_address','$hostel_name','$room_type','$room_no','$last_room_change_dt','$starting_date','$leaving_date','$status','$remarks')");


?>





<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" type="text/css" href="../images/suiitlogo.png">
	<title>Student Details</title>
	
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

    <!--  jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

		<!-- Bootstrap Date-Picker Plugin -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
   
		<script src="http://momentjs.com/downloads/moment.js"></script>
</head>
<body>
	
	<div class="ts-main-content" >
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<center><h2 class="page-title">Student Details </h2></center>

						<div class="row" >
							<div class="col-md-12">
								<div class="panel panel-default custom" >
									<div class="panel-heading">Student Details</div>
									<div class="panel-body panel-resizable" style="padding: 30px 50px;">
		<form method="post" action="" name="register" class="form-horizontal" onSubmit="return valid();" >
											
										

<div class="form-group">
<label class="col-sm-2 control-label"> Student ID : </label>
<div class="col-sm-8">
<input type="text" name="student_id" id="studentid"  class="form-control" required="required" placeholder="Student ID" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Student Name : </label>
<div class="col-sm-8">
<input type="text" name="student_name" id="studentname"  class="form-control" required="required" placeholder="Student Name" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Branch : </label>
<div class="col-sm-8">
<select name="branch" class="form-control" required="required">
        <option value="">Select Branch</option>
        <option value="BTech CSE">BTech CSE</option>
        <option value="BTech ECE">BTech ECE</option>        
        <option value="BTech EEE">BTech EEE</option>
        <option value="MCA">MCA</option>        
        <option value="MSc CS">MSc CS</option>
        <option value="MSc EL">MSc EL</option> 
        <option value="MSc BT">MSc BT</option>
        <option value="MSc BI">MSc BI</option>              
        <option value="MTech CSE">MTech CSE</option>
        <option value="MTech CS">MTech CS</option>
        <option value="MTech ESD">MTech ESD</option> 
        <option value="MPhil CS">MPhil CS</option> 
        <option value="MPhil EL">MPhil EL</option>  
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Roll Number : </label>
<div class="col-sm-8">
<input type="text" name="roll_no" id="rollno"  class="form-control" placeholder="Roll Number">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="number" name="contact_no" id="contactno"  class="form-control" required="required" placeholder="Contact No">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email id: </label>
<div class="col-sm-8">
<input type="email" name="email_id" id="emailid"  class="form-control" onBlur="checkAvailability()" required="required" placeholder="Email id">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Date Of Birth: </label>
<div class="col-sm-8">
<input class="form-control" id="dateofbirth" name="date_of_birth" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<input type="text" name="address" id="add"  class="form-control" required="required" placeholder="Address" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Father's Name : </label>
<div class="col-sm-8">
<input type="text" name="father_name" id="fname"  class="form-control" required="required" placeholder="Father's Name" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Father's Occupation : </label>
<div class="col-sm-8">
<input type="text" name="father_occupation" id="focc"  class="form-control" required="required" placeholder="Father's Occupation">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Father's Contact No : </label>
<div class="col-sm-8">
<input type="number" name="father_contact_no" id="contact"  class="form-control" required="required" placeholder="Father's Contact No">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Father's Email id: </label>
<div class="col-sm-8">
<input type="email" name="father_email_id" id="femail"  class="form-control" onBlur="checkAvailability()" required="required" placeholder="Father's Email id">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Mother's Name : </label>
<div class="col-sm-8">
<input type="text" name="mother_name" id="mname"  class="form-control" required="required" placeholder="Mother's Name">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Mother's Occupation : </label>
<div class="col-sm-8">
<input type="text" name="mother_occupation" id="mocc"  class="form-control" required="required" placeholder="Mother's Occupation" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Mother's Contact No : </label>
<div class="col-sm-8">
<input type="number" name="mother_contact_no" id="mcontact"  class="form-control" required="required" placeholder="'s Contact No">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Mother's Email id: </label>
<div class="col-sm-8">
<input type="email" name="mother_email_id" id="memail"  class="form-control" onBlur="checkAvailability()" required="required" placeholder="Mother's Email id">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Home Address : </label>
<div class="col-sm-8">
<input type="text" name="home_address" id="homeadd"  class="form-control" required="required" placeholder="Home Address" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Office Address : </label>
<div class="col-sm-8">
<input type="text" name="office_address" id="offadd"  class="form-control" required="required" placeholder="Office Address" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Local Guardian's Name : </label>
<div class="col-sm-8">
<input type="text" name="local_guardian_name" id="localguardian"  class="form-control" required="" placeholder="Local Guardian's Name">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Relation : </label>
<div class="col-sm-8">
<input type="text" name="relationship" id="relation"  class="form-control" required="" placeholder="Relation">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Guardian's Contact No : </label>
<div class="col-sm-8">
<input type="number" name="guardian_contact_no" id="gcontact"  class="form-control" required="" placeholder="Guardian's Contact No">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian's Email id: </label>
<div class="col-sm-8">
<input type="email" name="guardian_email_id" id="gemail"  class="form-control" onBlur="checkAvailability()" required="" placeholder="Guardian's Email id">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian's Occupation : </label>
<div class="col-sm-8">
<input type="text" name="guardian_occupation" id="gocc"  class="form-control" required="" placeholder="Guardian's Occupation">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian's Address : </label>
<div class="col-sm-8">
<input type="text" name="local_guardian_address" id="gadd"  class="form-control" required="" placeholder="Guardian's Address" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Hostel Name : </label>
<div class="col-sm-8">
<input type="text" name="hostel_name" id="hname"  class="form-control" required="required" placeholder="Hostel Name">
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
<label class="col-sm-2 control-label">Room No : </label>
<div class="col-sm-8">
<input type="number" name="room_no" id="roomno"  class="form-control" required="required" placeholder="Room No">
</div>
</div>  


<div class="form-group">
<label class="col-sm-2 control-label">Last Room Change Date: </label>
<div class="col-sm-8">
<input class="form-control" id="lastchange" name="last_room_change_dt" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Starting Date: </label>
<div class="col-sm-8">
<input class="form-control" id="startingdate" name="starting_date" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Leaving Date: </label>
<div class="col-sm-8">
<input class="form-control" id="leavingdate" name="leaving_date" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>

 
<div class="form-group">
<label class="col-sm-2 control-label"> Status : </label>
<div class="col-sm-8">
<select name="status" class="form-control" required="required">
        <option value="">Select Current Status</option>
        <option value="Staying">Staying</option>
        <option value="Leaved">Leaved</option>        
        
</select>
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
<script>
		    $(document).ready(function(){
		      var date_input=$('input[name="date"]'); //our date input has the name "date"
		      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		      var options={
		        format: 'dd/mm/yyyy',
		        container: container,
		        todayHighlight: true,
		        autoclose: true,
		      };
		      date_input.datepicker(options);
		    })

		     function result(e) 
			{   
			      e.preventDefault();
			      var a = document.getElementById("checkin").value;
			      var b = document.getElementById("checkout").value;

			      var checkin = moment(a, 'DD-MM-YYYY');
			      var checkout = moment(b, 'DD-MM-YYYY');        

			      /*var days = checkout.diff(checkin, 'days');

			      var price = 50;
			      if(days > 0)
				      alert("Your estimated cost is ₹ "+days*price);
				  else
				  	  alert("Error. Try again.");	*/
			}

		    </script>


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
