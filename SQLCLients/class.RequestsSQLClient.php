<?php

require_once("SQLClients/class.SQLClient.php");

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

    public function deleteRequest($rqstId)
    {
        
    }

    public function getUserRequests($User)
    {
        
    }

    public function getRequestById($rqstId)
    {
        
    }
}
?>