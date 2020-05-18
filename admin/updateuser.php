<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{
if(isset($_REQUEST['fs']))
{
    $obj=new crud();
    $sql="UPDATE user SET year='Second Year' WHERE year='First Year'";
    $res=$obj->update($sql);
    
}
if(isset($_REQUEST['st']))
{
    $obj=new crud();
    $sql="UPDATE user SET year='Third Year' WHERE year='Second Year'";
    $res=$obj->update($sql);

}
if(isset($_REQUEST['tp']))
{
    $obj=new crud();
    $sql="UPDATE user SET year='Passedout' WHERE year='Third Year'";
    $res=$obj->update($sql);
}    
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User - Elitte Guide</title>
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    
    <link rel="stylesheet" href="css/fontawesome.min.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
    <link rel="stylesheet" href="css/tooplate.css">
</head>


<body class="bg03">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">
                     
                        <h1 class="tm-site-title mb-0" style="font-family:Comic Sans MS;">Elitte Guide</h1>
                    </a>
                    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php" style="font-family:Comic Sans MS;">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="login.html">
                                    <i class="far fa-user mr-2 tm-logout-icon"></i>
                                    <span style="font-family:Comic Sans MS;">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>     
            </div>
        </div>
        
  

            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col-30">
                    <div class="bg-white tm-block">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" align="center">
                               <h2 class="tm-block-title d-inline-block" style="font-family:Comic Sans MS;">Update Users Year</h2>
                                
                                <form action=updateuser.php method="post">
                                   <h2 class="btn btn-primary" style="font-family:Comic Sans MS;" >First Year</h2><SPAN style='font-size: 50px;'>&#8594;</SPAN><h2 style="font-family:Comic Sans MS;" class="btn btn-primary">Second Year</h2>
                                   <h2><input type="submit"  onclick="myFunction()" name="fs" class="btn btn-primary" style="background-color: #555555; color: white; font-family:Comic Sans MS;" value="Update"></h2>
                                   </form><hr>
                                
                                <form action=updateuser.php method="post">
                                   <h2 class="btn btn-primary" style="font-family:Comic Sans MS;" >Second Year</h2><SPAN style='font-size: 50px;'>&#8594;</SPAN><h2 style="font-family:Comic Sans MS;" class="btn btn-primary">Third Year</h2>
                                   <h2><input type="submit"  onclick="myFunction()" name="st" class="btn btn-primary" style="background-color: #555555; color: white; font-family:Comic Sans MS;" value="Update"></h2>
                                   </form><hr>
                                
                                <form action=updateuser.php method="post">
                                   <h2 class="btn btn-primary" style="font-family:Comic Sans MS;">Third Year</h2><SPAN style='font-size: 50px;'>&#8594;</SPAN><h2 style="font-family:Comic Sans MS;" class="btn btn-primary">Passed Out</h2>
                                   <h2><input type="submit" onclick="myFunction()" name="tp" class="btn btn-primary" style="background-color: #555555; color: white; font-family:Comic Sans MS;" value="Update"></h2>
                                   </form>


                                    </div>
                        </div>
                         </div>

</div>        
                        <footer class="row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2019 Elitte Institute of Engineering and Management . Created by CST 3rd year Elitte Guide Group
                   
                </p>
            </div>
        </footer>
    </div>
    <script>
    function myFunction() {
    alert("Are you sure, you want to update?");
    }
    </script>


    <script>
    function myFunction2() {
    alert("Are you sure, you want to update?");
    }
    </script>


    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</body>

</html>
<?php
}
else
header('Location:error.html');
?>
