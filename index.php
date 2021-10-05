<?php
include "inc.php";
include "php/config.php";


if(isset($_GET) && !empty($_GET)){
  foreach($_GET as $key=>$val){
  }
  print $url = ltrim($key,'/');
  $res=mysqli_query($conn,"SELECT * From url Where shorten_url = '$url'");
  var_dump($res);
  $full_url = mysqli_fetch_assoc($res);
  $full_url = $full_url["full_url"];
  header("location:$full_url");
  die();
  
}

if(isset($_SESSION['userId'])): 

  header("location: dashboard.php");
  
  endif;
$validation = new validation;
$queries    = new queries;
$sendEmail  = new sendEmail;

if(isset($_POST['register'])){

  $validation->validate('fullName', 'full name', 'required');
  $validation->validate('email', 'Email', 'uniqueEmail|users|required');
  $validation->validate('password', 'Password', 'required|min_len|6');

  if($validation->run()){

     $fullName = $validation->input('fullName');
     $email    = $validation->input('email');
     $password = $validation->input('password');
     $password = password_hash($password, PASSWORD_DEFAULT);
     $code     = rand();
     $code     = password_hash($code, PASSWORD_DEFAULT);
     $url      = "http://" . $_SERVER['SERVER_NAME'] . "/confirm.php?confirmation=" . $code;
     $status   = 0;
     if($queries->query("INSERT INTO users (fullName, email, password, code, status) VALUES (?,?,?,?,?) ", [$fullName, $email, $password, $code, $status])){

      if($sendEmail->send($fullName, $email, $url)){
        
        $_SESSION['accountCreated'] = "Your account has been created successfully please verify your email";
        header("location: login.php");

      }

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
    <title>Create account</title>
    <?php include "components/styles.php"; ?>
    <link rel="icon" type="img/jpg" href="assets/img/favicon.jpg">

</head>
<body style="background-image:none;
             background-color:white;">
  <?php include "components/nav.php"; ?> 
  </br></br></br>
  <div class="container">
  <div class="row mt-5">
  <div class="col-md-5">
  <div class="card">
  <div  style="background-color:#fafafa;" class="card-body">
  <form action="" method="POST">
  <div class="form-group">
  <h3 style="color:#a284d8;">Create account</h3>
  </div>
  <!-- Close form-group -->
  <div class="form-group">
  <input style="border:1px solid #fafafa; background-color:#fafafa;"  type="text" name="fullName" class="form-control" placeholder="Enter Full Name" value="<?php if($validation->input('fullName')): echo $validation->input('fullName'); endif; ?>">
  <div class="error">
    <?php if(!empty($validation->errors['fullName'])): echo $validation->errors['fullName']; endif; ?>
  </div>
  </div>
  <!-- Close form-group -->

  <div class="form-group">
  <input style="border:1px solid #fafafa; background-color:#fafafa;"  type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php if($validation->input('email')): echo $validation->input('email'); endif; ?>" >
  <div class="error">
  <?php if(!empty($validation->errors['email'])): echo $validation->errors['email']; endif; ?>
  </div>
  </div>
  <!-- Close form-group -->

  <div class="form-group">
  <input style="border:1px solid #fafafa; background-color:#fafafa;"  type="password" name="password" class="form-control" placeholder="Enter password" value="<?php if($validation->input('passwors')): echo $validation->input('password'); endif; ?>">
  <div class="error">
  <?php if(!empty($validation->errors['password'])): echo $validation->errors['password']; endif; ?>
  </div>
  </div>
  <!-- Close form-group -->

  <div class="form-group">
  <input type="submit" name="register" class="btn btn-info" value="Register &rarr;"  style="background:#ff589e!important;
                                                                                                      border:1px solid #ff589e;
                                                                                                      color:#fff;">
  </div>
  <!-- Close form-group -->
  </form>
  <!-- Close form -->
  </div>
  <!-- Close card-body -->
  </div>
  <!-- Close card -->
  </div>
  <!-- Close col-md-5 -->
  <div class="col-md-5 text-white ml-auto">
   <h1 style="color:#ff589e;">Easy &amp; uesfull</h1><hr>
   <img style="height:400px; width:300px;" src="assets/img/about-left-image.png" alt="person graphic">
   <p style="color:#4cd137; font-weight:bold;">Create your own account here.</p>
  </div>
  <!-- Close col-md-5 -->
  </div>
  <!-- Close row -->
  </div>
   <!-- Close container -->

   </br></br>



   <footer>
    <div class="container">
      <div class="row">
        <div style="margin-top: -60px;" class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p style="font-weight: 400;">© Copyright 2021 Shorten For You. All Rights Reserved </p>
          
        </div>
      </div>
    </div>
  </footer>
</body>
</html>