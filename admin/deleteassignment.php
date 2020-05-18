<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{

$obj =new crud();
$obj->del("DELETE FROM assignment WHERE id='".$_GET['id']."'");
header('Location:assignment.php');                   
}
else
    header('Location:error.html');   
?>