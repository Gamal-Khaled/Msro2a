<?php

class Post
{

    private $id = null;
    private $description = null;
    private $imageUrl = null;
    private $userId = null;

    private $questions = [];
    private $categoriesId = [];

    public function __construct(int $id, String $description, String $imageUrl, int $userId)
    {
        $this -> id = $id;
        $this -> description = $description;
        $this -> imageUrl = $imageUrl;
        $this -> userId = $userId;
    }

    public function loadCats()
    {
        
    }

    public function getId()
    {
        return $this -> id;
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
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C38 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C38 end

        return $returnValue;
    }

    public function getQuestionByIndex( id $integer)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C3A begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C3A end

        return $returnValue;
    }


    public function getUserId()
    {
        return $this -> userId;
    }

    public function setDescription( String $desc)
    {
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C46 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C46 end
    }

    public function setImg( String $imgUrl)
    {
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C49 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C49 end
    }

    public function addQuestion( String $question)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C53 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C53 end

        return $returnValue;
    }


    public function getCategories()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C56 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C56 end

        return $returnValue;
    }

    public function getCategoryByIndex( integer $ind)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C58 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C58 end

        return $returnValue;
    }

    public function addCategory( integer $catId)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C5F begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C5F end

        return $returnValue;
    }

    public function setUserId( integer $userId)
    {
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C62 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C62 end
    }

    public function removeQuestion( integer $ind)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C7D begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C7D end

        return $returnValue;
    }

    public function removeCategory( integer $ind)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C80 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C80 end

        return $returnValue;
    }
}

?>