<?php
	require_once("classes/class.User.php");
	
	session_start();

	require_once("Controllers/class.MessagesController.php");

	$controller = new MessagesController();
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
	<link rel="stylesheet" type="text/css" href="css/messages.css">

	<script type="text/javascript" src="js/messages.js"></script>
</head>
<body>
	<?php require_once("Components/Nav.php") ?>
	<?php require_once("Components/Drawer.php") ?>
	
	<!-- Content Start -->
	<div class="contentContainer inFrame">
		<h1 class="contentTitle">Messages</h1>
		<?php if(count($controller -> getUserMessages()) == 0): ?>
			<label>No Messages Recieved Yet.</label>
		<?php endif; ?>
		<?php foreach ($controller -> getUserMessages() as $msg): ?>
			<div class="message <?= $msg -> getMsgStyle() ?>">
				<label><?= $msg -> getMsg() ?></label> <br>
				<button class="wrong" onclick="onDeleteClick(<?= $msg -> getId()?>)">Delete Message</button>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- Content End -->
</body>
</html>