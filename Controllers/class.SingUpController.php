<?php


require_once("SQLCLients/class.UsersSQLClient.php");
require_once("Controllers/class.PageController.php");





	//$user ->function __construct();

class SingUpController extends PageController
{


	 public function __construct()
	{
		$username=$email=$password=$confirmpassword=$phonenumber="";
		parent::__construct();







		if(isset($_POST['Sign-up'])){





if (empty($_POST["fullname"])) {
$nameError = "Name is required";
} else {

// check name only contains letters and whitespace
if (preg_match("/^[a-zA-Z ]*$/",$_POST["fullname"])) {
$username =$_POST["fullname"];
}
}
if (empty($_POST["Email"])) {
$emailError = "Email is required";
} else {

// check if e-mail address syntax is valid or not
if (filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
$email=$_POST["Email"];
}
}

if($_POST['password']>= 6 &&$_POST['password'] !=$_POST['fullname']  &&$_POST['password']==$_POST['Repeatepassword'])
			{

					$password=$_POST['password'];
			}

			if( substr( $_POST['phonenumber'], 0, 2 ) === "01" && strlen($_POST['phonenumber']) ==11)
			{
				$phonenumber=$_POST['phonenumber'];
			}


	

$user=new User(" ","$username","$email","$phonenumber","","$password");

$this ->createNewAccount($user);


}

		


	




	


	}




    public function validateUserData()
    {

    }

    public function createNewAccount($user)
    {
    		$usersqlclient= new UsersSQLClient();
    		
    		$usersqlclient->saveNewAccount($user);
    }
}





?>
	

	