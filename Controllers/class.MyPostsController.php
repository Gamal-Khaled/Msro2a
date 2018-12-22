<?php

require_once("Controllers/class.PageController.php");

require_once("SQLClients/class.PostsSQLClient.php");
require_once("SQLClients/class.UsersSQLClient.php");

class MyPostsController extends PageController
{
    private $postsToBeDisplayed = null;

    private $postsSQLClient = null;

    public function __construct()
    {
        parent::__construct();

        if(!$this -> isLoggedIn()){
            echo "<script>alert('Please Log-in First.')</script>";
            header("Location: logIn.php");
        }

        $this -> postsSQLClient = new PostsSQLClient();

        if($_POST){
            if(isset($_POST["deleteAccount"]) && $_POST["deleteAccount"] == "1"){
                (new UsersSQLClient()) -> deleteUserAccount($this -> currentUser -> getId());
                $_SESSION['currentUser'] = null;
                header("Location: index.php");
            }
        }
    
        $this -> postsToBeDisplayed = $this -> postsSQLClient -> getUserPosts($this -> currentUser);

        if(isset($_GET["deletePost"]))
            $this -> onDeletePostClick($_GET["deletePost"]);
    }

    public function getPosts()
    {
        return $this -> postsToBeDisplayed;
    }

    public function onDeletePostClick($postId)
    {
        $error = true;
        foreach ($this -> postsToBeDisplayed as $index => $post) {
            if($postId == $post -> getId()){
                $this -> postsSQLClient -> deletePost($postId);
                header("Location: " . $_SERVER["PHP_SELF"]);
                $error = false;
            }
        }

        if($error)
            header("Location: index.php");
    }

    public function deleteAccount()
    {
        
    }
}
?>