<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	
	<!-- HEAD TAG STARTS -->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>About Us | Tourism Management System</title>
    
    	<!-- Bootstrap CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<!-- Custom CSS -->
    	<link href="css/main.css" rel="stylesheet">
    	<!-- Google Fonts -->
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<!-- Font Awesome Icons -->
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<!-- jQuery -->
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<!-- Bootstrap JS -->
    	<script src="js/bootstrap.min.js"></script>
    	<!-- Custom JS -->
    	<script src="js/main.js"></script>
    	
	</head>
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	<body>
		
		<!-- Header -->
		<?php 
			if(!isset($_SESSION["username"])) {
				include("common/headerLoggedOut.php");
			}
			else {
				include("common/headerLoggedIn.php");
			}
		?>
		
		<!-- Spacer -->
		<div class="spacer">a</div>
		
		<!-- About Us Section -->
		<div class="col-sm-12 aboutUsWrapper">
			<div class="headingOne">
				About Us
			</div>
			
			<div class="para">
				Welcome to the <strong>Tourism Management System</strong>, your one-stop solution for planning and managing your travel adventures. Our platform is designed to make travel planning easy, efficient, and enjoyable. Whether you're looking for the perfect destination, the best flight deals, or comfortable accommodations, we've got you covered.
			</div>
			
			<div class="para">
				Our mission is to provide travelers with a seamless experience, from booking to exploring. With a wide range of destinations and services, we aim to make every trip unforgettable.
			</div>
			
			<div class="para">
				<strong>Meet the Team:</strong><br><br>
				This project was brought to life by the hard work and dedication of our team:<br><br>
				<ul>
					<li><B>Aryan</B> - Front Developer</li>
					<li><B>Dev Chaudhari</B> - Backend Developer</li>
					<li><B>Sampreet Vashishta</B> - Database Architect</li>
				</ul>
				<br><br>Together, we strive to deliver the best travel experience for our users.
			</div>
		</div> <!-- aboutUsWrapper -->
	
		<!-- Spacer -->
		<div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<!-- Footer -->
		<?php include("common/footer.php"); ?>
				
	</body>
	<!-- BODY TAG ENDS -->
	
</html>