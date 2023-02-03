<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="register.css">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="img/iconn.jpg">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php
     session_start();
    //  session_register('email');
     $_SESSION['email']=$_POST['email'];
?>
<div class="container">
  <div class="title">Registration</div>
  <div class="content">
      <form action= "signin2.php" method = "POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details" >Full Name</span>
            <input type="text" placeholder="Enter your name" name = "name" required>
              </div>
<?php
include("dbcon.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $email = $_POST['email'];
}
?>
<div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder=<?php echo $email?> disabled readonly required>
          
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number" name = "phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name = "password1" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name = "password2" required>
          </div>
<div class="role-details"  >
          <input type="radio" name="role" value="Admin" id="dot-4"  >
          <input type="radio" name="role" value="User" id="dot-5"  >
          <span class="role-title">Role</span>
          <div class="categoryrole">
            <label for="dot-4">
            <span class="dot four"></span>
            <span class="role">Admin</span>
          </label>
          <label for="dot-5">
            <span class="dot five"></span>
            <span class="role">User</span>
          </label>
          </div>
        </div>
      </div>
        <div class="gender-details"  >
          <input type="radio" name="gender" value="Male" id="dot-1"  >
          <input type="radio" name="gender" value="Female" id="dot-2"  >
          <input type="radio" name="gender" value="Other" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Other</span>
            </label>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Register" >
        </div>
      </form>
    </div>
  </div>


</body>
</html>