<?php
	require_once("classes/class.User.php");
	
	session_start();

	require_once("Controllers/class.EditPostController.php");

	$controller = new EditPostController();
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
	<link rel="stylesheet" type="text/css" href="css/editPost.css">
</head>
<body>
	<?php require_once("Components/Nav.php") ?>
	<?php require_once("Components/Drawer.php") ?>

	<!-- Content Start -->
	<form class="contentContainer inFrame" action="editPost.php" method="POST" enctype="multipart/form-data">
		<div class="flexColumn">
			<div class="post flexRow">
				<img src="<?= $controller -> getCurrentPost() -> getImg() ?>">
				<div class="flexColumn">
					<div class="flexColumn postDetails">
						<input type="hidden" name="postId" value="<?= $controller -> postId ?>">
						<div>
							<label>Name</label> <br>
							<input type="text" name="name" value="<?= $controller -> getCurrentPost() -> getName() ?>" class="name">
						</div>
						<div>
							<label>Description</label> <br>
							<textarea name="desc" class="postDesc"><?= $controller -> getCurrentPost() -> getDescription() ?></textarea>
						</div>
						<div>
							<label>Change Photo</label>
							<input type="file" accept=".png,.jpg" class="newImg" name="postImg">
						</div>
						<div>
							<label>Categories</label> <br>
							<div class="allCats flexColumn">
								<?php foreach ($controller -> getAllCategories() as $category): ?>
									<div class="flexRow category">
										<input type="checkbox" name="cat<?= $category -> getId() ?>" <?= ($controller -> getCurrentPost() -> hasCategory($category -> getId()) ? "checked" : "") ?>>
										<label><?= $category -> getName() ?></label>
									</div>
								<?php endforeach; ?>
								<button class="add" id="addNewC">Add New Category</button>
							</div>
						</div>
						<div>
							<label>Questions</label> <br>
							<?php if ($controller -> postId == -1): ?>
								<input type="text" class="question" name="newQ0">
							<?php endif; ?>
							<?php foreach ($controller -> getCurrentPost() -> getQuestions() as $index => $question): ?>
								<input type="text" class="question" value="<?= $question ?>" name="qus<?= $controller -> getCurrentPost() -> getQuestionId($index) ?>">
							<?php endforeach; ?>
							<button class="add" id="addNewQ">Add New Question</button>
						</div>
					</div>
				</div>
			</div>
			<div class="flexRow">
				<input type="submit" class="flexRow postButtons editButton" value="Save">
			</div>
		</div>
	</form>
	<!-- Content End -->

	<script type="text/javascript" src="js/editPost.js"></script>
</body>
</html>