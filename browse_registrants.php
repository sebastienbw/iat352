<html>
	<head>
		<title>Form Processing</title>
		<link rel="stylesheet" type="text/css" href="style.css">
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
		            <li class="active dropdown">
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
				<?php
					$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");

					$array = array();
					$curRegistrant = 0;

					while (!feof($myfile) ) {
						$line_of_text = fgets($myfile);
						if ($line_of_text != "") {
							$parts = explode('|', $line_of_text);
							$array[$curRegistrant] = $parts;
							$curRegistrant = $curRegistrant + 1;

							//Display Contents
							//echo $parts[0] . $parts[1] . $parts[2]. "</br>";
						}

						
					}

					//Browse alphabetical by name
					sort($array);
					// print_r ($array);

					echo '<div class="panel panel-primary">';
					echo '   <div class="panel-heading">';
					echo '       <h3 class="panel-title"><strong>Browse by Name</strong></h3>';
					echo '   </div>';
					echo '   <div class="panel-body">';
					        // echo "<h2>Browse Alphabetically by Name</h2>";
					echo "<table>";
					echo "<tr>";
					echo "<td><b>Name</b></td>";
					echo "<td><b>Email</b></td>";
					echo "<td><b>Role</b></td>";
					echo "<td><b>Description</b></td>";
					echo "</tr>";
					for ($i = 0; $i < count($array); $i++) {
						echo "<tr>";
						echo "<td>" . $array[$i][0] . "</td>";
						echo "<td>" . $array[$i][1] . "</td>";
						echo "<td>" . $array[$i][2] . "</td>";
						echo "<td>" . $array[$i][3] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo     "</div>";
					echo "</div>";


					
					// Browse by roles
					echo '<div class="panel panel-primary" id="role">';
					echo '   <div class="panel-heading">';
					echo '       <h3 class="panel-title"><strong>Browse by Role</strong></h3>';
					echo '   </div>';
					echo '   <div class="panel-body">';
					// echo "<h2>Browse by Role</h2>";

					echo '<div class="panel panel-default">';
					echo '    <div class="panel-heading"><strong>Program Leaders</strong></div>';
					echo '    <div class="panel-body">';
					echo "<table>";
					echo "<tr>";
					echo "<td><b>Name</b></td>";
					echo "<td><b>Email</b></td>";
					echo "<td><b>Role</b></td>";
					echo "<td><b>Description</b></td>";
					echo "</tr>";
					for ($i = 0; $i < count($array); $i++) {
						if ($array[$i][2] == "Program Leader") {
							echo "<tr>";
							echo "<td>" . $array[$i][0] . "</td>";
							echo "<td>" . $array[$i][1] . "</td>";
							echo "<td>" . $array[$i][2] . "</td>";
							echo "<td>" . $array[$i][3] . "</td>";
							echo "</tr>";
						}		
					}
					echo "</table>";
					echo '    </div>';
					echo '</div>';

					// echo "<h4><strong>Program Leaders</strong></h4>";
					// echo "<hr>";
					
					// echo "<br><br>";

					
					// echo "<h4><strong>Program Coordinators</strong></h4>";
					echo '<div class="panel panel-default">';
					echo '    <div class="panel-heading"><strong>Program Coordinatores</strong></div>';
					echo '    <div class="panel-body">';
					// echo "<hr>";
					echo "<table>";
					echo "<tr>";
					echo "<td><b>Name</b></td>";
					echo "<td><b>Email</b></td>";
					echo "<td><b>Role</b></td>";
					echo "<td><b>Description</b></td>";
					echo "</tr>";
					for ($i = 0; $i < count($array); $i++) {
						if ($array[$i][2] == "Program Coordinator") {
							echo "<tr>";
							echo "<td>" . $array[$i][0] . "</td>";
							echo "<td>" . $array[$i][1] . "</td>";
							echo "<td>" . $array[$i][2] . "</td>";
							echo "<td>" . $array[$i][3] . "</td>";
							echo "</tr>";
						}		
					}
					echo "</table>";
					echo "</div>";
					echo "</div>";

					// echo "<br><br>";

					// echo "<h4><strong>Program Directors</strong></h4>";

					echo '<div class="panel panel-default">';
					echo '    <div class="panel-heading"><strong>Program Directors</strong></div>';
					echo '    <div class="panel-body">';
					echo "<table>";
					echo "<tr>";
					echo "<td><b>Name</b></td>";
					echo "<td><b>Email</b></td>";
					echo "<td><b>Role</b></td>";
					echo "<td><b>Description</b></td>";
					echo "</tr>";
					for ($i = 0; $i < count($array); $i++) {
						if ($array[$i][2] == "Program Director") {
							echo "<tr>";
							echo "<td>" . $array[$i][0] . "</td>";
							echo "<td>" . $array[$i][1] . "</td>";
							echo "<td>" . $array[$i][2] . "</td>";
							echo "<td>" . $array[$i][3] . "</td>";
							echo "</tr>";
						}		
					}
					echo "</table>";
					echo "</div>";
					echo "</div>";

					// echo "<br><br>";

					// echo "<h4><strong>Volunteers</strong></h4>";
					// echo "<hr>";

					echo '<div class="panel panel-default">';
					echo '    <div class="panel-heading"><strong>Volunteers</strong></div>';
					echo '    <div class="panel-body">';
					echo "<table>";
					echo "<tr>";
					echo "<td><b>Name</b></td>";
					echo "<td><b>Email</b></td>";
					echo "<td><b>Role</b></td>";
					echo "<td><b>Description</b></td>";
					echo "</tr>";
					for ($i = 0; $i < count($array); $i++) {
						if ($array[$i][2] == "Volunteer") {
							echo "<tr>";
							echo "<td>" . $array[$i][0] . "</td>";
							echo "<td>" . $array[$i][1] . "</td>";
							echo "<td>" . $array[$i][2] . "</td>";
							echo "<td>" . $array[$i][3] . "</td>";
							echo "</tr>";
						}		
					}
					echo "</table>";
					echo     "</div>";
					echo     "</div>";
					echo "</div>";

					fclose($myfile);
				?>
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