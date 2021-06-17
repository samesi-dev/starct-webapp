<?php
session_start();
require_once "config.php";
include("functions.php");
$pro_id= get_safe_value($conn,$_GET['pro_id']);


if(isset($_POST['Make-Payment']))
{
    $owner_name = $_POST['owner_name'];
    $Cvc = $_POST['Cvc'];
    $credit_card_no= luhn_check($_GET['credit_card_no']);
    $credit_card_no = $_POST['credit_card_no'];
    $card_expiration_date = $_POST['card_expiration_date'];
    $pro_id = $_POST['pro_id'];
    $client_id= $_SESSION['id'];


   
    {
      
            
        $query = "INSERT INTO tbl_order_payment
        (owner_name,Cvc,credit_card_no,card_expiration_date,pro_id,client_id)
         VALUES ('$owner_name','$Cvc','$credit_card_no','$card_expiration_date','$pro_id','$client_id')";
                $query_run = mysqli_query($conn, $query);
             if ($query_run)
              {
             // echo "Saved";
             $_SESSION['status'] = "Successfully submitted";
             $_SESSION['status_code'] = "success";
             header('Location: download.php');  
            }
        
             else 
            {
            $_SESSION['status2'] = "Not Inserted!";
            $_SESSION['status_code'] = "error";
          
            }
    }
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
.page-header {
    position: relative;
    margin-bottom: 45px;
    padding: 150px 0 90px 0;
    text-align: center;
    background: #000;
}
.page-header h2 {
    position: relative;
    color: #fff;
    font-size: 60px;
    font-weight: 700;
}

.page-header a {
    position: relative;
    padding: 0 12px;
    font-size: 22px;
    color: #fff;
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


       

        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Please Provide all details</p>
                    <h2>Confirm Purchase</h2>
                </div>
                <div class="row">
                   

                <?php
  if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
  {
      echo '<h2> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
  }

?>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row">
                    <div class="container-fluid d-flex justify-content-center">
                        <div class="col-sm-8 col-md-6">
                   
                </div>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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
        <script>$(function($) {
$('[data-numeric]').payment('restrictNumeric');
$('.cc-number').payment('formatCardNumber');
$('.cc-exp').payment('formatCardExpiry');
$('.cc-cvc').payment('formatCardCVC');
$.fn.toggleInputError = function(erred) {
this.parent('.form-group').toggleClass('has-error', erred);
return this;
};
$('form').submit(function(e) {
e.preventDefault();
var cardType = $.payment.cardType($('.cc-number').val());
$('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
$('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
$('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
$('.cc-brand').text(cardType);
$('.validation').removeClass('text-danger text-success');
$('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
});
}); </script>
    </body>
</html>

