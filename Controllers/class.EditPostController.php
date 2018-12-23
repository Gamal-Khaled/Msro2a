<?php

require_once("Controllers/class.PageController.php");

require_once("SQLClients/class.PostsSQLClient.php");
require_once("SQLClients/class.CategorySQLClient.php");

require_once("classes/class.Post.php");

class EditPostController extends PageController
{
    private $currentPost = null;
    public $postId = null;
    private $allCategories = [];

    private $postsSQLClient = null;
    private $categorySQLClient = null;

    public function __construct() {
        parent::__construct();

        $this -> postsSQLClient = new PostsSQLClient();
        $this -> categorySQLClient = new CategorySQLClient();

        $this -> allCategories = $this -> categorySQLClient -> getAllCategories();

        if($_GET){
            if(isset($_GET['postToEdit']) && $_GET['postToEdit'] != -1){
                $this -> loadPost($_GET["postToEdit"]);
            }
            else if($_GET['postToEdit'] == -1){
                $this -> currentPost = new Post(-1, "", "", $this -> currentUser, "");
            } else {
                header("Location: index.php");
            }
            $this -> postId = $_GET['postToEdit'];
        }
        elseif ($_POST) {
            echo "<script>console.log(".json_encode($_POST).")</script>";
            if(isset($_POST["postId"])){
                if((int)$_POST["postId"] != -1)
                    $this -> loadPost($_POST["postId"]);
                else
                    $this -> currentPost = null;

                $this -> postId = $_POST['postId'];

                $categories = [];
                $newCats = [];
                $questions = [];
                $newQuestions = [];
                foreach ($_POST as $key => $value) {
                    if(substr($key, 0, 3) == "cat" && count_chars($key) > 3 && $value == 'on'){
                        if(trim(substr($key, 3)) != "")
                            array_push($categories, substr($key, 3));
                    }
                    else if(substr($key, 0, 3) == "qus" && count_chars($key) > 3){
                        if(trim($value) != "")
                            array_push($questions, $value);
                    }
                    else if(substr($key, 0, 4) == "newQ" && count_chars($key) > 4){
                        if(trim($value) != "")
                            array_push($newQuestions, $value);
                    }
                    else if(substr($key, 0, 4) == "newC" && count_chars($key) > 4 && isset($_POST[$key . "Label"])){
                        if(trim($_POST[$key . "Label"]) != "")
                            array_push($newCats, $_POST[$key . "Label"]);
                    }
                }

                $error = false;
                if(count($categories) + count($newCats) == 0){
                    echo "<script>alert('The Post Should Fall at Least In One Category.')</script>";
                    $error = true;
                }
                if(count($questions) + count($newQuestions) == 0){
                    echo "<script>alert('The Post Should Have at Least In One Question.')</script>";
                    $error = true;
                }
                if(!isset($_POST["name"]) || $_POST["name"] == ""){
                    echo "<script>alert('The Post Should Have Name.')</script>";
                    $error = true;
                }
                if(!isset($_POST["desc"]) || $_POST["desc"] == ""){
                    echo "<script>alert('The Post Should Have Description.')</script>";
                    $error = true;
                }

                if(!$error){
                    foreach ($newCats as $index => $cat) {
                        $newCats[$index] = $this -> categorySQLClient -> saveNewCategory($cat);
                    }

                    if((int)$_POST["postId"] == -1){
                        $this -> currentPost = new Post(-1, $_POST["desc"], "imgs/client.jpg", $this -> currentUser, $_POST["name"]);
                        foreach ($newQuestions as $q) {
                            $this -> currentPost -> addNewQuestion($q);
                        }
                        foreach (array_merge($categories, $newCats) as $c) {
                            $this -> currentPost -> addCategory($c);
                        }

                        $this -> postsSQLClient -> saveNewPost($this -> currentPost, $this -> currentUser -> getId());
                        header("Location: index.php");
                    }
                    else
                    {
                        if($_POST["name"] != $this -> currentPost -> getName()){
                            $this -> postsSQLClient -> editPostName($this -> currentPost -> getId(), $_POST["name"]);
                        }
                        if($_POST["desc"] != $this -> currentPost -> getDescription()){
                            $this -> postsSQLClient -> editPostDescription($this -> currentPost -> getId(), $_POST["desc"]);
                        }
                        $this -> postsSQLClient -> editPostQuestions($this -> currentPost -> getId(), array_merge($questions, $newQuestions));
                        $this -> postsSQLClient -> editPostCategories($this -> currentPost -> getId(), array_merge($categories, $newCats));
                        
                        header("Location: MyPosts.php");
                    }
                }
            }
            else{
                header("Location: index.php");
            }
        } else {
            header("Location: index.php");
        }
    }

    public function getCurrentPost()
    {
        return $this -> currentPost;
    }
    
    public function getAllCategories()
    {
        return $this -> allCategories;
    }

    public function loadPost($postId)
    {
        $this -> currentPost = $this -> postsSQLClient -> getPostById($postId);
        $this -> postId = $this -> currentPost -> getId();
    }
}
?>