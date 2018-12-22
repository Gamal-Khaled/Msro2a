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
            header("Location: index.php");
        }

        $this -> msgsSQLClient = new MessagesSQLClient();
        
        if(isset($_GET["delete"]))
            $this -> onDeleteMSGClick($_GET["delete"]);

        $this -> userMessages = $this -> msgsSQLClient -> getUserMsgs($this -> currentUser -> getId());
    }

    public function getUserMessages()
    {
        return $this -> userMessages;
    }

    public function onDeleteMSGClick($msgId)
    {
        $this -> msgsSQLClient -> deleteMessage($msgId);
        header("Location: " . $_SERVER["PHP_SELF"]);
    }
}
?>