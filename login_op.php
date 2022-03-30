<?php
include "db.php";
$msg="";
if(isset($_POST['sub'])){
    $email=$_POST['mail'];
    $password=$_POST['pass'];
    $q="select * from user_details where emailid='$email' && password='$password'";
    $sql=mysqli_query($conn,"select * from user_details where emailid='$email' && password='$password'");
    $data=mysqli_num_rows($sql);
    if($data>0){
        $msg='<div class="alert alert-success" role="alert">
        Congatulation Successfully logged in!!
      </div>';

        header('location:homepage/projects-grid-cards.php');
    }
    else{
        $msg='<div class="alert alert-danger" role="alert">
        Your login is unsucessfull either you can try again or create a new account with different email id!!!
      </div>';

    }

}