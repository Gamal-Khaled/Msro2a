<?php
	require_once("classes/class.User.php");
	
	session_start();

	require_once("Controllers/class.MyPostsController.php");

	$controller = new MyPostsController();
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
	<link rel="stylesheet" type="text/css" href="css/myPosts.css">

	<script type="text/javascript" src="js/myPosts.js"></script>
</head>
<body>
	<?php require_once("Components/Nav.php") ?>
	<?php require_once("Components/Drawer.php") ?>

	<!-- Content Start -->
	<div class="contentContainer inFrame">
		<div class="post flexRow userAccount">
			<img src="<?= $controller -> getCurrentUser() -> getImg() ?>" class="profilePic">
			<div class="flexColumn">
				<div class="flexColumn postDetails">
					<div class="postOwner">
						<label><?= $controller -> getCurrentUser() -> getName() ?></label>
					</div>
					<div>
						<label>Email</label> <br>
						<label><?= $controller -> getCurrentUser() -> getEmail() ?></label>
					</div>
					<div>
						<label>Phone Number</label> <br>
						<label><?= $controller -> getCurrentUser() -> getPhoneNumber() ?></label>
					</div>
				</div>
				<form class="buttonsContainer flexRow" action="myPosts.php" method="POST">
					<input type="hidden" name="deleteAccount" value="1">
					<div onclick="onEditPostClick(-1)" class="addPostButton">Add Post</div>
					<input class="deleteAccButton" value="Delete Account" type="submit">
				</form>
			</div>
		</div>
		<?php foreach ($controller -> getPosts() as $post): ?>
			<div class="flexColumn">
				<div class="post flexRow">
				<img src="<?= $post -> getImg() ?>">
					<div class="flexColumn">
						<div class="flexColumn postDetails">
							<div class="postOwner">
								<img src="<?= $post -> getOwner() -> getImg() ?>" class="clientImg">
								<label><?= $post -> getOwner() -> getName() ?></label>
							</div>
							<div>
								<label>Name</label> <br>
								<label><?= $post -> getName() ?></label>
							</div>
							<div>
								<label>Description</label> <br>
								<label><?= $post -> getDescription() ?></label>
							</div>
							<div>
								<label>Categories</label> <br>
								<?php foreach ($post -> getCategories() as $category): ?>
									<label><?= $category -> getName() ?>, </label>
								<?php endforeach;?>
							</div>
						</div>
					</div>
				</div>
				<div class="flexRow">
					<div onclick="onEditPostClick(<?=$post -> getId()?>)" class="flexRow postButtons editButton"><p>Edit Post</p></div>
					<div onclick="onDeletePostClick(<?=$post -> getId()?>)" class="flexRow postButtons"><p>Delete Post</p></div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- Content End -->
</body>
</html>