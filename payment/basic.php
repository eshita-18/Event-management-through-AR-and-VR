
<?php
include '../db.php';
$msg='';
if(isset($_POST['pay'])){
$cpass=mysqli_real_escape_string($conn,$_POST['email']);

$name = mysqli_real_escape_string($conn,$_POST['card']);

             
            
                
$email = mysqli_real_escape_string($conn,$_POST['date']);
$password =mysqli_real_escape_string($conn, $_POST['cvc']);
$insert="insert into trans( card, cvc, email, exp) values('cpass','password','$cpass','$email')";
$check=mysqli_query($conn,$insert);
if($check){
   $msg='<div class="alert alert-success" role="alert">
   Congraratulations you have successfully registered to our website !!
 </div>';

                      header('refresh:3; url=http://localhost/project/project/index.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>payment</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .linking{
            color: black;
        }
    </style>
</head>

<body id="bodyone">
    <div class="row .payment-dialog-row">
        <div class="col">
            <section class="newsletter-subscribe">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Thankyou for booking with Power Vision</h2>
                        <p class="text-center">Your Total Payment BASIC PLAN PowerVision is INR- 20,000/- for further payments kindly contact your booked Hotel/Banquet.Thankyou !</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <form class="d-flex justify-content-center flex-wrap" method="post">
        <div class="mb-3"></div>
        <div class="mb-3"></div>
    </form>
    <div class="row .payment-dialog-row">
        <div class="col-12 col-md-4 offset-md-4">
            <div class="card credit-card-box">
                <div class="card-header">
                    <h3><span class="panel-title-text">Payment Details </span><img class="img-fluid panel-title-image" src="assets/img/accepted_cards.png"></h3>
                </div>
                <div class="card-body">
                    <form id="payment-form">
                    <div class="card-body">
                    <form id="payment-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3"><label class="form-label" for="cardNumber">Card number </label>
                                    <div class="input-group"><input class="form-control" type="tel" id="cardNumber" required="" placeholder="Valid Card Number"><span class="input-group-text"><i class="fa fa-credit-card"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group mb-3"><label class="form-label" for="cardExpiry"><span>expiration </span><span>EXP </span> date</label><input class="form-control" type="tel" id="cardExpiry" required="" placeholder="MM / YY"></div>
                            </div>
                            <div class="col-5 pull-right">
                                <div class="form-group mb-3"><label class="form-label" for="cardCVC">cv code</label><input class="form-control" type="tel" id="cardCVC" required="" placeholder="CVC"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3"><label class="form-label" for="couponCode">coupon code</label><input class="form-control" type="text" id="couponCode"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12"><button class="btn btn-success btn-lg d-block w-100" type="submit"><a href="end.html" style='color:white'>PAY</button></a></div>
                        </div>
                        <div class="row">
                            <div class="col-12"><button class="btn btn-success btn-lg d-block w-100" type="submit"><a class="linking" href="../homepage/projects-grid-cards.php">GO BACK</button></a></div>
                        </div>
                    </form>
                </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">POWER VISION</a></h3>
                <p class="links"><a href="#">Home</a><strong> ?? </strong><a href="#">Blog</a><strong> ?? </strong><a href="../pricing/index.html">Pricing</a><strong> ?? </strong><a href="../aboutus/index.html">About</a><strong> ?? </strong> ?? </strong><a href="../homepage/hire-me.html">Contact</a></p>
                <p class="company-name">POWERVISION ?? 2015 </p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-start">+91 8128369626</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">powervision@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-4 footer-about">
                <h4>About PowerVision</h4>
                <p>The aim of this website is to provide the service of Augmented Reality[AR] and Virtual Reality [VR]. Kind of general website can be used by anyone.</p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>