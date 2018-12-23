<?php
	require_once("classes/class.User.php");
	
	session_start();

	require_once("Controllers/class.NewRequestController.php");

	$controller = new NewRequestController();
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
	<form class="contentContainer inFrame" method="POST" action="?postId=<?= $_GET["postId"] ?>">
		<h1 class="contentTitle">
			New Request For <?= $controller -> getPost() -> getName() ?>
		</h1>

		<?php foreach ($controller -> getPost() -> getQuestions() as $index => $question): ?>
			<div class="questionContainer">
				<label class="question"><?= $question ?></label> <br>
				<input type="text" class="answer" required name="<?= $controller -> getPost() -> getQuestionId($index) ?>">
			</div>
		<?php endforeach;?>

		<div class="buttonsContainer">
			<input type="submit" class="submit">
		</div>
	</form>
	<!-- Content End -->

	<script type="text/javascript" src="js/newRequest.js"></script>
</body>
</html>