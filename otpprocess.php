
<?php
session_start();
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
/*
$name=$_SESSION['name'];
$email=$_SESSION['email'];
*/$phone=$_SESSION['phone'];
$otp=$_SESSION['otp'];
   
    
      if($_POST["otpvalue"]==$otp){
      	phpAlert( "OTP is matched");
      	header("location: routers/register-router.php");
      }
      	else{
      		
      		phpAlert( "OTP is not matched");
      	    echo "sorry your otp doesnt match";
      	}
     
?>