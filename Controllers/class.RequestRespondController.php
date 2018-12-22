<?php

require_once("Controllers/class.PageController.php");

class RequestRespondController extends PageController
{
    public $currentRqst = null;

    public function __construct() {
        parent::__construct();
    }

    public function onValidClick()
    {

    }

    public function onInvalidClick()
    {

    }
}

?>