<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{

$obj =new crud();
$obj->del("DELETE FROM user WHERE id='".$_GET['id']."'");
header('Location:index.php');                   
}
else
    header('Location:error.html');   
?>
