<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'student'){

         $_SESSION['student_name'] = $row['name'];
         $_SESSION['student_email'] = $row['email'];
         $_SESSION['student_id'] = $row['id'];
         header('location:user-panel.php');

      }elseif($row['user_type'] == 'faculty'){

         $_SESSION['faculty_name'] = $row['name'];
         $_SESSION['faculty_email'] = $row['email'];
         $_SESSION['faculty_id'] = $row['id'];
         header('location:user-panel.php');

      }elseif($row['user_type'] == 'recruiter'){

         $_SESSION['recruiter_name'] = $row['name'];
         $_SESSION['recruiter_email'] = $row['email'];
         $_SESSION['recruiter_id'] = $row['id'];
         header('location:user-panel.php');

      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

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

   <form action="login.php" method="post">
      <h3>login now</h3>
      <select name="user_type" class="box">
         <option value="student">Student</option>
         <option value="faculty">Faculty</option>
         <option value="recruiter">Recruiter</option>
      </select>
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account? <a href="signUp.php">register now</a></p>
   </form>

</div>

</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginIn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
    <div class="wrap">
        <div class="box">
            <div class="content">
                <form method="post" action="user-panel.html">
                    <div class="logo-wrap">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <h1>Welcome!</h1>
                    <span>Username</span>
                    <div class="input-box">
                        <input type="text" required>
                        <i class="fa-solid fa-user"></i> -->
                        <!-- <span>Username</span> -->
                    <!-- </div>
                    <span class="user-title">User</span>
                    <div class="dropdown">
                        <select name="user" id="user">
                            <option value="student">Student</option>
                            <option value="faculty">Faculty</option>
                            <option value="recruiter">Recruiter</option>
                        </select>
                    </div>
                    <span>Password</span>
                    <div class="input-box">
                        <input type="password" required>
                        <i class="fa-solid fa-lock"></i>
                        <span>Password</span> -->
                    <!-- </div>
                    <div class="links">
                        <a href="#">Forgot Password</a>
                        <a href="signUp.html">Sign Up</a>
                    </div>


                    <div class="input-box">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>  -->