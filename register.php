<?php
  include('path.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9358f2475e.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>
<body>
    <!-- header -->
    <?php
  include(ROOT_PATH .'app/includes/header.php')
?>

   <div class="auth-content">
      <form action="register.html" method="post">
        <h1 class="form-title">Register</h1>
        <!-- <div class="msg error">
            Username required
        </div> -->
        <div>
            <label for="">Username</label>
            <input type="text" name="username" class="text-input">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" class="text-input">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" class="text-input">
        </div>
        <div>
            <label for="">Password Confirmation</label>
            <input type="password" name="passwordconf" class="text-input">
        </div>
        <div>
            <button type="submit" class="btn btn-big">Register</button>
        </div>

        <p>Or, <a href="login.php">Sign In</a></p>
       
      </form>
   </div>


<!-- footer -->
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<!-- custom script -->
<script src="js/script.js"></script>
</body>
