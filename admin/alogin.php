<?php
session_start();
include('crud.php');
if (isset($_REQUEST['add']))
{
$obj = new crud();
$sql="SELECT username,password FROM admin WHERE username ='".$_POST['uname']."' AND password='".$_POST['password']."'";
$res=$obj->fetch($sql);
if($row=mysqli_fetch_array($res))
{
 $_SESSION['uid']=$_POST['uname'];
 header("Location:index.php");
}
else 
header("Location:error.html");
}
?>