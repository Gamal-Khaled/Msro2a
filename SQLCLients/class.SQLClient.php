<?php

class SQLClient
{
    protected $db = null;
    private $databaseName = "Msro2a";
    private $userName = "root";
    private $password = "";

    public function __construct()
    {
        if(!isset($this -> db))
            $this -> startDBConnenction();
    }

    public function __destructor()
    {
        if(isset($this -> db))
            $this -> db -> close();
    }

    public function startDBConnenction()
    {
        $this -> db = new mysqli('127.0.0.1', $this -> userName, $this -> password, $this -> databaseName);
		if($this -> db -> connect_error)
		{
            $db = null;
			return false;
		}

        return true;
    }
}

?>