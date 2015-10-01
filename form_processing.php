

<html>
	<head>
		<title>Form Processing</title>
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

		<div class="row">
			<?php
			$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
			
			// Write the form info to txt file, separate with "|"s
			//$array = array($_POST["name"], $_POST["email"], $_POST["description"]);
			//fwrite($myfile, print_r($array, TRUE));
			if ($_POST["username"] && $_POST["email"] && $_POST["role"] && $_POST["bio"]) {
				$txt = $_POST["username"] . "|";
				fwrite($myfile, $txt);
				$txt = $_POST["email"] . "|";
				fwrite($myfile, $txt);
				$txt = $_POST["role"] . "|";
				fwrite($myfile, $txt);
				$txt = $_POST["bio"] . "\r\n";
				fwrite($myfile, $txt);
				echo '<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-success">
						    <div class="panel-heading">
						        <h3 class="panel-title"><strong>Registered!</strong></h3>
						    </div>
						    <div class="panel-body">
						        You have been registered!
							    </br>
						        <a href="index.php" class="btn btn-success">Continue</a>
						    </div>
						</div>
					</div>';
			} else {
				echo '<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-warning">
						    <div class="panel-heading">
						        <h3 class="panel-title"><strong>Woops!</strong></h3>
						    </div>
						    <div class="panel-body">
						        Please ensure all fields have been completed and submit again.
							    </br>
						        <a href="new_registrant.php" class="btn btn-warning">Fix Issues</a>
						    </div>
						</div>
					</div>';
			}

			
			fclose($myfile);
			?>
		</div>
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