<?php

require_once("Controllers/class.PageController.php");

require_once("SQLClients/class.PostsSQLClient.php");
require_once("SQLClients/class.CategorySQLClient.php");

class SearchController extends PageController
{
    private $postsSQLClient = null;
    private $categorySQLClient = null;

    private $categorysToBeDisplayed = [];
    private $postsToBeDisplayed = [];
    private $categorysToSearchFor = [];

    public function __construct() {
        $this -> postsSQLClient = new PostsSQLClient();
        $this -> categorySQLClient = new CategorySQLClient();

        $this -> categorysToBeDisplayed = $this -> categorySQLClient -> getAllCategories();

        if($_GET){
            foreach ($_GET as $catId => $value) {
                if($value == "on")
                {
                    array_push($this -> categorysToSearchFor, $catId);
                }
            }

            if(isset($_GET["searchText"]) && $_GET["searchText"] != ""){
                $_SESSION["searchText"] = $_GET["searchText"];
                $this -> categorysToSearchFor = array_merge($this -> categorysToSearchFor, $this -> categorySQLClient -> searchCategoriesByName($_GET["searchText"]));
            }
            else{
                $_SESSION["searchText"] = null;
            }
        }

        foreach ($this -> categorysToSearchFor as $index => $cat) {
            if(gettype($cat) == "integer"){
                $this -> categorysToSearchFor[$index] = $this -> categorySQLClient -> getCategoryById($cat);
            }
        }

        $this -> postsToBeDisplayed = $this -> postsSQLClient -> getPostsByCategories($this -> categorysToSearchFor);
    }

    public function getCategories()
    {
        return $this -> categorysToBeDisplayed;
    }

    public function getPosts()
    {
        return $this -> postsToBeDisplayed;
    }

    public function isCatChecked($cat)
    {
        if(isset($_GET) && isset($_GET[(string) $cat -> getId()])){
            return "checked";
        }
        return "";
    }
}
?>