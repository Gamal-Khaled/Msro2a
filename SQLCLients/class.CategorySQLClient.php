<?php

require_once("classes/class.Category.php");
require_once("SQLClients/class.SQLClient.php");

class CategorySQLClient extends SQLClient
{
    public function saveNewCategory($category)
    {
        
    }

    public function getAllCategories()
    {
        $result = $this -> db -> query('SELECT * FROM `categories`');
        $result = $result -> fetch_all();

        $categories = [];
        $categoriesNames = [];

        foreach ($result as $row) {
            if(!in_array($row[2], $categoriesNames)){
                array_push($categories, new Category($row[0], $row[2]));
                array_push($categoriesNames, $row[2]);
            }
        }

        return $categories;
    }

    public function getCategoryById($catId)
    {
        $result = $this -> db -> query("SELECT * FROM `categories` WHERE id = $catId");
        $result = $result -> fetch_assoc();

        return new Category($result["id"], $result["category"]);
    }

    public function searchCategoriesByName($searcText)
    {
        $result = $this -> db -> query("SELECT DISTINCT * FROM `categories` WHERE category LIKE '%$searcText%'");
        $result = $result -> fetch_all();

        $categories = [];
        $categoriesNames = [];

        foreach ($result as $row) {
            if(!in_array($row[2], $categoriesNames)){
                array_push($categories, new Category($row[0], $row[2]));
                array_push($categoriesNames, $row[2]);
            }
        }

        return $categories;
    }
}
?>