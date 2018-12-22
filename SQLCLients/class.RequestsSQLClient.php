<?php

require_once("SQLClients/class.SQLClient.php");

require_once("classes/class.User.php");
require_once("classes/class.Post.php");
require_once("classes/class.Request.php");

class RequestsSQLClient extends SQLClient
{
    public function saveNewRequest($rqst, $userId, $postOwnerId)
    {
        $this -> db -> query("INSERT INTO `requests`(`postId`, `ownerId`, `postOwnerId`) VALUES (" . $rqst -> getPost() -> getId() . ", $userId, $postOwnerId)");
        $rqstId = $this -> db -> query("SELECT id FROM `requests` ORDER BY id DESC LIMIT 1");
        $rqstId = ($rqstId -> fetch_assoc())["id"];
        
        foreach ($rqst -> getAnswers() as $answer) {
            $this -> db -> query("INSERT INTO `answers`(`requestId`, `answer`) VALUES ($rqstId, '$answer')");
        }
    }

    public function getUserRequests($userId)
    {
        $result = $this -> db -> query("SELECT * FROM `requests`, `posts`, `Users` 
            WHERE requests.ownerId = users.id 
            and posts.id = requests.postId 
            and requests.postOwnerId = $userId
        ");

        $result = $result -> fetch_all();
        $requests = [];

        foreach ($result as $row) {
            $tempUser = new User($row[9], $row[10], $row[12], $row[11], $row[13]);
            $tempRequest = new Post($row[4], $row[7], $row[6], $tempUser, $row[8]);

            array_push($requests, new Request($row[0], [], $tempRequest));
        }

        return $requests;
    }

    public function getRequestById($rqstId)
    {
        
    }
}
?>