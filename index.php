<?php
	session_start();

	require_once("Controllers/class.MainPageController.php");
	require_once("SQLClients/class.UsersSQLClient.php");
	require_once("SQLClients/class.PostsSQLClient.php");

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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Nav Start -->
	<nav class="inFrame">
		<div class="navLeft">
			<i class="humIcon navIcon fas fa-bars"></i>
			<a href="#" class="title">Msro2a</a>
		</div>
		<div class="navRight">
			<form action="#" method="GET" class="searchForm flexRow">
				<input type="text" class="searchBar" placeholder="Search" name="searchText" value="<?php if(isset($_SESSION["searchText"])) echo $_SESSION["searchText"] ?>"/>
				<button class="searchIcon"><i class="fas fa-search"></i></button>
			</form>
			<?php if($controller -> isLoggedIn()): ?>
				<label class="welcome">Hi <?= $controller -> getCurrentUser() -> getName() ?>!</label>
			<?php else: ?>
				<button class="signIn_Up_Button">Sign In</button>
				<button class="signIn_Up_Button">Sign Up</button>
			<?php endif; ?>
		</div>
	</nav>
	<div class="searchForPhones">
		<form action="#" method="GET" class="searchForm inFrame">
			<input type="text" class="searchBar" placeholder="Search" name="searchText"/>
			<button class="searchIcon"><i class="fas fa-search"></i></button>
		</form>
	</div>
	<!-- Nav End -->
	<!-- Drawer Start -->
	<div class="drawer">
		<div class="drawerTitle">
			<i class="humIcon drawerIcon fas fa-bars"></i>
			<a href="#" class="title">Msro2a</a>
		</div>
		<div class="drawerItem">
			<a href="#">My Profile</a>
		</div>
		<div class="drawerItem">
			<a href="#">My Posts</a>
		</div>
		<div class="drawerItem">
			<a href="#">Sent Requests</a>
		</div>
		<div class="drawerItem">
			<a href="#">Recieved Requests</a>
		</div>
		<div class="drawerItem">
			<a href="#">Recieved Messages</a>
		</div>
		<div class="drawerItem">
			<a href="#">Search</a>
		</div>
	</div>
	<div class="notDrawer"></div>
	<!-- Drawer End -->

	<!-- Content Start -->
	<div class="contentContainer inFrame">
		<?php foreach ($controller -> getPosts() as $post): ?>
			<div class="flexColumn">
				<div class="post flexRow">
					<img src="<?= $post -> getImg() ?>">
					<div class="flexColumn">
						<div class="flexColumn postDetails">
							<div class="postOwner">
								<img src="imgs/Client.png" class="clientImg">
								<label><?= $controller -> getUserById($post -> getUserId()) -> getName() ?></label>
							</div>
							<div>
								<label>Description</label> <br>
								<label><?= $post -> getDescription() ?></label>
							</div>
							<div>
								<label>Categories</label> <br>
								<label>Mobiles, Electronics, Personal 7agat</label>
							</div>
						</div>
					</div>
				</div>
				<div class="flexRow postButtons"><p>It's Mine</p></div>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- Content End -->

	<script type="text/javascript" src="js/js.js"></script>
</body>
</html>