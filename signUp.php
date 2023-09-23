<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $mobile = mysqli_real_escape_string($conn, md5($_POST['mobile']));
   $gender = $_POST['Gender'];
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
        $in_query = 
         mysqli_query($conn, "INSERT INTO users(name,email,password,Gender,mobile,user_type) VALUES('$name', '$email', '$cpass', '$gender', '$mobile', '$user_type')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

</head>
<body>



<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<div class="form-container">

   <form action="signUp.php" method="post">
      <h3>register now</h3>
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
      <input type="number" name="mobile" placeholder="enter your mobile number" pattern="[0-9]{10}" required class="box">
      <select name="Gender" class="box">
         <option value="Male">Male</option>
         <option value="Female">Female</option>
         <option value="recruiter">Do Not Specify</option>
      </select>
      <select name="user_type" class="box">
         <option value="student">Student</option>
         <option value="faculty">Faculty</option>
         <option value="recruiter">Recruiter</option>
      </select>
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signUpStyle.css">
</head>

<body>
    <div class="container">
        <form action="post">
            <h2> Registration</h2>
            <div class="content">
                <div class="input-box">
                    <label for="name">Full Name</label>
                    <input type="text" placeholder="Enter Full Name" name="name" required>
                </div>
                <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Enter a Username" required>
                </div>
                <div class="input-box">
                    <label for="email">Email </label>
                    <input type="email" placeholder="Enter Official Email Address" name="email" required>
                </div>
                <div class="input-box">
                    <label for="phoneNo">Phone Number</label>
                    <input type="number" placeholder="Enter Phone Number" pattern="[0-9]{10}" name="phoneNo" required>
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" name="password" required placeholder="Enter new Password">
                </div>
                <div class="input-box">
                    <label for="confirm-password">Confirm Password </label>
                    <input type="password" placeholder="Confirm Your Password" name="confirmPassword" required>
                </div>
                <span class="role">Role</span>
                <div class="role-category">
                    <input type="radio">
                    <label for="student">Student</label>
                    <input type="radio">
                    <label for="faculty">Faculty</label>
                    <input type="radio">
                    <label for="recruiter">Recruiter</label>
                </div>
                <span class="gender-title"> Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="other">
                    <label for="other">Other</label>
                </div>
            </div>
            <div class="button">
                <button>Register Me</button>
            </div>
        </form>
    </div>
</body>

</html> -->