<?php

require_once("Controllers/class.PageController.php");

class RequestsController extends PageController
{
    public $requestsToBeDisplayed = null;

    public function __construct() {
        parent::__construct();
    }

    public function onRequestClick($rqstId)
    {

    }
}

?>