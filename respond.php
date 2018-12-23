<?php
	require_once("classes/class.User.php");
	
	session_start();

	require_once("Controllers/class.RequestRespondController.php");

	$controller = new RequestRespondController();
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
	<link rel="stylesheet" type="text/css" href="css/respond.css">
</head>
<body>
	<?php require_once("Components/Nav.php") ?>
	<?php require_once("Components/Drawer.php") ?>
	
	<!-- Content Start -->
	<div class="contentContainer inFrame">
		<h1 class="contentTitle">Request For <?= $controller -> getCurrentRequest() -> getPost() -> getName() ?> From <?= $controller -> getCurrentRequest() -> getPost() -> getOwner() -> getName() ?></h1>
		<?php foreach ($controller -> getCurrentRequest() -> getPost() -> getQuestions() as $index => $question): ?>
			<div class="questionContainer">
				<label class="question"><?= $question ?></label> <br>
				<label class="answer"><?= $controller -> getCurrentRequest() -> getAnswerByIndex($index) ?></label>
			</div>
		<?php endforeach; ?>
		<div class="buttonsContainer">
			<button class="correct" onclick="onValidClick(<?= $_GET['requestId'] ?>)">Correct Answers</button>
			<button class="wrong" onclick="onInvalidClick(<?= $_GET['requestId'] ?>)">Wrong Answers</button>
		</div>
	</div>
	<!-- Content End -->

	<script type="text/javascript" src="js/respond.js"></script>
</body>
</html>