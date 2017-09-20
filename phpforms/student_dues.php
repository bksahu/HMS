<?php
$connect = mysqli_connect('localhost','root','','final');

if (mysqli_connect_errno($connect)) {


	echo "failed to connect";
	# code...
}
  $student_id = $_POST['student_id'];
  $admin_id = $_POST['admin_id'];
  $amount = $_POST['amount'];
  $notification_date = $_POST['notification_date'];
  $notice_no = $_POST['notice_no'];
  $due_date = $_POST['due_date'];
  $fine_amount = $_POST['fine_amount'];
  $total_amount = $_POST['total_amount'];
  $status = $_POST['status'];
  $payment_method = $_POST['payment_method'];
  $refference_no = $_POST['refference_no'];
  $date_of_collection = $_POST['date_of_collection'];
  $collected_by = $_POST['collected_by'];
  $remarks = $_POST['remarks'];

 mysqli_query($connect,"INSERT INTO student_dues(student_id,admin_id,amount,notification_date,notice_no,due_date, fine_amount,total_amount,status,payment_method,refference_no,date_of_collection,collected_by,remarks)
 	VALUES('$student_id','$admin_id','$amount','$notification_date','$notice_no','$due_date', '$fine_amount','$total_amount','$status','$payment_method','$refference_no','$date_of_collection','$collected_by','$remarks')");


?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" type="text/css" href="css/suiitlogo.png">
	<title>Student Dues</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
						<center><h2 class="page-title">Student Dues </h2></center>

						<div class="row" >
							<div class="col-md-12">
								<div class="panel panel-default custom" >
									<div class="panel-heading">Student Dues</div>
									<div class="panel-body panel-resizable" style="padding: 30px 50px;">
		<form method="post" action="" name="register" class="form-horizontal" onSubmit="return valid();" >
											
										

<div class="form-group">
<label class="col-sm-2 control-label"> Student ID : </label>
<div class="col-sm-8">
<input type="text" name="student_id" id="studentid"  class="form-control" required="required" placeholder="Student ID" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label"> Admin ID : </label>
<div class="col-sm-8">
<input type="text" name="admin_id" id="adminid"  class="form-control" required="required" placeholder="Admin ID" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Amount : </label>
<div class="col-sm-8">
<input type="number" name="amount" id="am"  class="form-control" placeholder="Amount">
</div>
</div>


 


<div class="form-group">
<label class="col-sm-2 control-label">Notification Date: </label>
<div class="col-sm-8">
<input class="form-control" id="notify" name="notification_date" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Notification No : </label>
<div class="col-sm-8">
<input type="number" name="notice_no" id="nn"  class="form-control" required="" placeholder="Notification No">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Due Date: </label>
<div class="col-sm-8">
<input class="form-control" id="duedate" name="due_date" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Fine Amount : </label>
<div class="col-sm-8">
<input type="number" name="fine_amount" id="fineamount"  class="form-control" placeholder="Fine Amount">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Total Amount : </label>
<div class="col-sm-8">
<input type="number" name="total_amount" id="tm"  class="form-control" placeholder="Total Amount">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label"> Status : </label>
<div class="col-sm-8">
<select name="status" class="form-control" required="required">
        <option value="">Select Current Status</option>
        <option value="Paid">Paid</option>
        <option value="Unpaid">Unpaid</option>        
        
</select>
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label"> Payment Method: </label>
<div class="col-sm-8">
<select name="payment_method" class="form-control" required="required">
        <option value="">Payment Method</option>
        <option value="Net Banking">Net Banking</option>
        <option value="Cheque Deposit">Cheque Deposit</option>  
        <option value="Cash Deposit">Cash Deposit</option>  
        <option value="Demand Draft">Demand Draft</option>
        <option value="Challan Deposit">Challan Deposit</option>   
         
        
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Reference Number : </label>
<div class="col-sm-8">
<input type="referencenumber" name="refference_no" id="refno"  class="form-control" placeholder="Reference Number">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Date Of Collection: </label>
<div class="col-sm-8">
<input class="form-control" id="doc" name="date_of_collection" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Collected By : </label>
<div class="col-sm-8">
<input type="text" name="collected_by" id="collectedby"  class="form-control" required="required" placeholder="Collected By">
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