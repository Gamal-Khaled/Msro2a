<?php

require_once("Controllers/class.PageController.php");

require_once("SQLClients/class.PostsSQLClient.php");
require_once("SQLClients/class.UsersSQLClient.php");

class MainPageController extends PageController
{
    private $postsToBeDisplayed = null;
    private $postsToBeDisplayedOwners = [];

    private $postsSQLClient = null;
    private $userSQLClient = null;

    public function __construct()
    {
        $this -> userSQLClient = new UsersSQLClient();
        $this -> postsSQLClient = new PostsSQLClient();
    
        $this -> postsToBeDisplayed = $this -> postsSQLClient -> getAllPosts();
        foreach ($this -> postsToBeDisplayed as $post) {
            array_push($this -> postsToBeDisplayedOwners, $post -> getUserId());
        }
        $this -> postsToBeDisplayedOwners = array_unique($this -> postsToBeDisplayedOwners);

        $this -> postsToBeDisplayedOwners = $this -> userSQLClient -> getUsersByIds($this -> postsToBeDisplayedOwners);
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