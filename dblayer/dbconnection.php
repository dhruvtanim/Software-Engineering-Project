<?php
class dbcinnection
{
    private $conn;
    public $host ="localhost";
    public $username ="users";
    public $password ="12345";
    public $dbname ="emergencyms";
    public function construct()
    {

    }
public function getconnection()
{
    $this->conn =null;
    $options =[
        PDO::ATTR_EMULATE_PREPARES     =>false,
    PDO::ATTR_ERRMODE              =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE   =>PDO::FETCH_ASSOC,

    ];
    try{
        $this->conn = new PDO("mysql:host= $this->host;dbname=$this->dbname",$this-> username,$this->password,$option);

    }
    catch(PDOException $exception)
    {
        throw $exception;
    }
    return $this->conn;
}
}