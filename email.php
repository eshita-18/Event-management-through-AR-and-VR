<?php
include 'db.php';
$option = mysqli_real_escape_string($conn,$_POST['opt']);
$email = mysqli_real_escape_string($conn,$_POST['mail']);
$date =mysqli_real_escape_string($conn, $_POST['pass']);
$cpass=mysqli_real_escape_string($conn,$_POST['cpass']);
if(isset($_POST['cre']))
?>