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
    private $msgsId = null;
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
        
    }

    public function getPostsId()
    {
        
    }

    public function getPostIdByIndex( integer $ind)
    {
        
    }

    public function addPost( integer $postId)
    {
        
    }

    public function removePost( integer $ind)
    {
        
    }

    public function getPhoneNumber()
    {
        
    }

    public function getImg()
    {
        return $this -> imgUrl;
    }

    public function getMessagesIds()
    {
        
    }

    public function getMessageByIndex( integer $ind)
    {
        
    }

    public function addMessage( integer $MsgId)
    {

    }

    public function removeMessage( integer $MsgInd)
    {
        
    }

    public function getSentRequestsId()
    {
        
    }

    public function getSentRequestByIndex( integer $ind)
    {
        
    }

    public function addSentRequest( integer $requestId)
    {
        
    }

    public function removeSentRequest( integer $requestInd)
    {
        
    }


    public function getRecievedRequestsIds()
    {
        
    }


    public function getRecievedRequestByIbdex()
    {
        
    }

    public function addRecievedRequest( integer $requestId)
    {
        
    }

    public function removeRecievedRequest( integer $requestIndex)
    {
        
    }
}
?>