<?php

require_once("SQLClients/class.PostsSQLClient.php");

class Post
{
    private $id = null;
    private $name = null;
    private $description = null;
    private $imageUrl = null;
    private $owner = null;

    private $questions = [];
    private $questionsIds = [];
    private $categories = [];

    public function __construct($id, $description, $imageUrl, $owner, $name)
    {
        $this -> id = $id;
        $this -> description = $description;
        $this -> imageUrl = $imageUrl;
        $this -> owner = $owner;
        $this -> name = $name;
    }

    public function getId()
    {
        return $this -> id;
    }

    public function getName()
    {
        return $this -> name;
    }

    public function getDescription()
    {
        return $this -> description;
    }

    public function getImg()
    {
        return $this -> imageUrl;
    }

    public function getQuestions()
    {
        return $this -> questions;
    }

    public function getQuestionsIds()
    {
        return $this -> questionsIds;
    }

    public function getQuestionId($index)
    {
        return $this -> questionsIds[$index];
    }

    public function getQuestionByIndex($id)
    {

    }


    public function getOwner()
    {
        return $this -> owner;
    }

    public function setDescription($desc)
    {

    }

    public function setImg($imgUrl)
    {

    }

    public function addQuestion($id, $question)
    {
        array_push($this -> questionsIds, $id);
        array_push($this -> questions, $question);
    }

    public function addNewQuestion($question)
    {
        array_push($this -> questions, $question);
    }

    public function getCategories()
    {
        return $this -> categories;
    }

    public function getCategoryByIndex($ind)
    {

    }

    public function addCategory($cat)
    {
        array_push($this -> categories, $cat);
    }

    public function setUserId($userId)
    {

    }

    public function removeQuestion($ind)
    {

    }

    public function removeCategory($ind)
    {

    }

    public function hasCategory($catId)
    {
        foreach ($this -> categories as $category) {
            if($category -> getId() == $catId)
                return true;
        }
        return false;
    }
}
?>