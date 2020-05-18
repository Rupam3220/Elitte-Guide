<?php
session_start();
include('crud.php');
if ($_FILES['assignment']['name']!="")
{
move_uploaded_file($_FILES['assignment']['tmp_name'],"upload_assignment/".$_FILES['assignment']['name']);

}
else
{
echo "error";
}
$path=$_FILES['assignment']['name'];
$obj = new crud();
$sql= "insert into assignment(assignment_name,description,date,assignment_no,stream,year,file_path)
	   values ('".$_POST['name']."','"
				.$_POST['des']."','"
				.$_POST['date']."','"
				.$_POST['notice_no']."','"
				.$_POST['stream']."','"
				.$_POST['year']."','"
				.$path."')";
				
				
		if($obj -> insert($sql))
		{
	    header("Location:assignment.php");
		
		}
        else
		
        header('Location:addassignment.php');
		

?>