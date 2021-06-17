<?php
session_start();
require_once "config.php";
include("functions.php");
$pro_id= get_safe_value($conn,$_GET['pro_id']);



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
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="products.php" class="nav-item nav-link">Products</a>
                    <a href="team.html" class="nav-item nav-link">Trainer</a>
                    <a href="portfolio.html" class="nav-item nav-link">Pose</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="signin.php" class="nav-item nav-link">Sign in</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


       <!-- Page Header Start -->
       <div style="background:#000" class="page-header">
            <div   class="container">
                <div class="row">
                    <div  class="col-12">
                        <h2 style="color:#fff;">Products</h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Single Post Start-->
        <div class="single">
            
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-lg-8">
                        
                    <?php
                        $query = "SELECT * FROM tbl_product where pro_id ='$pro_id'";
                        $query_run = mysqli_query($conn, $query);
                            ?>
                        <div class="class-wrap">
                    <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                        
                        <div class="single-content wow fadeInUp">
                            
                        <img src="../admin/uploads/<?php echo $row['image1']; ?>"  alt="image">
                        
                            <h2><?php  echo $row['pro_name']; ?></h2>
                            <p> <h4>Type</h4>
                            <?php  echo $row['pro_type']; ?>
                            </p>
                           
                            <h3>Price</h3>
                            <p>$
                            <?php  echo $row['Price']; ?>
                            </p>
                          
                            <h4>Description</h4>
                            <p>
                            <?php  echo $row['description']; ?>
                            </p>
                   
                           
                        </div>
                                                  
        
                        <div class="col-lg-4">
                        <div class="sidebar">

                        <form method="POST" action="submit.php">
                           <script  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                           data-key="<?php echo $publishableKey ?>"
                           data-amount="<?php echo $row['Price']*100; ?>"
                           data-name="<?php echo $row['pro_name']; ?>"
                           data-description="Please provide details to download"
                           data-currency="USD"
                           
                           >
                           
                            </script>
                    </form>
                            
                            <?php 
                            } 
                        }
                        else {
                            echo "No Products Found";
                        }
                        ?>
                        </div>
                        </div>
                    

                        <div class="single-related wow fadeInUp">
                          
                            <div class="owl-carousel related-slider">
                                <div class="post-item">
                               
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="img/post-2.jpg" />
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="img/post-3.jpg" />
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="img/post-4.jpg" />
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Design</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-comment wow fadeInUp">
                            <h2>3 Comments</h2>
                            <ul class="comment-list">
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="img/user.jpg" />
                                        </div>
                                        <div class="comment-text">
                                            <h3><a href="">Josh Dunn</a></h3>
                                            <span>01 Jan 2045 at 12:00pm</span>
                                            <p>
                                                Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                                            </p>
                                            <a class="btn" href="">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="img/user.jpg" />
                                        </div>
                                        <div class="comment-text">
                                            <h3><a href="">Josh Dunn</a></h3>
                                            <p><span>01 Jan 2045 at 12:00pm</span></p>
                                            <p>
                                                Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                                            </p>
                                            <a class="btn" href="">Reply</a>
                                        </div>
                                    </div>
                                    <ul class="comment-child">
                                        <li class="comment-item">
                                            <div class="comment-body">
                                                <div class="comment-img">
                                                    <img src="img/user.jpg" />
                                                </div>
                                                <div class="comment-text">
                                                    <h3><a href="">Josh Dunn</a></h3>
                                                    <p><span>01 Jan 2045 at 12:00pm</span></p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                                                    </p>
                                                    <a class="btn" href="">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-form wow fadeInUp">
                            <h2>Leave a comment</h2>
                            <form>
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>

                  
                </div>
                            

            </div>
        </div>
        <!-- Single Post End-->   


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
