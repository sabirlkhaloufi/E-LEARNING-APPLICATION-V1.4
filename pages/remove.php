<?php 
    $students = json_decode(file_get_contents('../data/students.json'),true);

    var_dump($students);
    foreach($students as $key => $value){
        if($value['EnrollNumber'] == $_GET['EnrollNumber']){
            unset($students[$key]);
        }
    }

    $students = json_encode($students,JSON_PRETTY_PRINT);
    file_put_contents('../data/students.json',$students);

    header('location:students_list.php');
    

    // header('location:students_list.php')
?>