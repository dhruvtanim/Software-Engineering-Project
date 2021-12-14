<?php
require_once('dblayer/dbconnection.php');
require_once('dblayer/dbhandler.php');
echo 'in login page <br>';
//check the $_POST for form data - login criteria
//print_r($_POST);
$username = $_POST['uname'];
$password = $_POST['password'];
if(empty($username || empty($password) || strlen($password) < 6))
{
    echo 'username or password cannot be empthy and password must be greater than 8 characters <br>';
}
else
{

try
{
   $db= new dbhandler();
   if($db->login($username,$password)) 
   {
       header('location: registration.html');
   }
   else 
   {
       echo 'invalid user <br>';
   }
}
catch (Exception $exception){
    //throw $exception;
    echo 'server issue - contact admin';
}
}
?>