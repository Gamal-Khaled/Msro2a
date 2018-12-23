<?php

require_once("SQLClients/class.SQLClient.php");

require_once("classes/class.User.php");

require_once("classes/class.Category.php");

class UsersSQLClient extends SQLClient
{
    public function saveNewAccount($newUser)
    {
        
    }

    public function deleteUserAccount($userId)
    {
        $this -> db -> query("DELETE FROM users WHERE id = $userId");
    }

    public function getUserBy_Email_Pass($email, $pass)
    {
        $query = "SELECT * FROM users WHERE email = '$email' AND password='$pass'";
        $result = ($this -> db -> query($query));
        $result = $result -> fetch_assoc(); 

        if($result)
        {
            return new User($result["userId"], $result["fullName"], $result["email"], $result["phoneNumber"], $result["imgUrl"]);
        }
        
        return null;
    }

    public function getUserById($userId)
    {
        $query = "SELECT * FROM users WHERE id = $userId";
        $result = ($this -> db -> query($query));
        $result = $result -> fetch_assoc();

        if($result != null)
        {
            return new User($userId, $result["fullName"], $result["email"], $result["phoneNumber"], $result["imgUrl"]);
        }

        return null;
    }

    public function getUsersByIds($ids)
    {
        if(count($ids)){
            $query = "SELECT * FROM users WHERE id = " . $ids[0];
            for ($i = 1; $i < count($ids); $i++) { 
                $query = $query . " or id = " . $ids[i];
            }
            $result = ($this -> db -> query($query));
            $result = $result -> fetch_all();
            $users = [];
            
            if($result != null)
            {
                foreach ($result as $row) {
                    $users[(string)$row[0]] = new User($row[0], $row[1], $row[3], $row[2], $row[4]);
                }
                return $users;
            }
        }

        return null;
    }
}
?>