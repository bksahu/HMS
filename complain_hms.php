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
   </head>
   <body>
        <form class="container Absolute-Center is-Responsive" method="POST" action="">
        <div class="card">
	    <h3 class="text-center">Complaint Box</h3>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="Firstname" class="col-form-label">Firstname</label>
		      <input type="text" class="form-control" id="Firstname" placeholder="To be extracted from DB" required="required">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="Lastname" class="col-form-label">Lastname</label>
		      <input type="text" class="form-control" id="Lastname" placeholder="To be extracted from DB" required="required">
		    </div>
		  </div>
		  
		  <div class="form-row">
		  	<div class="form-group col-md-4">
		      <label for="hostelName" class="col-form-label">Hostel Name</label>
		      <input type="text" class="form-control" id="hostelName" placeholder="To be extracted from DB" required="required">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="roomNumber" class="col-form-label">Room Number</label>
		      <input type="text" class="form-control" id="roomNumber" placeholder="To be extracted from DB" required="required">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="roomType" class="col-form-label">Room Type</label>
		      <input type="text" class="form-control" id="roomType" placeholder="To be extracted from DB" required="required">
		    </div>
		  </div>

		  <div class="form-row">
			    <div class="form-group col-md-8">
			      <label for="inputComplainType" class="col-form-label">Complain Type</label>
			      <select class="form-control" id="inputComplainType" onchange = "if ($('#inputComplainType').val() == '4') {
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
				<div class="form-group col-md-4">
			      <label for="inputStatus" class="col-form-label">Status</label>
			      <select class="form-control" id="inputStatus">
				    <option value="1">Active</option>
				    <option value="2">Inactive</option>
			      </select>
			    </div>

			    <div class="form-group" id="text" style='display:none;'> 
			      <label class="col-form-label">Other</label>
			      <textarea class="form-control" cols="100" id="message" name="message" rows="10"></textarea>
			    </div>
			</div>

				<button type="submit" class="btn btn-primary">Submit</button>
     		</div>
		</form>


   </body>
</html>