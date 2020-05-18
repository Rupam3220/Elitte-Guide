<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{
$obj =new crud();
$obj->del("DELETE FROM notice WHERE id='".$_GET['id']."'");
echo "Data Deleted Sucessfully" ;                   
}
else
    header('Location:error.html');   
?>