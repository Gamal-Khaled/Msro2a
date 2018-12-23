<?php

class Request
{
    public $id = null;
    public $answers = null;
    public $post = null;

    public function __construct($id, $ansrs, $post)
    {
        $this -> id = $id;
        $this -> answers = $ansrs;
        $this -> post = $post;
    }

    public function getId()
    {
        return $this -> id;
    }

    public function getAnswers()
    {
        return $this -> answers;
    }

    public function getAnswerByIndex($ind)
    {
        return $this -> answers[$ind];
    }

    public function getPost()
    {
        return $this -> post;
    }

    public function setAnswerById($ind, $answer)
    {

    }

    public function addAnswer($answer)
    {

    }

    public function removeAnswer($ind)
    {
    }

    public function setPostId($id)
    {

    }
}
?>