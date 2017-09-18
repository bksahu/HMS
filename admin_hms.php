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
   </head>
   <body>
        <form class="container Absolute-Center is-Responsive" method="POST" action="">
        <div class="card">
	    <h3 class="text-center">Admin Details</h3>
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
		      <label for="inputUsername" class="col-form-label">Username</label>
		      <input type="text" class="form-control" id="inputUsername" placeholder="Username" required="required" autocapitalize="off" autocorrect="off" autocomplete="off" maxlength="30">
		    </div>

		    <div class="form-group">
			    <label for="inputPassword">Password</label>
			    <input type="password" id="inputPassword" class="form-control" aria-describedby="passwordHelpInline" placeholder="Password" required="required">
			    <small id="passwordHelpInline" class="text-muted"> Must be 8-20 characters long.
			    </small>
			</div>

		    <div class="form-group">
			    <label for="inputConfirmPassword">Confirm Password</label>
			    <input type="password" id="inputConfirmPassword" class="form-control" aria-describedby="passwordHelpInline" placeholder="Password" required="required">
			    <small id="passwordHelpInline" class="text-muted" required="required"> Must be 8-20 characters long.
			    </small>
			</div>
  
		    <div class="form-row">
			    <div class="form-group col-md-8">
			      <label for="inputDesignation" class="col-form-label">Designation</label>
			      <select class="form-control" id="inputDesignation">
				    <option value="1">Superintendent</option>
				    <option value="2">Asst. superintendent</option>
				    <option value="3">Warden</option>
				    <option value="4">Admin</option>
			      </select>
			    </div>
				<div class="form-group col-md-4">
			      <label for="inputStatus" class="col-form-label">Status</label>
			      <select class="form-control" id="inputStatus">
				    <option value="1">Active</option>
				    <option value="2">Inactive</option>
			      </select>
			    </div>
			  </div>

				<button type="submit" class="btn btn-primary">Sign up</button>
     		</div>
		</form>
   </body>
</html>