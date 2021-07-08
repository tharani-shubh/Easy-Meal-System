<?php
session_start();
//Your authentication key

    $mobileNumber = $_POST["phone"];
    $username = "shubhtharani28@gmail.com";
    $hash = "5d7b24088cf444dc79ef04779247e07a5cd3c9cb93bae6eaec9d5d1f08b177ce";

    // Config variables. Consult http://api.textlocal.in/docs for more info.
    $test = "0";

	//Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	//$numbers = "910000000000"; // A single number or a comma-seperated list of numbers
	$rndno=rand(1000, 9999);
    $message = urlencode("otp number.".$rndno);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$mobileNumber."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);






    $_SESSION['phone']=$_POST['phone'];
    $_SESSION['otp']=$rndno;
    $_SESSION['result'] = $result;
/*
if(isset($_POST['submit']))
{
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['otp']=$rndno;*/
header( "Location:otp.php" ); 
 ?>
