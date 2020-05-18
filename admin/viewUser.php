<?php
session_start();
include('crud.php');
if(isset($_SESSION['uid']))
{
    if(!isset($_REQUEST['search']))
    {
    $obj = new crud();
    $sql= "select * from user";
    $res= $obj->fetch($sql);
    }
    else
    {
        if (isset($_REQUEST['search']))
        {
        $obj=new crud();
        $sql= "select * from user where stream='".$_POST['stream']."'and year='".$_POST['year']."'";
        $res=$obj->fetch($sql);
        }
    }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Data - Elitte Guide</title>
   
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
                                    <span  style="font-family:Comic Sans MS;">Logout</span>
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
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block" style="font-family:Comic Sans MS;">Users</h2>
                                    <form action=viewUser.php method="post">
                                    <select class="custom-select col-xl-6 col-lg-8 col-md-8 col-sm-7" id="category" 
                                    name = "stream" style="font-family:Comic Sans MS;" required>
                                       <option value="">Select Stream</option>
                                       <option value="Mechanical Engineering">Mechanical Engineering</option>
                                       <option value="Electrical Engineering">Electrical Engineering</option>
                                       <option value="Civil Engineering">Civil Engineering</option>
                                       <option value="Computer Science Engineering">Computer Science Engineering</option>
                                        <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                                        <option value="Automobile Engineering">Automobile Engineering</option>
                                       
                                    </select>
                           
                             <select class="custom-select col-xl-2 col-lg-8 col-md-8 col-sm-7" id="category" name = "year" style="font-family:Comic Sans MS;">
                                        <option value="">Select Year</option>
                                        <option value="First Year">First Year</option>
                                        <option value="Second Year">Second Year</option>
                                        <option value="Third Year">Third Year</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary" name= "search"><i class="fas fa-search"></i></button>
                                   
                                </form>

                                    </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-4">
                                <thead>
                                    <tr class="tm-bg-gray">
                                        <!--<th scope="col">&nbsp;</th>-->
                                         <th scope="col" style="font-family:Comic Sans MS;">Id</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">First Name</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Last Name</th>
                                        <th scope="col"  style="font-family:Comic Sans MS;" class="text-center">Email</th>
                                        <th scope="col"  style="font-family:Comic Sans MS;" class="text-center">Phone No</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">ROLL</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">STREAM</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">YEAR</th>
                                      
                                         <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Block Status</th>
                                        <th scope="col" style="font-family:Comic Sans MS;" class="text-center">Block/Unblock</th>
                                       
                                        
                                    </tr>
                                </thead>
                                <tr class="tm-bg-gray">
                                
                              <tbody>
                                    <tr>
                                      
                                       <?php 
                                        while ($row = mysqli_fetch_array($res))
                                            {
                                                ?>
                                        

                                        <td class="tm-product-name"><?php echo $row['id']; ?></td>
                                        <td class="text-center"><?php echo $row['fname']; ?></td>
                                        <td class="text-center"><?php echo $row['lname']; ?></td>
                                        <td class="text-center"><?php echo $row['email']; ?></td>
                                        <td class="text-center"><?php echo $row['mobile']; ?></td>
                                        <td class="text-center"><?php echo $row['roll']; ?></td>
                                        <td class="text-center"><?php echo $row['stream']; ?></td>
                                        <td class="text-center"><?php echo $row['year']; ?></td>
                                      
                                         <td class="text-center"><?php echo $row['block']; ?></td>
                                         <TD><A style="font-family:Comic Sans MS;" href="block.php?id=<?php echo $row['id'];?>"><i class="fas fa-user-times"></i></A>|
                                        <a style="font-family:Comic Sans MS;" href="unblock.php?id=<?php echo $row['id'];?>"><i class="fas fa-user-check"></i></a></TD>
                                      

                                    </tr>
                                      <?php } ?>  
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

    <script src="js/jquery-3.3.1.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   
</body>

</html>
<?php
}
else
    header('Location:error.html');
?>