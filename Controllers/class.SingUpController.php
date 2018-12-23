<?php


require_once("SQLCLients/class.UsersSQLClient.php");
require_once("Controllers/class.PageController.php");





	//$user ->function __construct();

class SingUpController extends PageController
{


	public function __construct()
	{
		parent::__construct();

		if($this -> isLoggedIn())
			header("Location: logIn.php");

		
	}

    public function validateUserData()
    {
		$usersqlclient= new UsersSQLClient();

		$valid = true;

		$valid = $valid && isset($_POST["fullname"]) && ($_POST["fullname"] != "");

		$valid = $valid && isset($_POST["fullname"]) && ($_POST["fullname"] != "");

		$valid = $valid && isset($_POST["Email"]) && ($_POST["Email"] != "") && (strpos($_POST["Email"], "@") !== false) && (strpos($_POST["Email"], ".") !== false);

		$valid = $valid && 
			isset($_POST["password"]) && 
			($_POST["password"] != "") && 
			isset($_POST["Repeatepassword"]) && 
			($_POST["password"] === $_POST["Repeatepassword"])
		;

		$valid = $valid && isset($_POST["phonenumber"]) && (strlen($_POST["phonenumber"]) === 11) && (substr($_POST["phonenumber"], 0, 2) === "01");

		if($valid){
			$valid = $valid && ($usersqlclient -> isPhoneNumberExists($_POST["phonenumber"]));
			$valid = $valid && ($usersqlclient -> isEmailExists($_POST["Email"]));
		}
		

		if($valid)
			$this -> createNewAccount(new User(0,$username,$email,$phonenumber,"",$password));
    }

    public function createNewAccount($user)
    {
		$usersqlclient= new UsersSQLClient();
		
		$usersqlclient->saveNewAccount($user);
    }
}
?>