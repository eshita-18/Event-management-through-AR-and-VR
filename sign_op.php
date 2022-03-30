<?php
require 'db.php';
$msg="";
$ErrrnMsg="";
$errmb="";
$errmail="";
$errcountry="";
$erradd="";
$errcity="";
$errpin="";
$errpass="";

if(isset($_POST['sign']))
            {
             
              $name = mysqli_real_escape_string($conn,$_POST['name']);

             
            
                
                $email = mysqli_real_escape_string($conn,$_POST['mail']);
                $password =mysqli_real_escape_string($conn, $_POST['pass']);
                $cpass=mysqli_real_escape_string($conn,$_POST['cpass']);
                $gender = mysqli_real_escape_string($conn,$_POST['sex']);
                $dob=mysqli_real_escape_string($conn,$_POST['birth']);
                $address=mysqli_real_escape_string($conn,$_POST['adress']);
                $cout=mysqli_real_escape_string($conn,$_POST['country']);

                $city =mysqli_real_escape_string($conn, $_POST['city']);
                $mobno =mysqli_real_escape_string($conn, $_POST['no']);
                $pin=mysqli_real_escape_string($conn,$_POST['pincode']);
                //$pass=password_hash($password,PASSWORD_BCRYPT);
                //$cpwd=password_hash($cpass,PASSWORD_BCRYPT);
                $equery="select * from user_details where emailid='$email'";
                $query=mysqli_query($conn,$equery);
                
                $ecount=mysqli_num_rows($query);
                if($ecount>0){
                    $msg='<div class="alert alert-warning" role="alert">
                    We noticed that U have already have an account with this email please
                     login otherwise use another Email id
                  </div>';

                }
                else{
                if($password===$cpass){
                    $insert="insert into user_details( user_name, password, cpassword, gender, date_of_birth, address, country, city, pincode, mobileno, emailid) values('$name',' $password',' $cpass',' $gender','$dob','$address','$cout','$city',' $pin','$mobno ','$email')";
                     $check=mysqli_query($conn,$insert);
                     if($check){
                        $msg='<div class="alert alert-success" role="alert">
                        Congraratulations you have successfully registered to our website !!
                      </div>';
                      header('refresh:3; url=http://localhost/project/project/index.php');
                         
                     }
                     else {
                        $msg='<div class="alert alert-danger" role="alert">
                        Their are few errors please recheck !!!
                      </div>';
                     }
                    }else{
                        $msg='<div class="alert alert-warning" role="alert">
                        Please check the passwords you have entered!!!!
                      </div>';

                    }
                     

                    }
                  }
                
                
                
              

            
              ?>