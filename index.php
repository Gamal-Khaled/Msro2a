<?php
	require_once("classes/class.User.php");

	session_start();

	require_once("Controllers/class.MainPageController.php");

	$controller = new MainPageController();
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
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/js.js"></script>
</head>
<body>
	<?php require_once("Components/Nav.php") ?>
	<?php require_once("Components/Drawer.php") ?>

	<!-- Content Start -->
	<div class="contentContainer inFrame">
		<?php if(count($controller -> getPosts()) == 0): ?>
			<label class="noPostsMessage">There is nothing posted yet.</label>
		<?php endif; ?>
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
				<?php if (!$controller -> isloggedIn() || $post -> getOwner() -> getId() != $controller -> getCurrentUser() -> getId()):?>
					<div class="flexRow postButtons" onclick="onMineButtonClick(<?=$post -> getId()?>, <?= $controller -> isLoggedIn() ? '1' : '0' ?>)"><p>It's Mine</p></div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- Content End -->
</body>
</html>