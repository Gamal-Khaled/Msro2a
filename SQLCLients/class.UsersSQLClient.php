<?php

require_once("SQLClients/class.SQLClient.php");
require_once("classes/class.User.php");

class UsersSQLClient extends SQLClient
{
    public function saveNewAccount( User $newUser)
    {
        $returnValue = null;

        return $returnValue;
    }

    public function deleteUserAccount( integer $userId)
    {
        $returnValue = (bool) false;

        return (bool) $returnValue;
    }

    public function getUserByEmail(String $email)
    {
        $returnValue = null;

        return $returnValue;
    }

    public function getUserById(int $userId)
    {
        $query = "SELECT * FROM `users` WHERE id = $userId";
        $result = ($this -> db -> query($query)) -> fetch_assoc();

        if($result != null)
        {
            return new User($userId, $result["fullName"], $result["email"], $result["phoneNumber"], $result["imgUrl"]);
        }

        return null;
    }

    public function getUsersByIds(array $ids)
    {
        if(count($ids)){
            $query = "SELECT * FROM `users` WHERE id = " . $ids[0];
            for ($i = 1; $i < count($ids); $i++) { 
                $query = $query . " or id = " . $ids[i];
            }
            $result = ($this -> db -> query($query)) -> fetch_all();
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