<?php
	require_once("classes/class.User.php");
	
	session_start();

	require_once("Controllers/class.SignInController.php");
    
    $controller = new SignInController();
?>


<html>
<head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/sign in.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">

    
</head>
<body>
    
    <?php require_once("Components/Nav.php") ?>
    
<!--....-->
	<nav class="inFrame">
<!--		<div class="navLeft">-->
			<i class="humIcon navIcon fas fa-bars"></i>
			<a href="#" class="title">Msro2a</a>
<!--		        </div>-->
		<div class="navRight"></div>
	</nav>
        <br><br><br>
<!--....-->
    <title>Sign in</title><h1>Sign in</h1> <br><br>
<!--....-->    

<!--    -->
<!--    -->
<!--    -->
<!--    -->
<!--    -->
    
<form name="form1" action="signin.php" method="post">
    <ul style="list-style-type:none">
        
        <div>
        
        
        <!--Email-->
        <li>&nbsp;</li>
        <li>
            <b><H>Email:</H></b>
            <input type="email" id="Email" name="Email" required>
        </li>
        
        <!--Passwor-->
         <li>&nbsp;</li>
        <li>
            <b><H>Password:</H></b>
            <input type="password" id="Pass" name="Pass" required>
        </li>
         <li>&nbsp;</li>

        
        
        <!--New user-->
        <li>&nbsp;</li>
        <li>
            <a href="signUp.php" name="newuser"> New User? </a>
        </li>
        
        
        
        <!--Sign In-->
         <li>&nbsp;</li>
        <li>
            <input type="submit" name="submit" value="Sign in"/><br>
            
        </li>
              
            
            <li>&nbsp;</li>
        <li>&nbsp;</li>
        </div>
            
    </ul>

            
    </form>
            
        
        <!--Cancel-->
    <ul style="list-style-type:none">
         <li>&nbsp;</li>
        <li>
            <input type="button" value="Cancel" onclick="location.href = 'index.php';"/><br>
        </li>
    </ul>    
      
        
        
        <li>&nbsp;</li>
        <li>&nbsp;</li>
    

    

<!--....-->

    </body>
</html>
