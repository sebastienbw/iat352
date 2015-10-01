<html lang="en">
	<head>
		<title>Form</title>
		<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/material.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/ripples.css">
	</head>
	<body>

		<!-- NAVIGATION -->
		<div class="navbar navbar-default">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	        	</button>
	        	<a class="navbar-brand" href="index.php">Backpocket</a>
		    </div>
			<div class="navbar-collapse collapse navbar-responsive-collapse">
		        <ul class="nav navbar-nav">
		            <li class="dropdown">
		                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Browse Registrants <b class="caret"></b></a>
		                <ul class="dropdown-menu">
		                    <li><a href="browse_registrants.php">By Name</a></li>
		                    <li><a href="browse_registrants.php#role">By Role</a></li>
		                </ul>
		            </li>
		            <li class="active"><a href="new_registrant.php">Register</a></li>
		        </ul>
		    </div>
		</div>

		<!-- REGISTRATION FORM -->
		<div class="row">
		  <div class="col-md-6 col-md-offset-3">
		  	<div class="well page">
		  		<h1 class="header">Register</h1>
		  		<hr>
				<form class="form-horizontal" action="form_processing.php" method="post">

				    <fieldset>
				        <!-- <legend>Register</legend> -->
				        <div class="form-group">
				            <label class="col-lg-2 control-label">Username</label>
				            <div class="col-lg-10">
				                <input type="text" class="form-control" name="username" placeholder="Username">
				            </div>
				        </div>
				        <div class="form-group">
				            <label class="col-lg-2 control-label">Email</label>
				            <div class="col-lg-10">
				                <input type="email" class="form-control" name="email" placeholder="email@address.com">
				            </div>
				        </div>
				        <div class="form-group">
				            <label class="col-lg-2 control-label">Role</label>
				            <div class="col-lg-10">
				                <div class="radio radio-primary">
				                    <label>
				                        <input type="radio" name="role" value="Program Leader">
				                        Program Leader
				                    </label>
				                </div>
				                <div class="radio radio-primary">
				                    <label>
				                        <input type="radio" name="role" value="Program Coordinator">
				                        Program Coordinator
				                    </label>
				                </div>
				                <div class="radio radio-primary">
				                    <label>
				                        <input type="radio" name="role" value="Program Director">
				                        Program Director
				                    </label>
				                </div>
				                <div class="radio radio-primary">
				                    <label>
				                        <input type="radio" name="role" value="Volunteer">
				                        Volunteer
				                    </label>
				                </div>

				            </div>
				        </div>
				         <div class="form-group">
				            <label class="col-lg-2 control-label">Bio</label>
				            <div class="col-lg-10">
				                <textarea class="form-control floating-label" rows="3" name="bio" placeholder="Write a few words about yourself!"></textarea>
				            </div>
				        </div>

				        <div class="form-group">
				            <div class="col-lg-10 col-lg-offset-2">
				                <!-- <button class="btn btn-default">Cancel</button> -->
				                <button type="submit" class="btn btn-primary">Submit</button>
				            </div>
				        </div>
				    </fieldset>
				</form>
			</div>
		</div>



		<!-- <div class="header">New Registrant</div>
		<div class="content">
			<form action="form_processing.php" method="post">
				Name: <input type="text" name="name" value="" /></br>
				Email: <input type="text" name="email" value="" /></br>
				Role: <select type="text" name="role" value="">
				  <option value="Program Leader">Program Leader</option>
				  <option value="Volunteer">Volunteer</option>
				  <option value="Program Coordinator">Program Coordinator</option>
				  <option value="Program Director">Program Director</option>
				</select></br>
				Description: <input type="text" name="description" value="" /></br>
				</br>
				<input type="submit" name="submit" value="Submit" />
			</form>
		</div> -->
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="bootstrap/js/ripples.js"></script>
        <script src="bootstrap/js/material.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>
	</body>
</html>


