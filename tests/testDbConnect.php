<?php
require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class testDbConnect extends TestCase{
    
    
    function testDbConnection()
    {
        $db = new dbconnector();
        $this->assertInstanceOf(PDO::class,$db);
        
        return $db;
    }
    
    @depends testDbConnection
    function testInsertDataIntoDb()
    {
        
    }
    
}



?>