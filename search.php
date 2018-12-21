<?php
	session_start();

	require_once("Controllers/class.SearchController.php");

	$controller = new SearchController();
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
	<link rel="stylesheet" type="text/css" href="css/search.css">
</head>
<body>
	<?php require_once("Components/Nav.php") ?>
	<?php require_once("Components/Drawer.php") ?>

	<!-- Content Start -->
	<div class="contentContainer">
		<div class="flexRow topRow">
			<h1 class="title searchTitle">Search results for "iPhone"</h1>
		</div>
		
		<form action="search.php" method="GET" class="filter">
			<div class="filterTitle flexRow">
				<label>Filter By: </label>
				<div id="catFilterButton" class="button activeFilter">Category</div>
			</div>
			<div id="catFilterSection">
				<?php foreach ($controller -> getCategories() as $cat): ?>
					<div class="flexRow filterItem">
						<input type="checkbox" name="<?= $cat -> getId() ?>" <?= $controller -> isCatChecked($cat) ?>><label><?= $cat -> getName() ?></label>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="flexRow applyContainer">
				<input type="submit" value="Apply" class="submit">
			</div>
		</form>
		<?php if(count($controller -> getPosts()) == 0): ?>
			<Label> No Posts To Be Displayed. </Label>
		<?php endif; ?>
		<?php foreach ($controller -> getPosts() as $post): ?>
			<div class="flexColumn">
				<div class="post flexRow">
					<img src="imgs/item1.jpg">
					<div class="flexColumn">
						<div class="flexColumn postDetails">
							<div class="postOwner">
								<img src="<?= $post -> getOwner() -> getImg() ?>" class="clientImg">
								<label><?= $post -> getOwner() -> getName() ?></label>
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
				<div class="flexRow postButtons"><p>It's Mine</p></div>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- Content End -->

	<script type="text/javascript" src="js/search.js"></script>
</body>
</html>