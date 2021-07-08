<?php include "header.php" ?>
<?php
session_start();
if (isset($_SESSION['phone']) == FALSE){
     header("Location:index.php");
}
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
phpAlert(   "OTP has been send to your Mobile Number "   ); 
/*$name=$_SESSION['name'];
$email=$_SESSION['email'];*/
$phone=$_SESSION['phone'];
$otp=$_SESSION['otp'];
//echo $_SESSION['result'];
   ?>

<br>
<br>
<br>
<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
   <form action="otpprocess.php" method="post">
      <div class="row">
         <div class="input-field col s12 center">
            <p class="center login-form-text">Easy Meal System</p>
         </div>
      </div>
      <div class="row margin">
          <div class="input-field col s12">

            <input type="text" placeholder='Enter the OTP' class="form-control" id="otpvalue" name="otpvalue" required>
            
          </div>
      </div>
     
   <div class="form-check">
   </div>
   <br>
   <div class='submit-otp' style='text-align:center'>
   <button type="submit" class="btn btn-primary" name="submit1" value="submit1" style='float:center'>Submit</button>
   </div>
</form>
<br>
<br>
</div>
</div>
</body>
  </html>

