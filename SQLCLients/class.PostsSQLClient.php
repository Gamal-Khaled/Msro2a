<?php

require_once("SQLClients/class.SQLClient.php");
require_once("classes/class.Post.php");
require_once("classes/class.User.php");
require_once("classes/class.Category.php");

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
            $postTemp = new Post($row[0], $row[3], $row[2], $userTemp, $row[4]);
            
            $this -> loadCats($postTemp);
            $this -> loadQuestions($postTemp);
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
            $postTemp = new Post($row[0], $row[3], $row[2], $userTemp, $row[4]);
            
            $this -> loadCats($postTemp);
            $this -> loadQuestions($postTemp);
            array_push($posts, $postTemp);
        }

        return $posts;
    }

    public function getUserPosts($user)
    {
        
    }

    public function getPostById($postId)
    {
        $query = "SELECT * FROM `posts`, `users` WHERE posts.userId = users.id and posts.id = $postId";
        $result = ($this -> db -> query($query));
        $result = ($result -> fetch_all())[0];
        
        $userTemp = new User($result[5], $result[6], $result[8], $result[7], $result[9]);
        $postTemp = new Post($result[0], $result[3], $result[2], $userTemp, $result[4]);
        
        $this -> loadCats($postTemp);
        $this -> loadQuestions($postTemp);

        return $postTemp;
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

    public function loadQuestions($post)
    {
        $query = "SELECT * FROM `questions` WHERE postId = ". $post -> getId();
        $result = ($this -> db -> query($query));
        $result = $result -> fetch_all();

        if($result != null)
        {
            foreach ($result as $row) {
                $post -> addQuestion($row[0], $row[2]);
            }
            return;
        }
    }
}
?>