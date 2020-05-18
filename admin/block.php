<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{
$obj=new crud();
$res=$obj->fetch("update user SET block='1' WHERE id=".$_GET['id']);
header("Location:viewUser.php");    
}
else
    header('Location:error.html'); 
?>

