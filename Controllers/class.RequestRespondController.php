<?php

require_once("Controllers/class.PageController.php");
require_once("SQLClients/class.RequestsSQLClient.php");
require_once("SQLClients/class.MessagesSQLClient.php");

class RequestRespondController extends PageController
{
    private $currentRqst = null;
    private $msgsSQLClient = null;

    public function __construct() {
        parent::__construct();
        
        if(!$this -> isLoggedIn()){
            echo "<script>alert('Please Log-in First.')</script>";
            header("Location: signIn.php");
        }

        if(isset($_GET["requestId"]))
        {
            $this -> requestsSQLClient = new RequestsSQLClient();
            $this -> msgsSQLClient = new MessagesSQLClient();
            
            $this -> currentRqst = $this -> requestsSQLClient -> getRequestById($_GET["requestId"]);

            if(isset($_GET["valid"]))
            {
                if($_GET["valid"] == 0)
                {
                    $msg = "Your request for " . $this -> currentRqst -> getPost() -> getName() . " has been rejected.";

                    $msgStyle = "negative";
                }
                else if($_GET["valid"] == 1)
                {
                    $msg = "Your request for " . 
                    $this -> currentRqst -> getPost() -> getName() . 
                    " has been verified by the item keeper please contact him to reclaim your item at: " .
                    $this -> currentUser -> getEmail() . " or " . $this -> currentUser -> getPhoneNumber() . ".";

                    $msgStyle = "positive";
                }

                $this -> msgsSQLClient -> saveNewMessage($msg, $this -> currentRqst -> getPost() -> getOwner() -> getId(), $msgStyle);
                $this -> requestsSQLClient -> deleteRequest($_GET["requestId"]);

                header("Location: messages.php");
            }
        }
        else
        {
            header("Location: index.php");
        }
    }

    public function getCurrentRequest()
    {
        return $this -> currentRqst;
    }

    public function onValidClick()
    {

    }

    public function onInvalidClick()
    {

    }
}

?>