<html>
	<head>
		<title>Backpocket</title>
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
	        	<a class="navbar-brand include-logo" href="index.php">Backpocket</a>
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
		            <li><a href="new_registrant.php">Register</a></li>
		        </ul>
		    </div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="jumbotron">
				    <h1>Backpocket</h1>
				    <p>Backpocket will be a resource website for summer camp and other program staff. Games, activities and songs will be searchable via content or through user inputted parameters.</p>
				    <p><a href="new_registrant.php" class="btn btn-primary btn-lg">Register Now!</a></p>
				</div>
			</div>
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