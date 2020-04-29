<?php
                    $connect=mysqli_connect('localhost','root','','restaurants');
					$query="select * from admin";
					$result=mysqli_query($connect,$query);


                    
                if(isset($_POST['submit'])){
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_array($result)){
                                //echo $row['e_id'];
                                //echo $row['e_password'];
                                if($row['e_id']==$_POST['eid'] && $row['e_password']==$_POST['epassword']){
                                    include('adminpage.php');
                                }
                            }
                        }
                    }
                }
                
?>


<html>
    <head>
        <title>This is title page</title>
          <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
    
    </head>
    <body>
                             <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

                                               <div class="navbar-header">
                                                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                         <span class="icon icon-bar"></span>
                                                         <span class="icon icon-bar"></span>
                                                         <span class="icon icon-bar"></span>
                                                    </button>

                                                    <!-- lOGO TEXT HERE -->
                                                    <a href="" class="navbar-brand">Eat <span>&</span> Cook</a>
                                               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">ABOUT</a></li>
                         <li><a href="#menu" class="smoothScroll">Menu</a>
                                    <!--<ul style="list-style: none; margin: 0px; padding: 0px;">
                                    <li><a href="#" class="smoothScroll">ADD ITEM</a></li>
                                    <li><a  href="#" class="smoothScroll">EDIT ITEM</a></li>
                                    <li><a  href="#" class="smoothScroll">DELETE ITEM</a></li>
                                    <li><a  href="#menu" class="smoothScroll">SHOW MENU</a></li>
                                    
                                </ul>-->
                        
                        </li>
                         <!--<li style=""><a href="#employee" class="smoothScroll">Employee</a>
                         <li style=""><a href="#customer" class="smoothScroll">Customer</a>
                                <!--<ul style="list-style: none; margin: 0px; padding: 0px;">
                                    <li><a href="#" class="smoothScroll">Manager</a></li>
                                    <li><a  href="#" class="smoothScroll">Accountant</a></li>
                                    <li><a  href="#" class="smoothScroll">Waiter</a></li>
                                    <li><a  href="#" class="smoothScroll">Cleaner</a></li>
                                    <li><a  href="#team" class="smoothScroll">Cheff</a></li>
                                    <li><a  href="#" class="smoothScroll">Delivery Man</a></li>
                                </ul>
                        
                        </li>
                        
                         
                        
                        
                        
                         <li><a href="#" class="smoothScroll">USER</a></li>-->
                         <li><a href="register.php" class="smoothScroll">ORDER</a></li>
                         
                        <li><a  href="#team" class="smoothScroll">Cheff</a></li>
                        <li><a  href="#team" class="smoothScroll">Training</a></li>
                        <li><a href="#contact" class="smoothScroll">Contact</a></li>
                        <li><a href="admin.php" class="smoothScroll">Admin</a></li>
                        
                    </ul>

                                    <!--<ul class="nav navbar-nav navbar-right">
                                         <li><a href="#">Call Now! <i class="fa fa-phone"></i> 010 020 0340</a></li>
                                         <a href="#footer" class="section-btn">Reserve a table</a>
                                    </ul>-->
               </div>

          </div>
     </section>
    
    </body>
    

</html>