<?php

class Category
{
    public $id = null;
    public $categoryName = null;

    public function __construct($id, $categoryName)
    {
        $this -> id = $id;
        $this -> categoryName = $categoryName;
    }
    
    public function getId()
    {
        return $this -> id;
    }

    public function getName()
    {
        return $this -> categoryName;
    }

    public function setId($id)
    {
        $this -> id = $id;
    }
}
?>