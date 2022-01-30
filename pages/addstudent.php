<?php 
          $students = json_decode(file_get_contents('../data/students.json'),true);
          $students[] = $_GET;
          file_put_contents('../data/students.json',json_encode($students,JSON_PRETTY_PRINT));
          header('Location:students_list.php');
?>