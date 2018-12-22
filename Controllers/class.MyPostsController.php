<?php

require_once("Controllers/class.PageController.php");

class MyPostsController extends PageController
{
    public $userPosts = null;

    public function __construct() {
        parent::__construct();
    }

    public function onPostClick($postId)
    {
        
    }

    public function onDeletePostClick($postId)
    {
        
    }

    public function deleteAccount()
    {
        
    }
}
?>