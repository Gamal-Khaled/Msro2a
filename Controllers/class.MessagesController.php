<?php

require_once("Controllers/class.PageController.php");

class MessagesController extends PageController
{
    public $userMessages = null;

    public function __construct() {
        parent::__construct();
    }

    public function onMSGClick($msgIndex)
    {
 
    }

    public function onDeleteMSGClick($msgIndex)
    {

    }
}
?>