<?php

require_once("SQLClients/class.SQLClient.php");
require_once("classes/class.Post.php");

class PostsSQLClient extends SQLClient
{
    public function saveNewPost( Post $post,  integer $userId)
    {
        $returnValue = null;

        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CAC begin
        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CAC end

        return $returnValue;
    }

    public function deletePost( integer $postId)
    {
        $returnValue = (bool) false;

        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CB0 begin
        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CB0 end

        return (bool) $returnValue;
    }

    public function editPostImage( integer $postId,  String $newImageUrl)
    {
        $returnValue = (bool) false;

        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CB3 begin
        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CB3 end

        return (bool) $returnValue;
    }

    public function editPostDescription( integer $postId,  String $newDes)
    {
        $returnValue = (bool) false;

        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CB7 begin
        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CB7 end

        return (bool) $returnValue;
    }

    public function editPostQuestions( integer $postId,  String $newQuestions)
    {
        $returnValue = (bool) false;

        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CBB begin
        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CBB end

        return (bool) $returnValue;
    }

    public function getAllPosts()
    {
        $query = "SELECT * FROM `Posts`";
        $result = ($this -> db -> query($query)) -> fetch_all();

        
        $posts = [];
        foreach ($result as $row) {
            array_push($posts, new Post($row[0], $row[3], $row[2], $row[1]));
        }

        return $posts;
    }

    public function getPostsByCategories( Category $categories)
    {
        $returnValue = null;

        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BF6 begin
        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BF6 end

        return $returnValue;
    }

    public function getUserPosts( User $user)
    {
        $returnValue = null;

        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BF9 begin
        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BF9 end

        return $returnValue;
    }

    public function getPostById( integer $postId)
    {
        $returnValue = null;

        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000C1F begin
        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000C1F end

        return $returnValue;
    }
}
//echo "<script>console.log(".json_encode($result).")</script>";
?>