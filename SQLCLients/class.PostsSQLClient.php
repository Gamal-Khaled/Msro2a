<?php

require_once("SQLClients/class.SQLClient.php");
require_once("classes/class.Post.php");
require_once("classes/class.User.php");

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
        $query = "SELECT * FROM `posts`, `users` WHERE posts.userId = users.id";
        $result = ($this -> db -> query($query));
        $result = $result -> fetch_all();
        
        $posts = [];
        foreach ($result as $row) {
            $userTemp = new User($row[5], $row[6], $row[8], $row[7], $row[9]);
            $postTemp = new Post($row[0], $row[3], $row[2], $userTemp);
            
            $postTemp -> loadCats();
            array_push($posts, $postTemp);
        }

        return $posts;
    }

    public function getPostsByCategories($categories)
    {
        if(count($categories))
        {
            $query = 'SELECT DISTINCT * FROM `posts`, `users`, `categories` 
            WHERE posts.userId = users.id 
            and categories.postId = posts.id 
            and categories.category like "%' . $categories[0] -> getName() . '%"';

            for ($i = 1; $i < count($categories); $i++) { 
                $query = $query . " or categories.category like '%" . $categories[$i] -> getName() . "%'";
            }

            $query = $query . 'GROUP BY(posts.id)';
        }
        else{
            $query = 'SELECT DISTINCT * FROM `posts`, `users` WHERE posts.userId = users.id';
        }
        $result = ($this -> db -> query($query));
        $result = $result -> fetch_all();

        $posts = [];
        foreach ($result as $row) {
            $userTemp = new User($row[5], $row[6], $row[8], $row[7], $row[9]);
            $postTemp = new Post($row[0], $row[3], $row[2], $userTemp);
            
            $postTemp -> loadCats();
            array_push($posts, $postTemp);
        }

        return $posts;
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