<?php
$connect = mysqli_connect('localhost','root','','final');

if (mysqli_connect_errno($connect)) {


	echo "failed to connect";
	# code...
}
  $asset_id = $_POST['asset_id'];
  $student_id = $_POST['student_id'];
  $admin_id = $_POST['admin_id'];
  $fans = $_POST['fans'];
  $tubelights = $_POST['tubelights'];
  $tables = $_POST['tables'];
  $chairs = $_POST['chairs'];
  $beds = $_POST['beds'];
  $room_available = $_POST['room_available'];
  $date_of_purchase = $_POST['date_of_purchase'];
  $purchased_order_no = $_POST['purchased_order_no'];
  $assign_to = $_POST['assign_to'];
  $price = $_POST['price'];
  $date_of_disposal = $_POST['date_of_disposal'];
  $hostel_name = $_POST['hostel_name'];
  


 mysqli_query($connect,"INSERT INTO room_assets(asset_id,student_id,admin_id,fans,tubelights,tables,chairs,beds,room_available,date_of_purchase,purchased_order_no,assign_to,price,date_of_disposal,hostel_name)
 	VALUES('$asset_id','$student_id','$admin_id','$fans','$tubelights','$tables','$chairs','$beds','$room_available','$date_of_purchase','$purchased_order_no','$assign_to','$price','$date_of_disposal','$hostel_name')");


?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" type="text/css" href="../images/suiitlogo.png">
	<title>Room Assets</title>
	
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
						<center><h2 class="page-title">Room Assets </h2></center>

						<div class="row" >
							<div class="col-md-12">
								<div class="panel panel-default custom" >
									<div class="panel-heading">Room Assets</div>
									<div class="panel-body panel-resizable" style="padding: 30px 50px;">
		<form method="post" action="" name="register" class="form-horizontal" onSubmit="return valid();" >
											

<div class="form-group">
<label class="col-sm-2 control-label"> Asset ID : </label>
<div class="col-sm-8">
<input type="text" name="asset_id" id="assets"  class="form-control" required="required" placeholder="Asset ID" >
</div>
</div>

										

<div class="form-group">
<label class="col-sm-2 control-label"> Student ID : </label>
<div class="col-sm-8">
<input type="text" name="student_id" id="studentid"  class="form-control" required="required" placeholder="Student ID"  >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label"> Admin ID : </label>
<div class="col-sm-8">
<input type="text" name="admin_id" id="adminid"  class="form-control" required="required" placeholder="Admin ID" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Fans : </label>
<div class="col-sm-8">
<input type="number" name="fans" id="freg"  class="form-control" placeholder=" Fans">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Tube Lights : </label>
<div class="col-sm-8">
<input type="number" name="tubelights" id="treg"  class="form-control" placeholder="Tube Lights">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Tables : </label>
<div class="col-sm-8">
<input type="number" name="tables" id="table"  class="form-control" placeholder="Tables">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Chairs : </label>
<div class="col-sm-8">
<input type="number" name="chairs" id="chair"  class="form-control" placeholder="Chairs">
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Beds : </label>
<div class="col-sm-8">
<input type="number" name="beds" id="bed"  class="form-control" placeholder="Beds">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Rooms Available : </label>
<div class="col-sm-8">
<input type="number" name="room_available" id="roomavailable"  class="form-control" placeholder="Rooms Available">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Date Of Purchase: </label>
<div class="col-sm-8">
<input class="form-control" id="dop" name="date_of_purchase" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Purchased Order No : </label>
<div class="col-sm-8">
<input type="number" name="purchased_order_no" id="pn"  class="form-control" required="" placeholder="Purchased Order No">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Assign To : </label>
<div class="col-sm-8">
<input type="text" name="assign_to" id="at"  class="form-control" required="" placeholder="Assign To">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Price : </label>
<div class="col-sm-8">
<input type="number" name="price" id="prices"  class="form-control" required="required" placeholder="Price">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Date Of Disposal: </label>
<div class="col-sm-8">
<input class="form-control" id="dod" name="date_of_disposal" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Hostel Name : </label>
<div class="col-sm-8">
<input type="text" name="hostel_name" id="hname"  class="form-control" required="required" placeholder="Hostel Name">
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