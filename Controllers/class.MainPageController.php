<?php

require_once("Controllers/class.PageController.php");

require_once("SQLClients/class.PostsSQLClient.php");
require_once("SQLClients/class.UsersSQLClient.php");

class MainPageController extends PageController
{
    private $postsToBeDisplayed = null;

    private $postsSQLClient = null;

    public function __construct()
    {
        if(isset($_POST["signout"]) && $_POST["signout"] == "1"){
            $_SESSION["currentUser"] = null;
        }

        parent::__construct();

        $this -> postsSQLClient = new PostsSQLClient();
    
        $this -> postsToBeDisplayed = $this -> postsSQLClient -> getAllPosts();
    }

    public function getPosts()
    {
        return $this -> postsToBeDisplayed;
    }

    public function getUserById($id)
    {
        return $this -> postsToBeDisplayedOwners[(string) $id];
    }
}
?>