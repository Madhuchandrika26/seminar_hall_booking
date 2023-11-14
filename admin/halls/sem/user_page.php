<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   


</head>
<body>
   
<div class="container">
<header>
    <div class="nav-bar">
        <a href="" class="logo">Mcet</a>
        <div class="navigation">
            <div class="nav-items">
            <i class="uil uil-times nav-close-btn"></i>
            <a href="homes.php"><i class="uil uil-home"></i>Home</a>
            <a href="login_form.php"><i class="uil uil-signin"></i>Signin</a>
            

            <a href="register_form.php"><i class="uil uil-registered"></i>Register</a>
            <a href=""><i class="uil uil-eye"></i>Halls</a>
            <a href="#"><i class="uil uil-envelope"></i>Contact</a>  
            </div>
        </div>
        <i class="uil uil-apps nav-menu-btn"></i>
    </div>
   </header>

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>