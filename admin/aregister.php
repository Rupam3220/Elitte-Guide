<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{
if (isset($_REQUEST['add']))
{
$obj = new crud();
$sql = "INSERT INTO admin(username,password)
        values ('".$_POST['uname']."',
				'".$_POST['pass']."')";
        
        if($obj -> insert($sql))
		{
	    header("Location:login.html");
		}
        else
        header('Location:aregister.php');
		
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Signup - Elitte Guide</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
   
    <link rel="stylesheet" href="css/fontawesome.min.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                           
                            <h2 class="tm-block-title mt-3" style="font-family:Comic Sans MS;">Register New Admin</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form action="aregister.php" method="post" class="tm-login-form">
                                <div class="input-group">
                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label" style="font-family:Comic Sans MS;">Username</label>
                                    <input name="uname" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="username"  required>
                                </div>
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label" style="font-family:Comic Sans MS;">Password</label>
                                    <input name="pass" type="password" class="form-control validate" id="password"  required>
                                </div>
                                <div class="input-group mt-3">
                                    <button type="submit" name = "add" class="btn btn-primary d-inline-block mx-auto" style="font-family:Comic Sans MS;">Register</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light text-center">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2019 Elitte Institute of Engineering and Management . Created by CST 3rd year Elitte Guide Group
                    
                </p>
            </div>
        </footer>
    </div>
</body>

</html>
<?php
}
else
    header('Location:error.html');   
?>