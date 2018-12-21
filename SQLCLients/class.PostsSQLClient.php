<?php

require_once("SQLClients/class.SQLClient.php");
require_once("classes/class.Post.php");

class PostsSQLClient extends SQLClient
{
    public function saveNewPost($post, $userId)
    {
        
    }

    public function deletePost($postId)
    {
        
    }

    public function editPostImage($postId, $newImageUrl)
    {
        
    }

    public function editPostDescription($postId, $newDes)
    {
        
    }

    public function editPostQuestions($postId, $newQuestions)
    {
        
    }

    public function getAllPosts()
    {
        $query = "SELECT * FROM `Posts`";
        $result = ($this -> db -> query($query));
        $result = $result -> fetch_all();
        
        $posts = [];
        foreach ($result as $row) {
            $postTemp = new Post($row[0], $row[3], $row[2], $row[1]);
            $postTemp -> loadCats();
            array_push($posts, $postTemp);
        }

        return $posts;
    }

    public function getPostsByCategories($categories)
    {
        
    }

    public function getUserPosts($user)
    {
        
    }

    public function getPostById($postId)
    {
        
    }

    public function loadCats($post)
    {
        $query = "SELECT * FROM `categories` WHERE postId = ". $post -> getId();
        $result = ($this -> db -> query($query));
        $result = $result -> fetch_all();

        if($result != null)
        {
            foreach ($result as $row) {
                $post -> addCategory(new Category($row[0], $row[2]));
            }
            return;
        }
    }
}
?>