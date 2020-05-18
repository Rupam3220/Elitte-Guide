<?php
session_start();
if(isset($_SESSION['uid']))
{
include('crud.php');
$obj =new crud();
$obj->del("DELETE FROM user WHERE id='".$_GET['id']."'");
header('Location:index.php');                   
}
else
header('Location:error.html');
?>
