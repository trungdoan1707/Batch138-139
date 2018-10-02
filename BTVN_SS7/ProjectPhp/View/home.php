
<?php
session_start();

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="library/mycss.css">
		<link rel="stylesheet" type="text/css" href="library/bootstrap.min.css">
		<!------ Include the above in your HEAD tag ---------->
		

	</head>

	<body>
		<?php 
		include 'View/modulesHome/narbar.php'; 


		include 'modulesHome/carousel.php';

		include 'modulesHome/content.php';



		?>
	
	<script type="text/javascript" src="library/bootstrap.min.js"></script>

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="library/myjs.js"></script>


	</body>
	
</html>