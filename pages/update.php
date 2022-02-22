<?php
session_start();
$id = $_SESSION['id'];
include 'conixion.php';
if (isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $EnrollNumber = $_POST['EnrollNumber'];
    $DateOfAdmission = $_POST['DateOfAdmission'];
    $requete = $con -> prepare("UPDATE students_list 
    SET 
    Name = '$Name',
    Email = '$Email',
    Phone = '$Phone',
    EnrollNumber = '$EnrollNumber',
    DateOfAdmission = '$DateOfAdmission'
    WHERE Id = $id");
    $res = $requete -> execute();
    header("location:students_list.php");
}
?>