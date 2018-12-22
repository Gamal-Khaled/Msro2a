<?php

require_once("Controllers/class.PageController.php");
require_once("SQLClients/class.MessagesSQLClient.php");

class MessagesController extends PageController
{
    private $userMessages = null;
    private $msgsSQLClient = null;

    public function __construct() {
        parent::__construct();

        if(!$this -> isLoggedIn()){
            echo "<script>alert('Please Log-in First.')</script>";
            header("Location: index.php");
        }

        $this -> msgsSQLClient = new MessagesSQLClient();
        
        $this -> userMessages = $this -> msgsSQLClient -> getUserMsgs($this -> currentUser -> getId());
        
        if(isset($_GET["delete"]))
            $this -> onDeleteMSGClick($_GET["delete"]);
    }

    public function getUserMessages()
    {
        return $this -> userMessages;
    }

    public function onDeleteMSGClick($msgId)
    {
        $error = true;
        foreach ($this -> userMessages as $index => $msg) {
            if($msgId == $msg -> getId()){
                $this -> msgsSQLClient -> deleteMessage($msgId);
                header("Location: " . $_SERVER["PHP_SELF"]);
                $error = false;
            }
        }

        if($error)
            header("Location: index.php");
    }
}
?>