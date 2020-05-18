<?php
session_start();
include('crud.php');
if (isset($_SESSION['uid']))
{
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

     
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


    
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                   
                    <a href="#" class="navbar-brand" style="font-family:Comic Sans MS;">Elitte Guide</a></br>
					<p style="font-family:Comic Sans MS;"><i>Student's Corner</i></p>
               </div>

               
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll" style="font-family:Comic Sans MS;">Home</a></li>
                       
                         <li><a href="#team" class="smoothScroll" style="font-family:Comic Sans MS;">Notices</a></li>
                        <!--  <li><a href="#about" class="smoothScroll">Suggestion</a></li>-->
                         <li><a href="#courses" class="smoothScroll" style="font-family:Comic Sans MS;">Class Notes</a></li>
                         <li><a href="#testimonial" class="smoothScroll" style="font-family:Comic Sans MS;">Assignment</a></li>
                        <!-- <li><a href="logout.php" >LogOut</a></li>-->
                       <!--  <li><a href="#contact" class="smoothScroll">Class Notes</a></li>-->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li style="font-family:Comic Sans MS;"><a href="#"><i class="fa fa-phone"></i> 033-25956125 / 26 / 9831500840  / 9163316563</a></li>
                         
                        <div class="text-right">
                         <a href="logout.php"><button type="button" class="btn btn-danger" style="font-family:Comic Sans MS;">Log Out</button></a>
                         </div>
                         <!-- <li> <button type="button" alignment="right" class="btn btn-success">Log Out</button></li>-->
                    </ul>
         
               </div>
               
          
          </div>
           <center><H4 style="font-family:algerian;" >Welcome, <?php echo $_SESSION['fname'];
                                                                          echo " ";
                                                                          echo $_SESSION['lname']; ?>
                    </H4></center>
     </section>


     
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                        
						 
						<!--<div class="carousel-inner" style="max-height:430px;">-->
										<div class="item active ">
											<img src="images/003.jpg"  >
										</div>
										<div class="item ">
											<img src="images/014.jpg"  >
										</div>
										<div class="item ">
											<img src="images/016.jpg"  >
										</div>
										<div class="item ">
											<img src="images/018.jpg"  >
										</div>
										<div class="item ">
											<img src="images/019.jpg"  >
										</div>
										<div class="item ">
											<img src="images/023.jpg"  >
										</div>
										<div class="item ">
											<img src="images/026.jpg"  >
										</div>
										<div class="item ">
											<img src="images/027.jpg"  >
										</div>
										<div class="item ">
											<img src="images/032.jpg"  >
										</div>
										<div class="item ">
											<img src="images/033.jpg"  >
										</div>
										<div class="item ">
											<img src="images/034.jpg"  >
										</div>
										  
					<!--</div>-->
				
					
					
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left"></span>
					  <span class="sr-only">Previous</span>
					</a>
					
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right"></span>
					  <span class="sr-only">Next</span>
					</a>
					
				  </div> 
						 
                    </div>
          
     </section>

     
     <section id="team">
          <div class="container">
               <div class="row">
			   <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2 style="font-family:Comic Sans MS;">Recent Notices</h2>
                         </div>
                    </div>
			   <div class="col-md-12 col-sm-12">
						<div class="col-sm-30" style="padding:0px; margin-bottom:0px;  ">
	
		<div class="col-sm-12" >
			<div class="panel panel-primary" >
				<!--<div class="panel-heading">
					<span class="panel-title">Recent Notices</span>
				</div>-->
				<div class="panel-body" style="height:200px; padding:0px; ">
				<marquee direction="up" height="100%"  onMouseMove="stop();" scrollamount="2" onMouseOut="start();" width="100%;" behavior="scroll" style="padding:4px; ">

     <?php
     while($row=mysqli_fetch_array($res))
     {
echo "<p style='border-bottom:1px dashed #aaa; font-weight:600; font-size:12px;'' class='text-justify'>";
echo "<a href='/program/elitte_guide_final_project/admin/upload_notice/".$row['files_path']."' target='_blank' >".$row['notice_name']." </a><br>";
?>
<span style="font-family:Arial,Helvetica, sans-serif; font-size:11px; ">
<?php
 $date=$row['date'];
$date= date('d-m-Y');
 echo "['".$date."'|'"."Notice No= ".$row['notice_no']."']"; ?>
     
</span>
</p>
<?php
}
?>

</p>

</marquee>				</div>
				<div class="panel-footer">
					<a href="allnotice.php" style="font-family:Comic Sans MS;">Show All</a>
				</div>
				
			</div>
		</div>

                   

               </div>
          </div>
     </section>


     
     <?php
$obj=new crud();
$stream=$_SESSION['stream'];
$year=$_SESSION['year'];
$sql="SELECT * FROM classnote where stream ='".$stream."' AND year='".$year."'";
$res = $obj->fetch($sql);

?>
     <section id="courses">
          <div class="container">
               <div class="row">

    

                    <section id="team">
                      <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                         <div class="section-title">
                                               <h2 style="font-family:Comic Sans MS;">Class Notes</h2>
                                         </div>
                                   </div>
                                <div class="col-md-12 col-sm-12">
                                   <div class="col-sm-30" style="padding:0px; margin-bottom:0px;  ">
                                     <div class="col-sm-12" >
                                             <div class="panel panel-primary" >
                                 
                                                  <div class="panel-body" style="height:200px; padding:0px; ">
                                                       <marquee direction="up" height="100%"  onMouseMove="stop();" scrollamount="2" onMouseOut="start();" width="100%;" behavior="scroll" style="padding:4px; ">
                                                            
                <?php
				
                 while($row=mysqli_fetch_array($res))
                 {
                    echo "<p style='border-bottom:1px dashed #aaa; font-weight:600; font-size:12px;'' class='text-justify'>";
echo "<a href='/program/elitte_guide_final_project/admin/upload_classnote/".$row['file_path']."'target='_blank' >".$row['classnote_name']." </a><br>";
                  ?>
                         <span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; ">
<?php  
$date=$row['date'];
$date= date('d-m-Y');
 echo "['".$date."'|' Class Note Number= ".$row['classnote_no']."']"; ?>
     
</span>
</p>
<span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; "></span>                                                     
<?php
}
?></marquee> 
                      
                                                  </div>
                                                       <div class="panel-footer">
                                                            <a href="allclassnote.php" style="font-family:Comic Sans MS;">Show All</a>
                                                       </div>
                                   
                                                  </div>
                                             </div>
                    </section>

                    
    

               </div>
          </div>
     </section>


   

      <?php
$obj=new crud();
$stream=$_SESSION['stream'];
$year=$_SESSION['year'];
$sql="SELECT * FROM assignment where stream ='".$stream."' AND year='".$year."'";
$res = $obj->fetch($sql);
?>
     <section id="testimonial">
          <div class="container">
               <div class="row">

     <section id="team">
          <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2 style="font-family:Comic Sans MS;">Assignment</h2>
                         </div>
                    </div>
                  <div class="col-md-12 col-sm-12">
                              <div class="col-sm-30" style="padding:0px; margin-bottom:0px;  ">
     
          <div class="col-sm-12" >
               <div class="panel panel-primary" >
                    <!--<div class="panel-heading">
                         <span class="panel-title">Recent Notices</span>
                    </div>-->
                    <div class="panel-body" style="height:200px; padding:0px; ">
                    <marquee direction="up" height="100%"  onMouseMove="stop();" scrollamount="2" onMouseOut="start();" width="100%;" behavior="scroll" style="padding:4px; ">

  <?php
                                          while($row=mysqli_fetch_array($res))
                                         {
							echo "<p style='border-bottom:1px dashed #aaa; font-weight:600; font-size:12px;'' class='text-justify'>";				 
                              echo "<B><a href='/program/elitte_guide_final_project/admin/upload_assignment/".$row['file_path']."' target='_blank' >".$row['assignment_name']." </a><br></B>";
                              ?>
                         <span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; ">
                        <?php  
$date=$row['date'];
$date= date('d-m-Y');
 echo "['".$date."'|' Assignment Number= ".$row['assignment_no']."']"; ?>
     
</span>
</p>
<?php
}
?>   
<span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; ">    </span>
</marquee>                    </div>
                    <div class="panel-footer">
                         <a href="allassignment.php" style="font-family:Comic Sans MS;">Show All</a>
                    </div>
                    
               </div>
          </div>
  </section>

                  

               </div>
          </div>
     </section> 


     
    
    <!--<section id="contact">-->
          <div class="container">
               
<div class="col-md-12 col-sm-12">
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2 style="font-family:Comic Sans MS;">We Offered <small style="font-family:Comic Sans MS;">Upgrade your skills with newest courses</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/mechanical.jpg" class="img-responsive" alt="">
                                                  </div> 
                                                  <div class="courses-date">
                                                       <span style="font-family:Comic Sans MS;"><i class="fa fa-calendar"></i> 3 Years</span>
                                                       <!--<span><i class="fa fa-clock-o"></i> 7 Hours</span>-->
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3 style="font-family:Comic Sans MS;"><a href="#">Mechanical Engineering</a></h3>
                                                  
                                             </div>

                                            
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/electrical.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span style="font-family:Comic Sans MS;"><i class="fa fa-calendar"></i> 3 Years</span>
                                                       <!--<span><i class="fa fa-clock-o"></i> 4.5 Hours</span>-->
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3 style="font-family:Comic Sans MS;"><a href="#">Electrical Engineering</a></h3>
                                                 
                                             </div>

                                         
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/civil.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span style="font-family:Comic Sans MS;"><i class="fa fa-calendar"></i> 3 Years</span>
                                                       <!--<span><i class="fa fa-clock-o"></i> 6 Hours</span>-->
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3 style="font-family:Comic Sans MS;"><a href="#" >Civil Engineering</a></h3>
                                                  
                                             </div>

                                             
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/cse.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span style="font-family:Comic Sans MS;" ><i class="fa fa-calendar" ></i> 3 Years</span>
                                                       <!--<span><i class="fa fa-clock-o"></i> 8 Hours</span>-->
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3 style="font-family:Comic Sans MS;"><a href="#">Computer Science and Technology</a></h3>
                                                  
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/ece.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span style="font-family:Comic Sans MS;"><i class="fa fa-calendar"></i> 3 Years</span>
                                                      <!-- <span><i class="fa fa-clock-o"></i> 10 Hours</span>-->
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3 style="font-family:Comic Sans MS;"><a href="#">Electronics and TeleCommunication Engineering</a></h3>
                                                 
                                             </div>

                                        </div>
                                   </div>
                              </div>
                                     
                                     
                                      <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/auto.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span style="font-family:Comic Sans MS;"><i class="fa fa-calendar"></i> 3 Years</span>
                                                      <!-- <span><i class="fa fa-clock-o"></i> 10 Hours</span>-->
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3 style="font-family:Comic Sans MS;"><a href="#">Automobile Engineering</a></h3>
                                                 
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>
</div>
               </div>
          </div>
     </section>          
</div>
</div>
                   
				 
     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 style="font-family:Comic Sans MS;">Campus</h2>
                              </div>
                              <address>
                                   <p style="font-family:Comic Sans MS;">PO: Karnamadhabpur, PS: Ghola, Sodepur, Kolkata - 700113 </p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/elitteinstitute?ref=br_tf" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="https://twitter.com/eiem_2009" class="fa fa-twitter"></a></li>
                                   <!--<li><a href="#" class="fa fa-instagram"></a></li>-->
                              </ul>

                              <div class="copyright-text"> 
                                   <p style="font-family:Comic Sans MS;">Copyright &copy; 2019  Elitte Institute of Engineering & Management. All rights Reserved</p>
                                   
                                   <p style="font-family:Comic Sans MS;">Developed by: Cst 3rd  year(2016-2019) -  Elitte Guide Group</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 style="font-family:Comic Sans MS;">Contact Info</h2>
                           
                              
                                   <p style="font-family:Comic Sans MS;">033-25956125 / 26 / 9831500840  / 9163316563</p>
                                   <p><a href="https://mail.google.com/mail/u/0/#inbox" style="font-family:Comic Sans MS;">elitteguide@gmail.com</a></p>
                              
                                      </div>
                         
                         </div>
                    </div>

                    
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
<?php } 
else 
header('Location:error.html');
?>