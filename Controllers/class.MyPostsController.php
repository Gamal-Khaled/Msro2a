<?php

require_once("Controllers/class.PageController.php");

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
        //echo "<script>alert('Please Log-in First.')</script>";
        foreach ($this -> postsToBeDisplayed as $index => $post) {
            if($postId == $post -> getId()){
                $this -> postsSQLClient -> deletePost($postId);
                header("Location: " . $_SERVER["PHP_SELF"]);
            }
        }

        header("Location: index.php");
    }

    public function deleteAccount()
    {
        
    }
}
?>