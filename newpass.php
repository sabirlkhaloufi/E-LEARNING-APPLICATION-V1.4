<?php
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