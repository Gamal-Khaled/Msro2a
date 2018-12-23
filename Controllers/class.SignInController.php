<?php

require_once("Controllers/class.PageController.php");

require_once("SQLClients/class.SQLClient.php");

require_once("classes/class.User.php");

require_once("SQLClients/class.UsersSQLClient.php");


class SignInController extends PageController
{
    
    
    private $userSQLClient = null;
    
    private $Email=null;
    private $Pass=null;

    public function __construct() {
        parent::__construct();
        
        $this -> userSQLClient = new UsersSQLClient();
        
        if(isset($_POST['submit'])) {
            $this-> Email= $_POST['Email'];
            $this -> Pass= $_POST['Pass'];
            $USERR= $this -> userSQLClient -> getUserBy_Email_Pass($this->Email,$this->Pass);
            if($USERR!==null)
            {
                echo "<script>alert('Successfull')</script>";   
                $_SESSION["currentUser"] = $USERR;
                header("Location: index.php");
            }
            else{
                echo "<script>alert('You Are Not Registered OR You Entered The Email or Password Wrongly')</script>";
                header("Location: signIn.php");
            }
        }
   
        
    }

    public function validateUserData()
    {
        
    }

    public function logIn()
    {
        
    }

}
?>