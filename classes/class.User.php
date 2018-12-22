<?php

require_once('class.Message.php');
require_once('class.Post.php');
require_once('class.Request.php');

class User
{
    private $fullName = null;
    private $id = null;
    private $email = null;
    private $phoneNumber = null;
    private $imgUrl = null;

    private $postsId = null;
    private $msgs = [];
    private $sentRequestsId = null;
    private $recievedRequestsId = null;

    public function __construct($id, $name, $email, $phoneNumber, $imgUrl)
    {
        $this -> id = $id;
        $this -> fullName = $name;
        $this -> email = $email;
        $this -> phoneNumber = $phoneNumber;
        $this -> imgUrl = $imgUrl;
    }

    public function getId()
    {
        return $this -> id;
    }
    
    public function getName()
    {
        return $this -> fullName;
    }

    public function getEmail()
    {
        return $this -> email;
    }

    public function getPhoneNumber()
    {
        return $this -> phoneNumber;
    }

    public function getPostsId()
    {
        
    }

    public function getPostIdByIndex($ind)
    {
        
    }

    public function addPost($postId)
    {
        
    }

    public function removePost($ind)
    {
        
    }

    public function getImg()
    {
        return $this -> imgUrl;
    }

    public function getMessages()
    {
        return $this -> msgs;
    }

    public function getMessageByIndex($ind)
    {
        
    }

    public function addMessage($msg)
    {
        array_push($this -> msgs, $msg);
    }

    public function removeMessage($MsgInd)
    {
        
    }

    public function getSentRequestsId()
    {
        
    }

    public function getSentRequestByIndex($ind)
    {
        
    }

    public function addSentRequest($requestId)
    {
        
    }

    public function removeSentRequest($requestInd)
    {
        
    }


    public function getRecievedRequestsIds()
    {
        
    }


    public function getRecievedRequestByIbdex()
    {
        
    }

    public function addRecievedRequest($requestId)
    {
        
    }

    public function removeRecievedRequest($requestIndex)
    {
        
    }

    public function setMessages($messages){
        $this -> msgs = $messages;
    }
}
?>