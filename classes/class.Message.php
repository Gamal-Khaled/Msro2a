<?php

class Message
{
    private $id = null;
    private $msg = null;
    private $msgStyle = null;
    
    public function Message($id, $msg, $msgStyle)
    {
        $this -> id = $id;
        $this -> msg = $msg;
        $this -> msgStyle = $msgStyle;
    }

    public function getId()
    {
        return $this -> id;
    }

    public function getMsg()
    {
        return $this -> msg;
    }

    public function getMsgStyle()
    {
        return $this -> msgStyle;
    }
}
?>