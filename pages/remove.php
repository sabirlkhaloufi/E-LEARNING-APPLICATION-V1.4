<?php 
    include 'conixion.php';
    $id = $_GET['Id'];

    if(isset($id)){
        $stmt = $con ->prepare("DELETE FROM students_list WHERE Id=$id");
        $stmt -> execute();

    }
    header('location:students_list.php');
?>