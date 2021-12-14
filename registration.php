<?php
require_once('dblayer/dbconnection.php');
require_once('dblayer/dbhandler.php');
echo 'Registration page <br>';
//print_r($_POST);
$cfirst_name=$_POST['first_name'];
$clast_name=$_POST['last_name'];
//$cpassword=$_POST['password'];
$cblood_group=$_POST['blood_group'];
$cphone_number=$_POST['phone_number'];
$caddress=$_POST['address'];
if(empty ($cfirst_name) ||empty ($clast_name) ||empty ($cblood_group) ||empty ($cphone_number) ||empty ($caddress) )
{
    echo 'cannot be empty';
}
else
{
try
{
    $db= new dbhandler();
   $db->register($cfirst_name,$clast_name,$cblood_group,$cphone_number,$caddress);
   echo'registration done <br>';
}

catch (Exception $exception){
   
    echo '<br> server issue-contact admin';
}
}
?>