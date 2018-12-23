



<?php
require_once("classes/class.User.php");
	session_start();

	require_once("Controllers/class.SearchController.php");
	$controller = new SearchController();
	require_once("Controllers/class.SingUpController.php");

	$signupcontroller=new SingUpController();
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

		<link href="../css/sign-up.css" rel="stylesheet" type="text/css" >
</head>
<body>
	<?php require_once("Components/Nav.php") ?>

	<nav class="inFrame">
		<div class="navLeft">
			<i class="humIcon navIcon fas fa-bars"></i>
			<a href="#" class="title">Msro2a</a>
		</div>
		<div class="navRight">
			
		</div>
	</nav>
	
	<!-- Nav End -->
	
<!--form start-->
	<form name="sign-up"  method="post" action="signUp.php" >
		<br><br><br>
<h1>Sign-up</h1><br>
<p>please fill this form to create an account</p>
<hr>

<div>
<label for "fullname" style="margin-left: 20px" ><b>Full name</b></label><br>
<input type="text"  id="fullname" name="fullname" required placeholder="fullname"  onblur="namevalidation()"  ><br>
<label id="namevalidation" ></label>
</div>

<div>
<label for "Email"  name="emaillabel"  ><b>Email</b></label>
<input type="text"  id="Email" name="Email" required placeholder="e-mail"  onblur="checkemailvalidation()">
<label id="emailvalidation" ></label>
</div>

<div>
<label><b>Password</b></label><br>
<input type="Password" name="password" id="password" placeholder="password"  required  onblur="CheckPasswordvalidation()"><br>
<label id="passwordlabel"></label>
</div>

<div>
<label><b>Repeat Password</b></label><br>
<input type="Password" name="Repeatepassword"  id="Repeatepassword"  onblur="confirmpassword()" required placeholder="Repeate password" <br>
<label id="confirmpasswordlabel"></label>
</div>


<div>
<label><b>phone number</b></label><br>
<input type="text" name="phonenumber"  id="phonenumber" required placeholder="phonenumber" onblur="phonenumberfun()"><br>
<label id="phonelabel"></label>
</div>

<div class="buttonclass">
<button type="submit" name="Sign-up" target="_blank">Sign up</button><br>
<button type="button" name="cancel"  onclick="myFunction()"> Cancel</button>
</div>

</form>


	<script type="text/javascript" src="../js/sign_up.js"></script>
</body>
</html>