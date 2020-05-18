<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{
    if(!isset($_REQUEST['search']))
    {
    $obj = new crud();
    $sql= "select * from notice";
    $res= $obj->fetch($sql);
    }
    else
    {
        if (isset($_REQUEST['search']))
        {
        $obj=new crud();
        $sql= "select * from notice where notice_no='".$_POST['notice_no']."'order by date desc";
        $res=$obj->fetch($sql);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notice - Elitte Guide</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
   <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/tooplate.css">
</head>
<body id="reportsPage" class="bg02">
    <div class="" id="home">
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
                                    <a class="nav-link" style="font-family:Comic Sans MS;" href="index.php">Home
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
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block" style="font-family:Comic Sans MS;">Notices</h2>
                                <form action=notice.php method="post">
                                  <label for="category"><input type="text" name="notice_no" placeholder="Notice Number" style="font-family:Comic Sans MS;" required></label>
                                   <button type="submit"  name= "search"><i class="fas fa-search"></i></button>
                                  
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="addNotice.php" style="font-family:Comic Sans MS;" class="btn btn-small btn-primary">Add Notice</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-4">
                                <thead>
                                    <tr class="tm-bg-gray">
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col" style="font-family:Comic Sans MS;">ID</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Notice Name</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Description</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Date And Time</th>
                                        <th scope="col"  style="font-family:Comic Sans MS;" class="text-center">Notice Number</th>
                                      <!--   <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Stream</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Year</th> -->
                                        <th scope="col" style="font-family:Comic Sans MS;">Notice</th>
                                         <th scope="col" style="font-family:Comic Sans MS;">Action</th>
										
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tr class="tm-bg-gray">
                                
                              <tbody>
                                    <tr>
                                       
                                        <?php 
                                        while ($row = mysqli_fetch_array($res))
                                            {
                                                $date=$row['date'];
                                                $date= date('d-m-Y');
                                                ?>

                                        <td></td>
                                        <td class="tm-product-name"><?php echo $row['id']; ?></td>
                                        <td class="text-center"><?php echo $row['notice_name']; ?></td>
                                        <td class="text-center"><?php echo $row['description']; ?></td>
                                        <td class="text-center"><?php echo $date; ?></td>
                                        <td class="text-center"><?php echo $row['notice_no']; ?></td>
                                        <!-- <td class="text-center"><?php// echo $row['stream']; ?></td>
                                        <td class="text-center"><?php// echo $row['year']; ?></td> -->
                                        <td class="text-center"><?php echo $row['files_path']; ?></td>
                                        <td><A style="font-family:Comic Sans MS;" href="updatenotice.php?id=<?php echo $row['id'];?>"><i class="fas fa-edit"></i></a>|<A href="deletenotice.php?id=<?php echo $row['id'];?>" i class="fas fa-trash-alt tm-trash-icon"></i></td>      
                                <td></td>
                                    </tr>
                                <?php } ?>

                                </tr>
                            </table>
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
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
<script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>

</html>
<?php 
}
else    
    header('Location:error.html');
?>

