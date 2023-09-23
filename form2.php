 <?php

include 'config.php';

session_start();

$student_id = $_SESSION['student_id'];

if(!isset($student_id)){
   header('location:user-panel.php');
};

if(isset($_POST['add_project'])){

   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $lname = $_POST['lname'];
   $uname = $_POST['uname'];
   $pname = $_POST['pname'];
   $email = $_POST['email'];
   $abstract = $_POST['abstract'];
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;
   $report = $_FILES['report']['name'];
   $report_size = $_FILES['report']['size'];
   $report_tmp_name = $_FILES['report']['tmp_name'];
   $report_folder = 'uploaded_report/'.$report;
   $ppt = $_FILES['ppt']['name'];
   $ppt_size = $_FILES['ppt']['size'];
   $ppt_tmp_name = $_FILES['ppt']['tmp_name'];
   $ppt_folder = 'uploaded_ppt/'.$ppt;





   $select_project_name = mysqli_query($conn, "SELECT fname FROM `projects` WHERE fname = '$fname'") or die('query failed');

   if(mysqli_num_rows($select_project_name) > 0){
      $message[] = 'project name already added';
   }else{
      $add_project_query = mysqli_query($conn, "INSERT INTO `projects`(fname,lname,uname,pname,email,abstract,image,report,ppt) VALUES('$fname', '$lname','$uname','$pname','$email','$abstract','$image','$report','$ppt')") or die('query failed');

      if($add_project_query){
         if($image_size > 2000000){
            $message[] = 'image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            move_uploaded_file($report_tmp_name,$report_folder);
            // move_uploaded_file($ppt_tmp_name,$ppt_folder);
            $message[] = 'project added successfully!';
         }
      }else{
         $message[] = 'project could not be added!';
      }
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
        <link href="admin_style.css" rel="stylesheet">
    <title>Fill up the form</title>
</head>
<body>
  <section class="add-products">

   <h1 class="title">Products</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>add projects</h3>
      <input type="text" name="fname" class="box" placeholder="First Name" required>
      <input type="text" name="lname" class="box" placeholder="Last Name" required>
      <input type="text" name="uname" class="box" placeholder="University Name" required>
      <input type="text" name="pname" class="box" placeholder="Project Name" required>
      <input type="text" name="email" class="box" placeholder="Email" required>
      <input type="textarea" name="abstract" class="box" placeholder="Enter Abstract" required>
      <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" placeholder="Choose Image"required>
      <input type="file" name="report" accept="application/pdf" class="box" required>
      <input type="file" name="ppt" accept="application/pptx" class="box" required>
      <input type="submit" value="add project" name="add_project" class="btn">
      
   </form>

</section>

        
    
</body>
</html>