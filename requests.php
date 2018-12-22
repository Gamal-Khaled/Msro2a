<?php
	require_once("classes/class.User.php");
	
	session_start();

	require_once("Controllers/class.RequestsController.php");

	$controller = new RequestsController();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Msro2a</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/Drawer.css">
	<link rel="stylesheet" type="text/css" href="css/requests.css">
</head>
<body>
	<?php require_once("Components/Nav.php") ?>
	<?php require_once("Components/Drawer.php") ?>
	
	<!-- Content Start -->
	<div class="contentContainer inFrame">
		<h1 class="contentTitle">Requests</h1>
		<div class="request">
			<label>New Request For {Post Name} From {al3amel alrequest Name}</label>
		</div>
		<div class="request">
			<label>New Request For {Post Name} From {al3amel alrequest Name}</label>
		</div>
		<div class="request">
			<label>New Request For {Post Name} From {al3amel alrequest Name}</label>
		</div>
		<div class="request">
			<label>New Request For {Post Name} From {al3amel alrequest Name}</label>
		</div>
		<div class="request">
			<label>New Request For {Post Name} From {al3amel alrequest Name}</label>
		</div>
		<div class="request">
			<label>New Request For {Post Name} From {al3amel alrequest Name}</label>
		</div>
		<div class="request">
			<label>New Request For {Post Name} From {al3amel alrequest Name}</label>
		</div>
		<div class="request">
			<label>New Request For {Post Name} From {al3amel alrequest Name}</label>
		</div>
		<div class="request">
			<label>New Request For {Post Name} From {al3amel alrequest Name}</label>
		</div>
	</div>
	<!-- Content End -->

	<script type="text/javascript" src="js/requests.js"></script>
</body>
</html>