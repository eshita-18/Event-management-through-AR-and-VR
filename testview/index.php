<?php

$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"event_mgt");


$msg="";
// $mail=$_POST['mail'];
// $nm= $_POST['nm'];
// $add =$_POST['add'];
// $pin = $_POST['pin'];
// $city=mysqli_real_escape_string($conn,$_POST['city']);
// $cout = mysqli_real_escape_string($conn,$_POST['cout']);
// $event=mysqli_real_escape_string($conn,$_POST['event']);
// $state= mysqli_real_escape_string($conn,$_POST['state']);

if(isset($_POST['sub']))

            {
                
$mail=mysqli_real_escape_string($conn,$_POST['mail']);
$nm= mysqli_real_escape_string($conn,$_POST['nm']);
$add =mysqli_real_escape_string($conn,$_POST['add']);
$pin = mysqli_real_escape_string($conn,$_POST['pin']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$cout = mysqli_real_escape_string($conn,$_POST['cout']);
$event=mysqli_real_escape_string($conn,$_POST['event']);
$state= mysqli_real_escape_string($conn,$_POST['state']);
    //             $qry="select * from booking,user_details where user_details.userid=booking.booking_id";
    // if(mysqli_query($conn,$qry))
   
               
                $insert=
                "insert into booking( name, address, pincode, district, state, country, emailid, event)
                 values ('$nm',' $add','$pin',' $city','$state',' $cout', '$mail','$event')";
                     $check=mysqli_query($conn,$insert);
                     
                     if($check){
                        $msg='<div class="alert alert-success" role="alert">
                        Thank you for booking !!
                      </div>';
                      header('refresh:3; url=http://localhost/project/project/pricing/index.html');
                         
                     }
                     else{
                         
                        $msg='<div class="alert alert-danger" role="alert">
                        Their are few errors please recheck !!!
                      </div>';
                     }
            }
            
               
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>testview</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div><a class="navbar-brand" href="#"><span>POWER VISION</span> </a></div>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item"><a class="nav-link active" href="../homepage/projects-grid-cards.php" style="color: rgba(224,217,217,0.9);">home </a></li>

                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgba(224,217,217,0.9);">Services </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="../pricing/index.html">Price Packages</a><a class="dropdown-item" href="../homepage/index.php">Order Services</a><a class="dropdown-item" href="../homepage/hire-me.php">Custom Request</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../aboutus/index.html" style="color: rgba(224,217,217,0.9);">contact </a></li>
                </ul>
                <p class="ms-auto navbar-text actions"> <a class="btn btn-light action-button" role="button" href="../index.php" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Logout</a></p>
            </div>
        </div>
    </nav>
    <form class="bootstrap-form-with-valhttps://drive.google.com/drive/folders/1-VFigdE2GqT1lWTLUOu-k3CQJfmMqOF3idation" method="POST" action=""enctype="multipart/form=data">
        <h2 class="text-center">BOOKING EVENT</h2>
        <?php
        echo $msg
        ?>
        <div class="form-group mb-3"><label class="form-label" for="text-input">&nbsp; &nbsp;<strong>Enter Your Name</strong></label><input class="form-control" type="text" id="text-input" name="nm" required></div>
        <div class="form-group mb-3"><label class="form-label" for="text-input">&nbsp; &nbsp;<strong>Enter Your Address</strong></label><input class="form-control" type="text" id="text-input" name="add" required></div>
        <div class="form-group mb-3"><label class="form-label" for="text-input">&nbsp; &nbsp;<strong>Enter Your Pin-code</strong></label><input class="form-control" type="text" id="text-input-2" name="pin" requird></div>
        <div class="form-group mb-3"><label class="form-label" for="text-input">&nbsp; <strong>&nbsp;Enter District</strong></label><input class="form-control" type="text" id="text-input-1" name="city" required></div>
        <div class="form-group mb-3"><label class="form-label" for="text-input">&nbsp; <strong>&nbsp;Enter State</strong></label><input class="form-control" type="text" id="text-input-3" name="state" required></div>
        <div class="form-group mb-3"><label class="form-label" for="text-input">&nbsp; <strong>&nbsp;Enter Country</strong></label><input class="form-control" type="text" id="text-input-4" name="cout" required></div>
        <div class="form-group mb-3"><label class="form-label" for="text-input">&nbsp; <strong>&nbsp;Enter Your Email</strong></label><input class="form-control" type="text" id="text-input-5" name="mail" required></div>
        <div class="form-group mb-3"><label class="form-label" for="text-input">&nbsp; <strong>&nbsp; Enter the Event</strong></label><input class="form-control" type="text" id="text-input-6" name="event" required></div>
       
        <div class="form-group mb-3">
            <div class="form-check"><a href="https://drive.google.com/drive/folders/1-VFigdE2GqT1lWTLUOu-k3CQJfmMqOF3">Test With AR</a></div>
            <div class="form-check"><a href="https://powervision.itch.io/hotellobby">Test With VR</a></div>
                </div><button class="btn btn-primary" type="submit" name="sub" >Submit</button> &nbsp; &nbsp;&nbsp; &nbsp;
        </div>
            <button class="btn btn-primary" type="submit"><strong><a href ="../profile/index.html"  style="color:yellow">
            Want To Add New Event?</strong></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="submit"><a href="../homepage/projects-grid-cards.php" style="color:yellow"></a><strong>Cancel</strong></button>
    </form>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>