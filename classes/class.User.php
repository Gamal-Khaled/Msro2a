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
    private $password = null;

    private $postsId = null;
    private $msgs = [];
    private $sentRequestsId = null;
    private $recievedRequestsId = null;

    public function __construct($id, $name, $email, $phoneNumber, $imgUrl,$password)
    {
        $this -> id = $id;
        $this -> fullName = $name;
        $this -> email = $email;
        $this -> phoneNumber = $phoneNumber;
        $this -> imgUrl = $imgUrl;
        $this -> password=$password;
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
<<<<<<< HEAD
        
=======
>>>>>>> 24b3f08baf028a17267add6f014f8004d031e5f8
    }

    public function getPhoneNumber()
    {
        return $this -> phoneNumber;
<<<<<<< HEAD
    }

    

     public function getPassword()
    {
        return $this -> password;
    }

    

    public function getPostIdByIndex( integer $ind)
=======
    }

    public function getPostsId()
>>>>>>> 24b3f08baf028a17267add6f014f8004d031e5f8
    {
        
    }

    public function getPostIdByIndex($ind)
    {
        
    }

    public function addPost($postId)
    {
        
    }

<<<<<<< HEAD
    
=======
    public function removePost($ind)
    {
        
    }
>>>>>>> 24b3f08baf028a17267add6f014f8004d031e5f8

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