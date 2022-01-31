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
                <div class="title h6 fw-bold">Payment Details</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                </div>
            </div>
            <div class="table table-responsive">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr class="py-3">
                            <th>Name</th>
                            <th>Payment Schedule</th>
                            <th>Bill Number</th>
                            <th>Amount Paid</th>
                            <th>Balance amount</th>
                            <th>Date </th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                        $payments = file_get_contents('../data/payments.json');
                        $payments = json_decode($payments,true);
                        foreach($payments as $payment){
                            echo'<tr>';
                                echo'<td>'.$payment['Name'].'</td>';
                                echo'<td>'.$payment['PaymentSchedule'].'</td>';
                                echo'<td>'.$payment['BillNumber'].'</td>';
                                echo'<td>'.$payment['AmountPaid'].'</td>';
                                echo'<td>'.$payment['BalanceAmount'].'</td>';
                                echo'<td>'.$payment['Date'].'</td>';
                                echo '<td><i class="fal fa-eye"></i></td>';
                            echo '</tr>';
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
            
            <!-- end student list table -->

        </div>
        <!-- end content page -->
    </main>
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>