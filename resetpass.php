<?php
echo $_POST['username'];
echo $_POST['email'];
if (isset($_POST['submit'])){
    include './pages/conixion.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $requete = "SELECT * FROM users WHERE username = '$username' and Email = '$email'";
    $statment = $con -> prepare($requete);
    $statment -> execute();
    $result = $statment -> fetch();
    if ($username == $result['username'] && $email == $result['Email']){
        //header("location:newpass.php");
        echo $result['username'];
        echo $result['Email'];
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset-password</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="container d-flex justify-content-center align-items-center">
<form method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Enter username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Enter Email</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="email">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Reset password</button>
</form>
</body>
</html>