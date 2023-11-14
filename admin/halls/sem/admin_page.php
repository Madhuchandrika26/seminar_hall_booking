<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>
<header>
    <div class="nav-bar">
        <a href="" class="logo">Mcet</a>
        <div class="navigation">
            <div class="nav-items">
            <i class="uil uil-times nav-close-btn"></i>
            <a href="homes.php"><i class="uil uil-home"></i>Home</a>
            <a href="login_form.php"><i class="uil uil-signin"></i>Signin</a>
            

            <a href="register_form.phps"><i class="uil uil-registered"></i>Register</a>
            <a href=""><i class="uil uil-eye"></i>Halls</a>
            <a href="#"><i class="uil uil-envelope"></i>Contact</a>  
            </div>
        </div>
        <i class="uil uil-apps nav-menu-btn"></i>
    </div>
   </header>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>