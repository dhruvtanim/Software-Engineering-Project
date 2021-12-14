<?php
require_once('dblayer/dbconnection.php');
require_once('dblayer/dbhandler.php');
echo 'Service page <br>';
//print_r($_POST);
$cid=$_POST['id'];
$cservices=$_POST['services'];

if(empty ($cid )||empty ($cservices)  )
{
    echo 'cannot be empty';
}
else
{
try
{
    $db= new dbhandler();
   $db->service($cid,$cservices);
   echo' done <br>';
}

catch (Exception $exception){
   
    echo '<br> server issue-contact admin';
}
}
?>