<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="text/css" href="images/Sambalpur-University-Logo.png">
      <title>Sambalpur University Institute of Information Technology</title>
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      		<style type="text/css">
			body { background-color: #DDD; }
			.card {
            	background-color: #CCC;
            	padding: 20px;
            }
            .Absolute-Center {
				margin: auto;
				position: absolute;
				top: 0; left: 0; right: 0;
			}
			.Absolute-Center.is-Responsive {
				width: 50%; 
				height: 50%;
				padding: 40px;
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
        <form class="container Absolute-Center is-Responsive" method="POST" action="">
        <div class="card">
	    <h3 class="text-center">Guest Details</h3>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputFirst" class="col-form-label">Firstname</label>
		      <input type="text" class="form-control" id="inputFirst" placeholder="Firstname" required="required">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputLast" class="col-form-label">Lastname</label>
		      <input type="text" class="form-control" id="inputLast" placeholder="Lastname" required="required">
		    </div>
		  </div>
		  
		    <div class="form-group">
		      <label for="inputRelation" class="col-form-label">Relation</label>
		      <input type="text" class="form-control" id="inputRelation" placeholder="Relation" required="required" autocapitalize="off" autocorrect="off" autocomplete="off" maxlength="30">
		    </div>

		    <div class="form-group">
		      <label for="inputContact" class="col-form-label">Contact Number</label>
		      <input type="text" class="form-control" id="inputContact" placeholder="Contact Number" required="required" autocapitalize="off" autocorrect="off" autocomplete="on" maxlength="13">
		    </div>

		    <div class="form-row">
			    <div class="form-group col-md-4">
			        <label class="control-form-label" for="date">Arrival</label>
			        <input class="form-control" id="checkin" name="date" placeholder="DD/MM/YYY" type="text" autocomplete="off"/>
			    </div>
			    <div class="form-group col-md-4">
			        <label class="control-form-label" for="date">Departure</label>
			        <input class="form-control" id="checkout" name="date" placeholder="DD/MM/YYY" type="text" autocomplete="off"/>
			    </div>
				<div class="form-group col-md-4">
				        <label class="control-form-label">Estimated Cost</label>
				       <input type="submit" onclick="result(event)" id="submit" class="btn btn-success form-control" value="Calculate"/>
				       	<small id="costHelpInline" class="text-muted" required="required"> ₹ 50 per day
			    </small>
				</div>
			</div>    

			
			
			<button type="submit" class="btn btn-primary">Submit</button>
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

   </body>
</html>