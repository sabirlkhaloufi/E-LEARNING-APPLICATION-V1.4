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
<body >

   <main class="bg-sign-in d-flex justify-content-center align-items-center">
      <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column gap-2">
        <h1 class="E-classe text-start ms-3 ps-1" >E-classe</h1>
        <div>
          <h2 class=" sign-in text-uppercase">sign in</h2>
        <p>Enter your credentials to access your account</p>
        </div>
        <form action="pages/dashboard.php">
          <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="mb-3 text-start">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
          </div>
          <button type="submit" class="btn text-white w-100 text-uppercase">sign in</button>
          <p class="mt-4">Forgot your password? <a href="#">Reset Password</a></p>
        </form>
     </div>
   </main>

   <script src="/js/bootstrap.bundle.js"></script>
</body>
</html>