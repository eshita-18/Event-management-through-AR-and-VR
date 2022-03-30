

    <?php
    include 'sign_op.php';
    include 'db.php';
    include 'login_op.php';
            include 'glogin/config.php';
            if(isset($_GET['code']))
              {
              $token=$client-AccessTokenWithCode($_GET['code']);
                $client->setAccessToken($token['access_token']);
    $_SESSION['access_token']=$token['access_token'];
    $service=new Google_Service_OAuth2($_client);
    $data->$service->userinfo->get();
    if (!empty($data['given_name'])) {
        $_SESSION['name']=$data['given_name'];

        
    }
           }
$link="";
if (!isset($_SESSION['access_token'])) {
    $link=$client->createAuthUrl();
}
            ?>
            <?php
            require 'fblogin/fbconfig.php';
            ?>
         
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>POWERVISION</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <style>
        .but{
            width: 120px;
             background-color: skyblue;
             height: 40px;
            border-radius: 10px;
            font: red;
        }
        .one{
            color: black;
        }
    </style>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#">POWER VISION</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link active" href="homepage/cv.php">About us</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="#download">LOGIN</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="aboutus/index.html">contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('assets/img/new.jpg');background-size: contain;color: black;">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading">powervision</h1>
                        <p id="bott"class="intro-text">WHERE IMAGINATION TURNS OUT AS A REALITY!</p><a id="btn" class="btn btn-link btn-circle" role="button" href="#about"><i id="icn" class="fa fa-angle-double-down animated"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center content-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>About POWER VISION</h2>
                    <p>POWER VISION is a powerful website. It makes your dream event come into reality, There are many event management websites but this website helps you to view the AR-VR look of the venue<br>along with the venue they had entered.</p>
                    <p>POWER VISION also provides a feature to the user to give feedback and ratings for the service this<br>website had given to them..</p>
                    <p>The aim of POWER VISION is to provide the service of Augmented Reality[AR] and Virtual Reality [VR].</p>
                </div>
            </div>
        </div>
    </section>
    <?php echo $msg;?>
    <section class="text-center download-section content-section" id="download" style="background-image: url('assets/img/logo.png');color: antiquewhite;background-size: 440px;background-repeat: no-repeat;">
        <div class="container">
            <div class="col-lg-8 mx-auto">
              <form class="form" method="POST">
		<div class="whole">
			<h2>Login</h2>
		<span>&#128100;</span>
		<input placeholder="Email id" type="text" class="email" name="mail" autofocus /><br>
		<span>&#x1F511;</span>
		<input placeholder="Password" type="Password" class="pwd" name="pass" autofocus /><br>
		<br>
		<a href="forget1.php">Forgot Password</a>
		<br>
		<br>
		<br>
        <input type='submit' name='sub'  class='but' value='login'>
    
	
		<br><br><br>
		Or Login With:
       
		
        <?php if(!empty($link)){?>

		<a href="<?php echo $link;?>" class="fa fa-google"></a>
        <?php
        }else{
            echo  $_SESSION['name'];
                }        ?>

		<br><br>
		<br><br>
		<a href="signup2.php" class="create">Create an account</a>
		</div>
	</form> 
            </div>
        </div>
    </section>
    <section class="text-center content-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contact us</h2>
                    <p>Feel free to leave us a comment on POWER VISION&nbsp;to give some feedback us!</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-google fa-fw"></i><span class="network-name">&nbsp;GOOGLE</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;Twitter</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-pinterest-square fa-fw"></i>PINTREST<span class="network-name"></span></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="map-clean"></div>
    <footer>
        <div class="container text-center">
            <p>Copyright © &nbsp;Brand 2022</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>