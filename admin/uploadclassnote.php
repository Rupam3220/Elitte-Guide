<?php
session_start();
include ('crud.php');
if ($_FILES['classnote']['name']!="")
{
move_uploaded_file($_FILES['classnote']['tmp_name'],"upload_classnote/".$_FILES['classnote']['name']);

}
else
{
echo "error";
}
$path=$_FILES['classnote']['name'];
$obj = new crud();
$sql= "insert into classnote(classnote_name,description,date,classnote_no,stream,year,file_path)
	   values ('".$_POST['name']."','"
				.$_POST['des']."','"
				.$_POST['date']."','"
				.$_POST['classnote_no']."','"
				.$_POST['stream']."','"
				.$_POST['year']."','"
				.$path."')";
				
				
		if($obj -> insert($sql))
		{
	    header("Location:classnote.php");
	
		}
        else
		
        header('Location:addclassnote.php');
	
		
?>