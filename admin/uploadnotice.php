<?php
session_start();
include ('crud.php');
if ($_FILES['notice']['name']!="")
{
move_uploaded_file($_FILES['notice']['tmp_name'],"upload_notice/".$_FILES['notice']['name']);
//echo "fieckjcjbzj,";
}
else
{
echo "error";
}
$path=$_FILES['notice']['name'];
$obj = new crud();
$sql= "insert into notice(notice_name,description,notice_no,files_path)
	   values ('".$_POST['name']."','"
				.$_POST['des']."','"
				.$_POST['notice_no']."','"
				//.$_POST['stream']."','"
				//.$_POST['year']."','"
				.$path."')";
				
				
		if($obj -> insert($sql))
		{
	    header("Location:notice.php");
		//echo " sgdn";
		}
        else
		
        header('Location:addNotice.php');
		//echo "error";
		
?>