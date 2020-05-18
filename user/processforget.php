<?php
session_start();
include('crud.php');
if (isset($_REQUEST['add']))
{
$obj = new crud();
$sql="SELECT email,password,security_qns,security_ans FROM user WHERE email='".$_SESSION['email']."' AND security_ans='".$_POST['ans']."'";
$res=$obj->fetch($sql);
if($row=mysqli_fetch_array($res))
{
header('Location:updatepass.php');
}
else
header('Location:error.html');
}
?>



