<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php
    session_start();
    include 'conixion.php';
    $_SESSION["id"]= $_GET['Id'];
    $id = $_SESSION["id"];
    $statement = $con -> prepare("SELECT * FROM students_list WHERE Id = $id");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50">


<form method="POST" action="update.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">img:</label>
                                    <input type="file" class="form-control" id="recipient-name" accept=".jpg,.png,.jpeg" name="img">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Name" value="<?php echo $table['Name']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Email" value="<?php echo $table['Email']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Phone:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Phone" value="<?php echo $table['Phone']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Enroll Number:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="EnrollNumber" value="<?php echo $table['EnrollNumber']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Date of admission:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="DateOfAdmission" value="<?php echo $table['DateOfAdmission']?>">
                                  </div>
                                  <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Update student</button>
                              </div>
                                </form>
</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>