<?php

require_once("controllers/class.PageController.php");
require_once("SQLClients/class.PostsSQLClient.php");
require_once("SQLClients/class.RequestsSQLClient.php");
require_once("classes/class.Request.php");

class NewRequestController extends PageController{

    private $post = null;
    private $requestsSQLClient = null;

    public function __construct() {
        parent::__construct();
        $this -> requestsSQLClient = new RequestsSQLClient();

        if($this -> isLoggedIn()){
            if($_POST && isset($_GET["postId"])){
                $this -> post = (new PostsSQLClient) -> getPostById($_GET["postId"]);

                if ($this -> post -> getOwner() -> getId() == $this -> getCurrentUser() -> getId()){
                    echo "<script>alert('You Can't Make Request on Your Own Post.')</script>";
                    header("Location: sign-in.php");
                    die();
                }

                $completeAnswers = true;
                $answers = [];
                foreach ($this -> post -> getQuestionsIds() as $id) {
                    $completeAnswers = $completeAnswers && isset($_POST[(string)$id]) && ($_POST[(string)$id] != "");
                    if(!$completeAnswers) break;
                    
                    array_push($answers, $_POST[(string)$id]);
                }

                if(!$completeAnswers){
                    echo "<script>alert('Please Fill in All The Fileds First.')</script>";
                } else {
                    $tempRequest = new Request(-1, $answers, $this -> post);
                    $this -> requestsSQLClient -> saveNewRequest($tempRequest, $this -> currentUser -> getId(), $this -> post -> getOwner() -> getId());
                    echo "<script>alert('Request Sent Successfully.')</script>";
                    header("Location: index.php");
                    die();
                }

            } else if(isset($_GET["postId"])) {
                $this -> post = (new PostsSQLClient) -> getPostById($_GET["postId"]);
                if ($this -> post -> getOwner() -> getId() == $this -> getCurrentUser() -> getId()){
                    echo "<script>alert('You Can't Make Request on Your Own Post.')</script>";
                    header("Location: index.php");
                    die();
                }
            } else {
                header("Location: index.php");
                die();
            }
        } else {
            echo "<script>alert('Please Sign-in First.');<?script>";
            header("Location: signIn.php");
            die();
        }
    }

    public function getPost()
    {
        return $this -> post;
    }
}

?>