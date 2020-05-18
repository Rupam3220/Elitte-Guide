<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{
$obj=new crud();
$res=$obj->fetch("update user SET status='1' WHERE id=".$_GET['id']);
header("Location:index.php"); 
}
else
    header('Location:error.html');   
?>

