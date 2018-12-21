<?php
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
</head>
<body>
	<?php require_once("Components/Nav.php") ?>
	<?php require_once("Components/Drawer.php") ?>

	<!-- Content Start -->
	<div class="contentContainer inFrame">
		<div class="post flexRow userAccount">
			<img src="imgs/img_avatar3.png" class="profilePic">
			<div class="flexColumn">
				<div class="flexColumn postDetails">
					<div class="postOwner">
						<label>Sayed Abo-7feza</label>
					</div>
					<div>
						<label>Email</label> <br>
						<label>Sayed_Abo_7feza@gmail.com</label>
					</div>
					<div>
						<label>Phone Number</label> <br>
						<label>010000000000</label>
					</div>
				</div>
				<div class="buttonsContainer flexRow">
					<button class="addPostButton">Add Post</button>
					<button class="deleteAccButton">Delete Account</button>
				</div>
			</div>
		</div>
		<div class="flexColumn">
			<div class="post flexRow">
				<img src="imgs/item1.jpg">
				<div class="flexColumn">
					<div class="flexColumn postDetails">
						<div class="postOwner">
							<img src="imgs/Client.png" class="clientImg">
							<label>Sayed Abo-7feza</label>
						</div>
						<div>
							<label>Description</label> <br>
							<label>IPhone XS l2eto fe alcity mrme, s7bo 8be awe bsra7a y3ne hwa da3 mno 1000$ mn8er m ya5od balo??</label>
						</div>
						<div>
							<label>Categories</label> <br>
							<label>Mobiles, Electronics, Personal 7agat</label>
						</div>
					</div>
				</div>
			</div>
			<div class="flexRow">
				<div class="flexRow postButtons editButton"><p>Edit Post</p></div>
				<div class="flexRow postButtons"><p>Delete Post</p></div>
			</div>
		</div>
		<div class="flexColumn">
			<div class="post flexRow">
				<img src="imgs/item1.jpg">
				<div class="flexColumn">
					<div class="flexColumn postDetails">
						<div class="postOwner">
							<img src="imgs/Client.png" class="clientImg">
							<label>Sayed Abo-7feza</label>
						</div>
						<div>
							<label>Description</label> <br>
							<label>IPhone XS l2eto fe alcity mrme, s7bo 8be awe bsra7a y3ne hwa da3 mno 1000$ mn8er m ya5od balo??</label>
						</div>
						<div>
							<label>Categories</label> <br>
							<label>Mobiles, Electronics, Personal 7agat</label>
						</div>
					</div>
				</div>
			</div>
			<div class="flexRow">
				<div class="flexRow postButtons editButton"><p>Edit Post</p></div>
				<div class="flexRow postButtons"><p>Delete Post</p></div>
			</div>
		</div>
		<div class="flexColumn">
			<div class="post flexRow">
				<img src="imgs/item1.jpg">
				<div class="flexColumn">
					<div class="flexColumn postDetails">
						<div class="postOwner">
							<img src="imgs/Client.png" class="clientImg">
							<label>Sayed Abo-7feza</label>
						</div>
						<div>
							<label>Description</label> <br>
							<label>IPhone XS l2eto fe alcity mrme, s7bo 8be awe bsra7a y3ne hwa da3 mno 1000$ mn8er m ya5od balo??</label>
						</div>
						<div>
							<label>Categories</label> <br>
							<label>Mobiles, Electronics, Personal 7agat</label>
						</div>
					</div>
				</div>
			</div>
			<div class="flexRow">
				<div class="flexRow postButtons editButton"><p>Edit Post</p></div>
				<div class="flexRow postButtons"><p>Delete Post</p></div>
			</div>
		</div>
		<div class="flexColumn">
			<div class="post flexRow">
				<img src="imgs/item1.jpg">
				<div class="flexColumn">
					<div class="flexColumn postDetails">
						<div class="postOwner">
							<img src="imgs/Client.png" class="clientImg">
							<label>Sayed Abo-7feza</label>
						</div>
						<div>
							<label>Description</label> <br>
							<label>IPhone XS l2eto fe alcity mrme, s7bo 8be awe bsra7a y3ne hwa da3 mno 1000$ mn8er m ya5od balo??</label>
						</div>
						<div>
							<label>Categories</label> <br>
							<label>Mobiles, Electronics, Personal 7agat</label>
						</div>
					</div>
				</div>
			</div>
			<div class="flexRow">
				<div class="flexRow postButtons editButton"><p>Edit Post</p></div>
				<div class="flexRow postButtons"><p>Delete Post</p></div>
			</div>
		</div>
		<div class="flexColumn">
			<div class="post flexRow">
				<img src="imgs/item1.jpg">
				<div class="flexColumn">
					<div class="flexColumn postDetails">
						<div class="postOwner">
							<img src="imgs/Client.png" class="clientImg">
							<label>Sayed Abo-7feza</label>
						</div>
						<div>
							<label>Description</label> <br>
							<label>IPhone XS l2eto fe alcity mrme, s7bo 8be awe bsra7a y3ne hwa da3 mno 1000$ mn8er m ya5od balo??</label>
						</div>
						<div>
							<label>Categories</label> <br>
							<label>Mobiles, Electronics, Personal 7agat</label>
						</div>
					</div>
				</div>
			</div>
			<div class="flexRow">
				<div class="flexRow postButtons editButton"><p>Edit Post</p></div>
				<div class="flexRow postButtons"><p>Delete Post</p></div>
			</div>
		</div>
		<div class="flexColumn">
			<div class="post flexRow">
				<img src="imgs/item1.jpg">
				<div class="flexColumn">
					<div class="flexColumn postDetails">
						<div class="postOwner">
							<img src="imgs/Client.png" class="clientImg">
							<label>Sayed Abo-7feza</label>
						</div>
						<div>
							<label>Description</label> <br>
							<label>IPhone XS l2eto fe alcity mrme, s7bo 8be awe bsra7a y3ne hwa da3 mno 1000$ mn8er m ya5od balo??</label>
						</div>
						<div>
							<label>Categories</label> <br>
							<label>Mobiles, Electronics, Personal 7agat</label>
						</div>
					</div>
				</div>
			</div>
			<div class="flexRow">
				<div class="flexRow postButtons editButton"><p>Edit Post</p></div>
				<div class="flexRow postButtons"><p>Delete Post</p></div>
			</div>
		</div>
	</div>
	<!-- Content End -->

	<script type="text/javascript" src="js/myPosts.js"></script>
</body>
</html>