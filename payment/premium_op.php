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