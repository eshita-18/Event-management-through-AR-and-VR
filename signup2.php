<?php
include'sign_op.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome To Registration page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-info fw-light mb-5"><i class="fa fa-skyatlas"></i>&nbsp;POWER VISION</h2>
                    <?php
                $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

                    if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
                        $ErrMsg = '<div class="alert alert-warning" role="alert">
                        Only alphabets and whitespace are allowed.
                      </div>';
                      echo  $ErrnnMsg; 
        
                        //"<Only alphabets and whitespace are allowed.";  
                                 //echo $ErrMsg;  
                    }
                     
                    else if (!preg_match ("/^[0-9]*$/", $mobno  ) ){ 
                        if($mobno!=10){
                            $errmb= '<div class="alert alert-warning" role="alert">
                        10 digits are allowed. </div>';
                        echo $errmb;
                        } 
                          else{
                        $errmb= '<div class="alert alert-warning" role="alert">
                        only number are allowed.
                      </div>';
                        // "Only numeric value is allowed.";  
                        echo $errmb;
                          }  
                    } 
                   else if (!preg_match ($pattern, $email) ){  
    $ErrnMsg = '<div class="alert alert-warning" role="alert">
    Email is not valid.
  </div>';
    //"Email is not valid.";  
    echo $errmail;
              
} 
else if (!preg_match ("/^[a-zA-z]*$/", $cout) ) {  
    $errcountry = '<div class="alert alert-warning" role="alert">
    Only alphabets and whitespace  in Country name are allowed.
  </div>';
  echo  $errcountry; 

    //"<Only alphabets and whitespace are allowed.";  
             //echo $ErrMsg;  
}  else if (!preg_match ("/^[a-zA-z0-9]*$/", $address) ) {  
    $erradd = '<div class="alert alert-warning" role="alert">
    Only alphabets and whitespace and numbers are allowed in address are allowed.
  </div>';
  echo  $erradd; 

    //"<Only alphabets and whitespace are allowed.";  
             //echo $ErrMsg;  
}
else if (!preg_match ("/^[a-zA-z]*$/", $city) ) {  
    $errcity = '<div class="alert alert-warning" role="alert">
    Only alphabets and whitespace  in city name are allowed.
  </div>';
  echo  $errcity; 

    //"<Only alphabets and whitespace are allowed.";  
             //echo $ErrMsg;  
} 
else if(strlen($pin)!=6){
    $errpin = '<div class="alert alert-warning" role="alert">
    The length of numbers in pincode should be 6.
  </div>';
  echo  $errpin; 
}
 else if (strlen($_POST["pass"]) <= '8') {
    $errpass = '<div class="alert alert-warning" role="alert">
    Your Password Must Contain At Least 8 Characters!.
  </div>';
  echo $errpass;
    //"Your Password Must Contain At Least 8 Characters!";
}
else if(!preg_match("#[0-9]+#",$password)) {
    $errpass ='<div class="alert alert-warning" role="alert">
    Your Password Must Contain At Least 1 Number!.
  </div>';
  echo $errpass;
    // "Your Password Must Contain At Least 1 Number!";
}
else if(!preg_match("#[A-Z]+#",$password)) {
     $errpass ='<div class="alert alert-warning" role="alert">
    Your Password Must Contain At Least 1 Capital Letter!.
  </div>';
  echo $errpass;
    //"Your Password Must Contain At Least 1 Capital Letter!";
}
else if(!preg_match("#[a-z]+#",$password)) {
    $errpass ='<div class="alert alert-warning" role="alert">
    Your Password Must Contain At Least 1 lowercase Letter!.
  </div>';
  echo $errpass; 
    //"Your Password Must Contain At Least 1 Lowercase Letter!";
} 
else  { echo $msg;
                    }
    ?> <form method="POST" enctype="multipart/formdata" action="">
                        <div class="form-group mb-3"><label class="form-label text-secondary">Full Name</label><input class="form-control" type="text" name="name" required="" ></div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Mobile Number</label><input class="form-control" type="text" name="no" required=""></div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Date of birth</label><input class="form-control" type="date"  name="birth"required=""></div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Email</label><input class="form-control" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$"  name="mail"></div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Create Password</label><input class="form-control" type="password" required="" name="pass"></div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Confirm Password</label><input class="form-control" type="password" required="" name="cpass"></div>
                        <div class="form-group mb-3">
                            <div>
                                <fieldset>
                                    <div class="custom-control custom-radio"><label class="form-label custom-control-label" for="customRadio1"></label><label class="form-label text-secondary">Gender</label></div>
                                    <div class="custom-control custom-radio"><input type="radio" id="customRadio2" class="custom-control-input" name="sex"><label class="form-label text-secondary" >Female</label></div>
                                    <div class="custom-control custom-radio"><input type="radio" id="customRadio-1" class="custom-control-input" name="sex"><label class="form-label text-secondary" >Male</label></div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline"><input type="radio" id="customRadioInline2" class="custom-control-input" name="sex"><label class="form-label text-secondary">Other</label></div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Address</label><input class="form-control" type="text" required="" name="adress"></div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Country</label><input class="form-control" type="text" required="" name="country"></div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">City</label><input class="form-control" type="text" required=""name="city"></div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Pincode</label><input class="form-control" type="text" required="" name="pincode"></div>
            <div><button class="btn btn-info mt-2" type="submit" name="sign" >Create My Account</button></div>
            <div><button class="btn btn-info mt-2" 
            onclick='window.location="homepage/projects-grid-cards.php"'type="submit" name="login" > Back to home page</button></div>

                    </form>
                    <p class="mt-3 mb-0"><a class="text-info small" href="#">Forgot your email or password?</a></p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image: url(&quot;assets/img/icon2.jpg&quot;);background-size: cover;background-position: center center;">
                <p class="ms-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a class="text-dark" href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank"><em>Aldain Austria</em></a><br></p>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>