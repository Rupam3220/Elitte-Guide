<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{

$obj =new crud();
$obj->del("DELETE FROM notice WHERE id='".$_GET['id']."'");
header('Location:notice.php');                   
}
else
    header('Location:error.html');   
?>
