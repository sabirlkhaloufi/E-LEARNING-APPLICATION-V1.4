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
      <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class="E-classe text-start ms-3 ps-1" >E-classe</h1>
        <div>
          <h2 class=" sign-in text-uppercase">sign in</h2>
        <p>Enter your credentials to access your account</p>
        </div>
        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "please enter your email or password"){
              echo '<div sclass="alert alert-danger" role="alert">
            please enter your email or password
          </div>';
            }
            elseif($_GET['error'] == "email or password not found"){
              echo '<div class="alert alert-danger" role="alert">
              email or password not found
          </div>';
            }
          }    
        ?>
        <form method="POST" action="login.php">
          <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php  if(isset($_COOKIE['email'])){echo $_COOKIE['email']; }?>">
          </div>
          <div class="mb-3 text-start">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" value="<?php  if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>">
          </div>
          <div class="mb-3 form-check d-flex gap-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">sign in</button>
          <p class="mt-4">Forgot your password? <a href="resetpass.php">Reset Password</a></p>
          
        </form>
        <a href="sing-up.php" class="btn-register btn btn-success mb-3">Create New Account</a>
     </div>

   </main>
   <script src="/js/bootstrap.bundle.js"></script>
</body>
</html>