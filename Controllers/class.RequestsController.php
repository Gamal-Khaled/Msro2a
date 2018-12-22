<?php

require_once("Controllers/class.PageController.php");
require_once("SQLClients/class.RequestsSQLClient.php");

class RequestsController extends PageController
{
    private $requestsToBeDisplayed = null;
    private $requestsSQLClient = null;

    public function __construct() {
        parent::__construct();
        
        if(!$this -> isLoggedIn()){
            echo "<script>alert('Please Log-in First.')</script>";
            header("Location: signIn.php");
        }

        $this -> requestsSQLClient = new RequestsSQLClient();

        $this -> requestsToBeDisplayed = $this -> requestsSQLClient -> getUserRequests($this -> currentUser -> getId());
    }

    public function getRequestsToBeDisplayed()
    {
        return $this -> requestsToBeDisplayed;
    }
}
?>