<?php
class dbhandler
{
    private $dbconn = null;
    public function construct()
    {

    try{
        $db =new dbconnection();
        $this->dbconn = $db->getconnection();
    }
    catch(Exception $exception)
    {
        throw new Exception("cannot open connection to database: ". $exception ->getMessage());
    }
}
public function login($cusername,$cpassword)
{
    try{
        $stmt = $this ->dbconn->prepare("select * from users where username=:username and password=:password");
        $stmt ->execute([':username' => $cusername]);
        $row =$stmt->fetchAll();
        if($row)
        {
            return true;
        }
        else{
            return false;
        }
    }
    catch(Exception $exception)
    {
        throw $exception;
    }
}
public function register($cfirst_name,$clast_name,$blood_group,$cphone_number,$cAddress)
{
    $stmt =$this->dbconn->prepare("insert into registration(first_name,last_name,blood_group,phone_number,
    address) values (:cfirst_name,:clast_name,:cblood_group,:cphone_number,:cAddress)") ;
    $stmt ->execute(['cfirst_name' => $cfirst_name, ':clast_name' => $clast_name, 
    ':cblood_group' => $cblood_group, ':cphone_number' => $cphone_number, ':caddress' => $caddress ]); 

}}
?>