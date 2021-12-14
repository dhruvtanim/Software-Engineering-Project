<?php
require_once('dblayer/dbconnection.php');
require_once('dblayer/dbhandler.php');
echo 'payment page <br>';
//print_r($_POST);
$cid=$_POST['id'];
$cpayment=$_POST['payment'];

if(empty ($cid )||empty ($cpayment)  )
{
    echo 'cannot be empty';
}
else
{
try
{
    $db= new dbhandler();
   $db->service($cid,$cpayment);
   echo' done <br>';
}

catch (Exception $exception){
   
    echo '<br> server issue-contact admin';
}
}
?>