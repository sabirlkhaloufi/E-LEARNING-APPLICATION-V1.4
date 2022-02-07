<?php 
    include 'conixion.php';
    if(isset($_POST['submit'])){
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $EnrollNumber = $_POST['EnrollNumber'];
        $DateOfAdmission = $_POST['DateOfAdmission'];

        $requete = $con->prepare("INSERT INTO students_list(Name,Email,Phone,EnrollNumber,DateOfAdmission) VALUES(:Name,:Email,:Phone,:EnrollNumber,:DateOfAdmission)");
        $requete -> bindvalue('Name',$Name);
        $requete -> bindvalue('Email',$Email);
        $requete -> bindvalue('Phone',$Phone);
        $requete -> bindvalue('EnrollNumber',$EnrollNumber);
        $requete -> bindvalue('DateOfAdmission',$DateOfAdmission);
        $requete->execute();
    }
    header('location:students_list.php')
    ?>