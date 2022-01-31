<?php 
    $student = $_GET;
    $students = file_get_contents('../data/students.json');
    $students = json_decode($students,true);
    foreach($students as $student){
        if($students['EnrollNumber'] == $student['EnrollNumber']){

        }
    }
?>