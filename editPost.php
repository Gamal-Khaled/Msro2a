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
	<div class="contentContainer inFrame">
		<div class="flexColumn">
			<div class="post flexRow">
				<img src="imgs/item1.jpg">
				<div class="flexColumn">
					<div class="flexColumn postDetails">
						<div>
							<label>Description</label> <br>
							<textarea name="desc" class="postDesc">IPhone XS l2eto fe alcity mrme, s7bo 8be awe bsra7a y3ne hwa da3 mno 1000$ mn8er m ya5od balo??</textarea>
						</div>
						<div>
							<label>Change Photo</label>
							<input type="file" accept=".png,.jpg" class="newImg">
						</div>
						<div>
							<label>Categories</label> <br>
							<div class="allCats flexColumn">
								<div class="flexRow category">
									<input type="checkbox" name="cat1" value="cat1">
									<label>Mobiles</label>
								</div>
								<div class="flexRow category">
									<input type="checkbox" name="cat1" value="cat1">
									<label>Mobiles</label>
								</div>
								<div class="flexRow category">
									<input type="checkbox" name="cat1" value="cat1">
									<label>Mobiles</label>
								</div>
								<div class="flexRow category">
									<input type="checkbox" name="cat1" value="cat1">
									<label>Mobiles</label>
								</div>
								<div class="flexRow category">
									<input type="checkbox" name="cat1" value="cat1">
									<label>Mobiles</label>
								</div>
								<button class="add" id="addNewC">Add New Category</button>
							</div>
						</div>
						<div>
							<label>Questions</label> <br>
							<input type="text" class="question" value="Question 1?">
							<input type="text" class="question" value="Question 1?">
							<input type="text" class="question" value="Question 1?">
							<input type="text" class="question" value="Question 1?">
							<input type="text" class="question" value="Question 1?">
							<button class="add" id="addNewQ">Add New Question</button>
						</div>
					</div>
				</div>
			</div>
			<div class="flexRow">
				<div class="flexRow postButtons editButton"><p>Save Post</p></div>
				<div class="flexRow postButtons"><p>Delete Post</p></div>
			</div>
		</div>
	</div>
	<!-- Content End -->

	<script type="text/javascript" src="js/editPost.js"></script>
</body>
</html>