<?php

require_once("SQLClients/class.SQLClient.php");
require_once("classes/class.Message.php");

class MessagesSQLClient extends SQLClient
{
    public function saveNewMessage($msg, $userId, $msgStyle)
    {
        $this -> db -> query("INSERT INTO `message`(`userId`, `message`, `msgStyle`) VALUES ($userId, '$msg', '$msgStyle')");
    }

    public function deleteMessage($msgId)
    {
        $this -> db -> query("DELETE FROM `message` WHERE id = $msgId");
    }

    public function getUserMsgs($userId)
    {
        $result = $this -> db -> query("SELECT `id`, `message`, `msgStyle` FROM `message` WHERE userId = $userId");
        $result = $result -> fetch_all();

        $messages = [];

        foreach ($result as $message) {
            array_push($messages, new Message($message[0], $message[1], $message[2]));
        }

        return $messages;
    }

    public function getMessageById($msgId)
    {

    }
}
?>