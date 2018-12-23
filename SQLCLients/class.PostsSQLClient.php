<?php

require_once("SQLClients/class.SQLClient.php");
require_once("classes/class.Post.php");
require_once("classes/class.User.php");
require_once("classes/class.Category.php");

class PostsSQLClient extends SQLClient
{
    public function saveNewPost($post, $userId)
    {
        $this -> db -> query("INSERT INTO `posts`(`userId`, `imgUrl`, `description`, `name`) VALUES (
            $userId, '
            " . trim($post -> getImg()) . "', '
            " . trim($post -> getDescription()) . "', '
            " . trim($post -> getName()) . "'
        )");

        $postId = $this -> db -> query("SELECT id FROM `posts` ORDER BY id DESC LIMIT 1");
        $postId = ($postId -> fetch_assoc())["id"];

        foreach ($post -> getQuestions() as $q) {
            $this -> addNewQuestion($q, $postId);
        }
        foreach ($post -> getCategories() as $c) {
            $this -> addNewCategory($c, $postId);
        }
    }

    public function addNewQuestion($question, $postId)
    {
        $this -> db -> query("INSERT INTO `questions`(`postId`, `question`) VALUES ($postId, '$question')");
    }

    public function addNewCategory($category, $postId)
    {
        $this -> db -> query("INSERT INTO `postscategories`(`postId`, `categoryId`) VALUES ($postId, '$category')");
    }

    public function deletePost($postId)
    {
        $this -> db -> query("DELETE FROM `postscategories` WHERE postId = $postId");
        $this -> db -> query("DELETE FROM `posts` WHERE id = $postId");
    }

    public function editPostName($postId, $newName)
    {
        $this -> db -> query("UPDATE `posts` SET `name`= '$newName' WHERE id = $postId");
    }

    public function editPostImage($postId, $newImageUrl)
    {
        $this -> db -> query("UPDATE `posts` SET `imgUrl`= '$newImageUrl' WHERE id = $postId");
    }

    public function editPostDescription($postId, $newDes)
    {
        $this -> db -> query("UPDATE `posts` SET `description`= '$newDes' WHERE id = $postId");
    }

    public function editPostQuestions($postId, $newQuestions)
    {
        $query = "DELETE FROM `questions` WHERE postId = $postId;";
        $this -> db -> query($query);

        foreach ($newQuestions as $q) {
            $query = "INSERT INTO `questions`(`postId`, `question`) VALUES ($postId, '$q');";
            $this -> db -> query($query);
        }
    }

    public function editPostCategories($postId, $newCategories)
    {
        $query = "DELETE FROM `postscategories` WHERE postId = $postId;";
        $this -> db -> query($query);

        foreach ($newCategories as $c) {
            $query = "INSERT INTO `postscategories`(`postId`, `categoryId`) VALUES ($postId, $c);";
            $this -> db -> query($query);
        }
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
            $query = 'SELECT DISTINCT * FROM `posts`, `users`, `categories`, `postscategories`
            WHERE posts.userId = users.id 
            and categories.id = postscategories.categoryId 
            and posts.id = postscategories.postId 
            and categories.category like "%' . $categories[0] -> getName() . '%"';

            for ($i = 1; $i < count($categories); $i++) { 
                $query = $query . " or categories.category like '%" . $categories[$i] -> getName() . "%'";
            }

            $query = $query . ' GROUP BY(posts.id)';
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
        $query = "SELECT * FROM `posts` WHERE posts.userId = " . $user -> getId();
        $result = ($this -> db -> query($query));
        $result = $result -> fetch_all();
        
        $posts = [];
        foreach ($result as $row) {
            $postTemp = new Post($row[0], $row[3], $row[2], $user, $row[4]);
            
            $this -> loadCats($postTemp);
            $this -> loadQuestions($postTemp);
            array_push($posts, $postTemp);
        }

        return $posts;
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
        $query = "SELECT categoryId FROM `postscategories` WHERE postId = ". $post -> getId();
        $result = ($this -> db -> query($query));
        $result = $result -> fetch_all();

        $categories = [];
        if(count($result) != 0)
        {
            foreach ($result as $row) {
                array_push($categories, $row[0]);
            }
        }

        if(count($categories) != 0)
        {
            $query = "SELECT * FROM `categories` WHERE id = " . $categories[0];
            for ($i = 1; $i < count($categories); $i++) { 
                $query .= " or id = " . $categories[$i];
            }

            $result = ($this -> db -> query($query));
            $result = $result -> fetch_all();
        }

        if(count($result) != 0)
        {
            foreach ($result as $row) {
                $post -> addCategory(new Category($row[0], $row[1]));
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