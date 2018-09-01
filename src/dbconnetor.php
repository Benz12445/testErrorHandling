<?php
class DbConnector extends PDO{
    private $db_name = "dbname";
    private $db_username = "root";
    private $db_pass = "";
    
    function __construct()
    {
        parent::__construct("mysql:host=localhost");
    }
}


?>