<?php
$connect = mysqli_connect('localhost','root','','final');

if (mysqli_connect_errno($connect)) {


	echo "failed to connect";
	# code...
}
  $full_name = $_POST['full_name'];
  $relation = $_POST['relation'];
  $contact_number = $_POST['contact_number'];
  $arrival = $_POST['arrival'];
  $departure = $_POST['departure'];
  





 mysqli_query($connect,"INSERT INTO guest_hms(full_name,relation,contact_number,arrival,departure)
 	VALUES('$full_name','$relation','$contact_number','$arrival','$departure')");


?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" type="text/css" href="css/suiitlogo.png">
	<title>Guest HMS</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
						<center><h2 class="page-title">Guest Detail </h2></center>

						<div class="row" >
							<div class="col-md-12">
								<div class="panel panel-default custom" >
									<div class="panel-heading">Guest</div>
									<div class="panel-body panel-resizable" style="padding: 30px 50px;">
		<form method="post" action="" name="register" class="form-horizontal" onSubmit="return valid();" >
											



<div class="form-group">
<label class="col-sm-2 control-label"> Full Name : </label>
<div class="col-sm-8">
<input type="text" name="full_name" id="fullname"  class="form-control" required="required" placeholder="Full Name" >
</div>
</div>

										

<div class="form-group">
<label class="col-sm-2 control-label"> Relation : </label>
<div class="col-sm-8">
<input type="text" name="relation" id="rela"  class="form-control" required="required" autocapitalize="off" autocorrect="off" autocomplete="off" maxlength="30" placeholder="Relation" >
</div>
</div>
S

<div class="form-group">
<label class="col-sm-2 control-label">Contact Number : </label>
<div class="col-sm-8">
<input type="Number" name="contact_number" id="contactnumber" class="form-control" aria-describedby="passwordHelpInline" placeholder="Contact Number" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Arrival :</label>
<div class="col-sm-8">
<input class="form-control" id="checkin" name="arrival" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Departure :</label>
<div class="col-sm-8">
<input class="form-control" id="checkout" name="departure" placeholder="DD/MM/YYY" type="text" autocomplete="off" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Estimated Cost :</label>
<div class="col-sm-8">
<input type="submit" onclick="result(event)" id="submit" class="btn btn-success form-control" value="Calculate"/>
<small id="costHelpInline" class="text-muted" required="required"> ₹ 50 per day</small>
</div>
</div>





<div class="col-sm-12 col-sm-offset-5 btn-group btn-group-md">

<button class="btn " type="submit">Submit</button>  
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

			      var days = checkout.diff(checkin, 'days');

			      var price = 50;
			      if(days > 0)
				      alert("Your estimated cost is ₹ "+days*price);
				  else
				  	  alert("Error. Try again.");	
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