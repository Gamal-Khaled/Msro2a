<?php
	session_start();

	require_once("Controllers/class.PageController.php");

	$controller = new PageController();
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
	<link rel="stylesheet" type="text/css" href="css/newRequest.css">
</head>
<body>
	<?php require_once("Components/Nav.php") ?>
	<?php require_once("Components/Drawer.php") ?>

	<!-- Content Start -->
	<form class="contentContainer inFrame">
		<h1 class="contentTitle">Request For {Post Name} From {al3amel alrequest Name}</h1>
		<div class="questionContainer">
			<label class="question">Da3et fen w alsa3a kam??</label> <br>
			<input type="text" class="answer">
		</div>
		<div class="questionContainer">
			<label class="question">Da3et fen w alsa3a kam??</label> <br>
			<input type="text" class="answer">
		</div>
		<div class="questionContainer">
			<label class="question">Da3et fen w alsa3a kam??</label> <br>
			<input type="text" class="answer">
		</div>
		<div class="questionContainer">
			<label class="question">Da3et fen w alsa3a kam??</label> <br>
			<input type="text" class="answer">
		</div>
		<div class="buttonsContainer">
			<input type="submit" class="submit">
		</div>
	</form>
	<!-- Content End -->

	<script type="text/javascript" src="js/newRequest.js"></script>
</body>
</html>