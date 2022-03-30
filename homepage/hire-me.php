<?php session_start()?>
<?php
include 'email.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">POWER VISION</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects-grid-cards.php">Work</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">Mail us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="hire-me.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>Inform Us</h2>
                </div>
                <form method="post" enctype="multipart/formdata">
                    <div class="mb-3"><label class="form-label" for="subject">Subject</label><select class="form-select" id="subject" name="opt">
                            <optgroup label="This is a group" >
                                <option value="12" selected="">AUGMENTED REALITY</option>
                                <option value="13">VIRTUAL REALITY</option>
                                <option value="14">OTHER</option>
                            </optgroup>
                        </select></div>
                    <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="mail" required></div>
                    <div class="mb-3"><label class="form-label" for="message">Message</label><textarea class="form-control" id="message" name="mess" required></textarea></div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6"><label class="form-label" for="hire-date">Date</label><input class="form-control" id="hire-date" type="date" name="s_date"></div>
                            <div class="col-md-6 button"><button class="btn btn-primary d-block w-100" type="submit" name="sub">Inform Me</button></div>
                            <?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
			<?php
					}else{
			?>
						<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
			<?php
					}
 
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
                            <?php
                echo $msg;
                ?>
                        </div>
                    </div>
                </form>
                
            </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About me</a>
                <footer class="page-footer gradient">
                    <div class="container">
                        <div class="links"><a href="../aboutus/index.html">About us</a><a href="#">Contact me</a><a href="#">Projects</a></div>
                        <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
                    </div>
                </footer><a href="#">Contact me</a><a href="#">Projects</a>
            </div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>