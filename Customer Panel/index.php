<?php
require_once('config.php');
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  
    header("location: dashboard.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STARCT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Software Developement" name="keywords">
    <meta content="Software developement Company" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/fonts/flaticon.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

   <style> 
   .navbar.nav-sticky {
        padding: 10px 60px;
        background: #000 !important;
    }

    @media (max-width: 991.98px) {
    .navbar {
        padding: 15px;
        background: #000 !important;
    }
    .navbar .navbar-brand span {
        color: #ffffff;
    }
    .navbar a.nav-link {
        padding: 5px;
    }
    .navbar .dropdown-menu {
        box-shadow: none;
    }

}
.footer .container-fluid {
    padding: 90px 0 0 0;
    background: linear-gradient(rgba(52, 49, 72, .9), rgba(52, 49, 72, .9)), url(../img/photo-1553877522-43269d4ea984.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
}
.section-header p::after {
    position: absolute;
    content: "";
    height: 2px;
    top: 11px;
    right: -30px;
    left: -30px;
    background: #000;
    z-index: -1;
}
</style> 
</head>

<body>
    <!-- Top Bar Start -->
    <div style="background-color:#000" class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div   style="font-family:Poppins"  class="text">
                            <i class="far fa-clock"></i>
                            <h2>8:00 - 9:00</h2>
                            <p>Mon - Fri</p>
                        </div>
                        <div   style="font-family:Poppins" class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>+123 456 7890</h2>
                            <p>For Appointment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg  navbar-dark">
        <div  class="container-fluid">
            <a style="font-family: 'Sui Generis';  font-size: 30px"  class="navbar-brand">STARCT</a>
            <button   type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div  style="font-family:Poppins; " class="navbar-nav ml-auto">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Service</a>
                    <a href="products.php" class="nav-item nav-link">Products</a>
                    <a href="cart.php" class="nav-item nav-link">Cart</a>
                    <a href="portfolio.html" class="nav-item nav-link">Pose</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                        <div class="dropdown-menu">
                            <a href="signin.php" style="color: #000;" class="nav-item nav-link">Sign in</a>
                        
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    <div style="background: #fff; font-family: Poppins" class="hero">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-text">
                        <h1 style="color: #000;">We create spectacular digital solutions</h1>
                        <p style="color: #000">
                           STARCT is a software developement company building modern softwares for small-to medium-sized businesses and startups.
                        </p>
                        <div class="hero-btn">
                            <a href="signup.php" style="background:#000; color:#fff" class="btn" href="">Get Started</a>
                            

                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img   src="img/landingcover2.jpg" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="img/who.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>Learn About Us</p>
                        <h2>Who We Are</h2>
                    </div>
                    <div class="about-text">
                        <p>
                        We’re a different school of fish.
                        </p>
                        <p>
                        Starct Team is a uniquely talented group of IT professionals with the ability to dive deep for the enduring digital solutions you need. Our strength lies in the cognitive diversity of our team and the productive, long-term relationships we create with
                            our clients. <br><br> We can help if you’ve been fishing for a software development partner able to build elegant, scalable solutions to meet your specific application needs. <br>
                        </p>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
  
                       
    <div class="service">
        <div class="container">
      
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What we do</p>
                <h2>We build on our ocean of expertise</h2> </div>  
               
            <div class="row">
            <?php
                $query = "SELECT * FROM tbl_category";
                $query_run = mysqli_query($conn, $query);
                       ?>   
                <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item">
                   
                            <i class="flaticon-045-coding-1"></i>
                           <br>
                 <br>
                        <h3><?php  echo $row['cat_name']; ?></h3>
                        <p>
                        <?php  echo $row['description']; ?>
                        </p>
                    </div>
                </div>
                <?php 
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
            </div>
          
        </div>
     
    </div>
 
    <!-- Service End -->


    <!-- Class Start -->
    <div class="class">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Our Products</p>
                <h2>
                            Our Expertise
                                                </h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="class-filter">
                        <li style="background:#000; color:#fff" data-filter="*" class="filter-active">All Products</li>
                  
                    </ul>
                </div>
            </div>

         

            <div class="row class-container">
            <?php
                        $query = "SELECT * FROM tbl_product";
                        $query_run = mysqli_query($conn, $query);
                            ?>
                        <div class="class-wrap">
                    <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp " data-wow-delay="0.0s">
                        <div class="class-img">
                        <img src="../admin/uploads/<?php echo $row['image1']; ?>" width="100px;" height="100px;" alt="image">
                        </div>
                        <div class="class-text">
                            <div class="class-teacher">
                              
                                <h3>Click to see more</h3>
                                <a href="productdetail.php?pro_id=<?php echo $row['pro_id']?>">+</a>
                            </div>
                            <h2><?php  echo $row['pro_name']; ?></h2>
                            <div class="class-meta">
                                <p><?php  echo $row['pro_type']; ?></p>
                                <p><?php  echo $row['description']; ?></p>
                            </div>
                        </div>
                      
                    </div>
                   
                </div>
                <?php 
                            } 
                        }
                        else {
                            echo "No Products Found";
                        }
                        ?>
            </div>
        </div>
    </div>
    <!-- Class End -->



  

    <?php
     $query = "SELECT * FROM contactpage ";
     $res = mysqli_query($conn, $query);
     foreach($res as $row){
      ?> 
 
    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div style="background: #000;" class="container-fluid">
                <div class="container">
                    <div  class="footer-info">
                        <a href="index.html"  style=" color:#fff; font-family:Sui Generis" class="footer-logo">STARCT</a>
                        <h3><?php echo $row['location']; ?></h3>
                        <div class="footer-menu">
                            <p><?php echo $row['phone']; ?></p>
                            <p><?php echo $row['email']; ?></p>
                        </div>
                        <?php   } ?>  
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p >&copy; <a  style="font-family:Sui Generis" href="#">STARCT</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a style="font-family:Sui Generis">STARCT</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>