<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{
$obj=new crud();
$sql= "select * from user where status='0'";
$res=$obj->fetch($sql);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Elitte Guide</title>
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
   
    <link rel="stylesheet" href="css/fontawesome.min.css">
    
    <link rel="stylesheet" href="css/fullcalendar.min.css">
 
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand"  style="font-family:Comic Sans MS;" href="index.php">
                           
                            <h1 class="tm-site-title mb-0">Elitte Guide</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" style="font-family:Comic Sans MS;" href="index.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" style="font-family:Comic Sans MS;" href="notice.php">Notice</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" style="font-family:Comic Sans MS;" href="classnote.php">Class Note</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" style="font-family:Comic Sans MS;" href="assignment.php">Assignment</a>
                                </li>



                                <li class="nav-item">
                                    <a class="nav-link" style="font-family:Comic Sans MS;" href="viewUser.php">View User</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" style="font-family:Comic Sans MS;" href="updateuser.php">Update User</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" style="font-family:Comic Sans MS;" href="aregister.php">Add New Admin</a>
                                </li>
                             
                            </ul>
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
                    <div class="bg-white tm-block">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block" style="font-family:Comic Sans MS;">New Users Request</h2>
                                    

                                    </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-4">
                                <thead>
                                    <tr class="tm-bg-gray">
                                        
                                         <th scope="col" style="font-family:Comic Sans MS;">Id</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">First Name</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Last Name</th>
                                        <th scope="col"  style="font-family:Comic Sans MS;" class="text-center">Email</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Phone No</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">ROLL</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">STREAM</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">YEAR</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">STATUS</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">ACTION</th>

                                        
                                    </tr>
                                </thead>
                                <tr class="tm-bg-gray">
                                
                              <tbody>
                                    <tr>
                                      
                                       <?php 
                                        while ($row = mysqli_fetch_array($res))
                                            {
                                                ?>
                                        

                                        <td class="text-center"><?php echo $row['id']; ?></td>
                                        <td class="text-center"><?php echo $row['fname']; ?></td>
                                        <td class="text-center"><?php echo $row['lname']; ?></td>
                                        <td class="text-center"><?php echo $row['email']; ?></td>
                                        <td class="text-center"><?php echo $row['mobile']; ?></td>
                                        <td class="text-center"><?php echo $row['roll']; ?></td>
                                        <td class="text-center"><?php echo $row['stream']; ?></td>
                                        <td class="text-center"><?php echo $row['year']; ?></td>
                                         <td class="text-center"><?php echo $row['status']; ?></td>
                                        <TD><A style="font-family:Comic Sans MS;" href="activenewuser.php?id=<?php echo $row['id'];?>"><i class="fas fa-user-check"></i></A>|
                                        <a style="font-family:Comic Sans MS;" href="deletenewuser.php?id=<?php echo $row['id'];?>"><i class="fas fa-trash-alt"></i></a></TD>
                                       

                                    </tr>
                                      <?php } ?>  
                            </table>

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
           
    <script src="js/moment.min.js"></script>
    
    <script src="js/utils.js"></script>
    <script src="js/Chart.min.js"></script>
   
    <script src="js/fullcalendar.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/tooplate-scripts.js"></script>
  
</body>
</html>
<?php 
}
else
header('Location:error.html');
 ?>