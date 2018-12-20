<?php

require_once("classes/class.Navigator.php");
require_once("classes/class.User.php");

class PageController
{
    protected $currentUser = null;
    protected $nvgtr = null;

    public function __construct()
    {
        $this -> currentUser = $_SESSION["currentUser"];
        $this -> nvgtr = new Navigator();
    }

    public function getCurrentUser()
    {
        return $this -> currentUser;
    }

    public function isLoggedIn()
    {
        return isset($this -> currentUser);
    }

    public function onViewMsgsClick()
    {

    }

    public function onViewRequestsClick()
    {

    }

    public function onViewMyPostsClick()
    {

    }

    public function onViewProfileClick()
    {

    }

    public function onSearchClick()
    {
        
    }
}
?>