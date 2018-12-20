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

    public function __construct($id,  String $name,  String $email, String $phoneNumber, $imgUrl)
    {
        $this -> id = $id;
        $this -> fullName = $name;
        $this -> email = $email;
        $this -> phoneNumber = $phoneNumber;
        $this -> imgUrl = $imgUrl;
    }

    public function getId()
    {
        return $this -> $id;
    }
    
    public function getName()
    {
        return $this -> fullName;
    }

    public function getEmail()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C8B begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C8B end

        return $returnValue;
    }

    public function getPostsId()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C8D begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C8D end

        return $returnValue;
    }

    public function getPostIdByIndex( integer $ind)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C8F begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C8F end

        return $returnValue;
    }

    public function addPost( integer $postId)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C96 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C96 end

        return $returnValue;
    }

    public function removePost( integer $ind)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C99 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C99 end

        return $returnValue;
    }

    public function getPhoneNumber()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C9C begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C9C end

        return $returnValue;
    }

    public function getImg()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C9E begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C9E end

        return $returnValue;
    }

    public function getMessagesIds()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CA0 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CA0 end

        return $returnValue;
    }

    public function getMessageByIndex( integer $ind)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CA2 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CA2 end

        return $returnValue;
    }

    public function addMessage( integer $MsgId)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CA5 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CA5 end

        return $returnValue;
    }

    public function removeMessage( integer $MsgInd)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CA8 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CA8 end

        return $returnValue;
    }

    public function getSentRequestsId()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CAB begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CAB end

        return $returnValue;
    }

    public function getSentRequestByIndex( integer $ind)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CAD begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CAD end

        return $returnValue;
    }

    public function addSentRequest( integer $requestId)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CAF begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CAF end

        return $returnValue;
    }

    public function removeSentRequest( integer $requestInd)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CB3 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CB3 end

        return $returnValue;
    }


    public function getRecievedRequestsIds()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CB6 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CB6 end

        return $returnValue;
    }


    public function getRecievedRequestByIbdex()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CB8 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CB8 end

        return $returnValue;
    }

    public function addRecievedRequest( integer $requestId)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CBA begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CBA end

        return $returnValue;
    }

    public function removeRecievedRequest( integer $requestIndex)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CBD begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000CBD end

        return $returnValue;
    }

}
?>