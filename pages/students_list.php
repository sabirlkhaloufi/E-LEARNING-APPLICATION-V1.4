<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studens_list</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
        <?php 
            include "component/header.php";
        ?>

            <!-- start studient list table -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Students list</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                    <button type="button" class="btn btn-primary">add new student</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th class="opacity-0">vide</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Enroll Number</th>
                            <th>Date of admission</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $students = [
                            ["Name"=>"sabir",
                            "Email"=>"khaloufisabir7@gmail.com",
                            "Phone"=>"0650043210",
                            "Enroll Number"=>"1234567890",
                            "Date of admission"=>"08-Dec,2022"],
                    
                            ["Name"=>"sabir",
                            "Email"=>"khaloufisabir7@gmail.com",
                            "Phone"=>"0650043210",
                            "Enroll Number"=>"1234567890",
                            "Date of admission"=>"08-Dec,2022"],

                            ["Name"=>"sabir",
                            "Email"=>"khaloufisabir7@gmail.com",
                            "Phone"=>"0650043210",
                            "Enroll Number"=>"1234567890",
                            "Date of admission"=>"08-Dec,2022"],

                            
                        ];
                        foreach($students as $students){
                            echo' <tr class="bg-white align-middle">';
                                echo '<td><img src="../assets/img/avatar.svg" alt="" height="50" width="50"></td>';
                                echo'<td>'.$students["Name"].'</td>';
                                echo'<td>'.$students["Email"].'</td>';
                                echo'<td>'.$students["Phone"].'</td>';
                                echo'<td>'.$students["Enroll Number"].'</td>';
                                echo'<td>'.$students["Date of admission"].'</td>';
                                echo'<td class="d-md-flex gap-3 mt-3">
                                    <i class="far fa-pen"></i>
                                    <i class="far fa-trash"></i>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
            <!-- end studient list table -->
        </div>
        <!-- end contentpage -->
    </main>
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>