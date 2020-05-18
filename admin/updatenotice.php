<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{
$obj=new crud();
$res=$obj->fetch("SELECT * FROM notice WHERE id=".$_GET['id']);
$row=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Notice - Elitte Guide</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
  
    <link rel="stylesheet" href="css/fontawesome.min.css">
   
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" style="font-family:Comic Sans MS;" href="index.php">
                       
                        <h1 class="tm-site-title mb-0">Elitte Guide</h1>
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
        <!-- row -->
        <div class="row tm-mt-big">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block" style="font-family:Comic Sans MS;">Add Notice</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="uploadnotice.php" class="tm-edit-product-form" method="post" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    <label for="name" style="font-family:Comic Sans MS;" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Notice Name
                                    </label>
                                    <input id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="<?php echo $row['notice_name'];?>" required>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="description" style="font-family:Comic Sans MS;" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                    <textarea class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" name= "des"rows="3" required><?php echo $row['description'];?></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="category" style="font-family:Comic Sans MS;" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">NOTICE NUMBER</label>
                                   <input type= "text" name="notice_no" value="<?php echo $row['notice_no'];?>" required>
									
                                </div>
								
                                
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" name="add" class="btn btn-primary" style="font-family:Comic Sans MS;">Add
                                        </button>
                                    </div>
									
                                </div>
                          
                        </div>
                       <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
                        <div >
                                <object data="upload_notice/<?php echo $row['files_path'];?>"></object> 
                            </div>


                            <div class="custom-file mt-3 mb-3" style="font-family:Comic Sans MS;">
                               
							   <input type='file'  name='notice' value="<?php echo $_FILES["notice"]["name"];?>" required>
                              
                            </div>
                        </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2019 Elitte Institute of Engineering and Management . Created by CST 3rd year Elitte Guide Group
                   
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>
<?php
}
else
header('Location:error.html');
?>