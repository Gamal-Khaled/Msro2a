<?php

require_once("classes/class.Category.php");
require_once("SQLClients/class.SQLClient.php");

class CategorySQLClient extends SQLClient
{
    public function saveNewCategory($category)
    {
        $this -> db -> query("INSERT INTO `categories`(`Category`) VALUES ('" . $category . "')");

        $catId = $this -> db -> query("SELECT id FROM `categories` ORDER BY id DESC LIMIT 1");
        return ($catId -> fetch_assoc())["id"];
    }

    public function getAllCategories()
    {
        $result = $this -> db -> query('SELECT * FROM `categories`');
        $result = $result -> fetch_all();

        $categories = [];

        foreach ($result as $row) {
            array_push($categories, new Category($row[0], $row[1]));
        }

        return $categories;
    }

    public function getCategoryById($catId)
    {
        $result = $this -> db -> query("SELECT * FROM `categories` WHERE id = $catId");
        $result = $result -> fetch_all();

        return new Category($result[0][0], $result[0][1]);
    }

    public function searchCategoriesByName($searcText)
    {
        $result = $this -> db -> query("SELECT DISTINCT * FROM `categories` WHERE category LIKE '%$searcText%'");
        $result = $result -> fetch_all();

        $categories = [];

        foreach ($result as $row) {
            array_push($categories, new Category($row[0], $row[1]));
        }

        return $categories;
    }
}
?>