<?php
include('crud.php');
$obj=new crud();
$sql="SELECT * FROM notice";
$res = $obj->fetch($sql);
?>
 <!DOCTYPE html>
<html lang="en">
<head>

     <title>Elitte Guide - Student Corner</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="images/e.jpg" class="navbar-brand">Elitte Guide</a></br>
					<p><i>Student's Corner</i></p>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="mainpage.php" class="smoothScroll"><strong>Home</strong></a></li>
                       
                        <!-- <li><a href="#team" class="smoothScroll">Notices</a></li>
                    <li><a href="#about" class="smoothScroll">Suggestion</a></li>
                         <li><a href="#courses" class="smoothScroll">Class Notes</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Assignment</a></li>
                 <li><a href="logout.php" >LogOut</a></li>-->
                       <!--  <li><a href="#contact" class="smoothScroll">Class Notes</a></li>-->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> 033-25956125 / 26 / 9831500840  / 9163316563</a></li>
                         
                        <div class="text-right">
                         <a href="logout.php"><button type="button" class="btn btn-danger">Log Out</button></a>
                         </div>
                         <!-- <li> <button type="button" alignment="right" class="btn btn-success">Log Out</button></li>-->
                    </ul>

               </div>
               
    
          </div>
     </section>


     <!-- HOME -->
     <!--<div class="col-sm-12 content">-->
		
				<div class="col-sm-20">
	<div class="panel">
		<div class="panel-heading">
			<div class="panel-title" style="border-bottom:1px solid #ccc; ">
				<span class="page-title">All Notices</span>
			</div>
			<div class="panel-body" style="min-height:920px; max-height:920px; overflow-y:scroll;">
				<div class="col-sm-20">
<table class="table table-striped">
	<tr>
		<td><strong>Id</strong></td>
		<td><strong>Notice Name</strong></td>
		<td><strong>Description</strong></td>	
		<td><strong>Notice Number</strong></td>	
		<td><strong>Posted on</strong></td>	
		<td><strong>View</strong></td>	
	</tr>
	<?php
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['notice_name'] ?></td>
<td><?php echo $row['description'] ?></td>
<td><?php echo $row['notice_no'] ?></td>
<td><?php echo $row['date'] ?></td>
<td><?php echo "<a href='/program/elitte_guide_final_project/admin/upload_notice/".$row['files_path']."' target='_blank' >click</a>"; ?></td>
</tr>
<?php
}
?>

	

</table>
</div>			</div>
		</div>
	
	</div>





			
</div>


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Campus</h2>
                              </div>
                              <address>
                                   <p>PO: Karnamadhabpur, PS: Ghola, Sodepur, Kolkata - 700113 </p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/elitteinstitute?ref=br_tf" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="https://twitter.com/eiem_2009" class="fa fa-twitter"></a></li>
                                   <!--<li><a href="#" class="fa fa-instagram"></a></li>-->
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2019  Elitte Institute of Engineering & Management. All rights Reserved</p>
                                   
                                   <p>Developed by: Cst 3rd  year(2016-2019) -  Elitte Guide Group</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                           
                              
                                   <p>033-25956125 / 26 / 9831500840  / 9163316563</p>
                                   <p><a href="https://mail.google.com/mail/u/0/#inbox">elitteguide@gmail.com</a></p>
                              
                                      </div>
                              <!--<div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                   </ul>
                              </div>-->
                         </div>
                    </div>

                    <!--<div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>-->
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
</body>
</html>
