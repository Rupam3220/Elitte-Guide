<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{

$obj =new crud();
$obj->del("DELETE FROM classnote WHERE id='".$_GET['id']."'");
header('Location:classnote.php');                   
}
else
    header('Location:error.html');   
?>
