<?php
        // session_start();
        // if(isset($_POST['submit'])){
        //   include './pages/conixion.php';
        //   $username = $_POST['username'];
        //   $email = $_POST['email'];
        //   $password = $_POST['pass'];
        //   $conPassword = $_POST['conPass'];
        //   if($password == $conPassword){

        //   }
        //   else{
        //     header("location:index.php?error=password not found");
        //   }
      // }?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing-in</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <main class="bg-sign-in d-flex justify-content-center align-items-center">
      
<div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
        <div>
          <h2 class=" sign-in text-uppercase">sign up</h2>
        </div>
        <form method="POST" id="signup" action="createaccout.php" onsubmit="return validateInput();">
          <div class="mb-3 mt-3 text-start">
            <label for="username">username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
          </div>
          <div class="mb-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="email" required>
          </div>
          <div class="mb-3 text-start">
            <label for="pwd">Create New Password:</label>
            <input type="password" class="form-control" id="Pwd" placeholder="Enter password" name="pass" required>
          </div>
          <div class="mb-3 text-start">
            <label for="conPwd">Confirm New Password:</label>
            <input type="password" class="form-control" id="conPwd" placeholder="Confirm password" name="conPass" required>
          </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">sign up</button>
          <p class="mt-4">you have account? <a href="index.php">sign-in</a></p>
        </form>
     </div>
     
   </main>
   <script src="./js/validation.js"></script>
</body>
</html>