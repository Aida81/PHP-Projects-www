<?php
require_once('config.php');
 ?>
<?php

  if(isset($_POST)){

    $employeename   = $_POST['employeename'];
    $gender         = $_POST['gender'];
    $martialstatus  = $_POST['martialstatus'];
    $phoneno        = $_POST['phoneno'];
    $address        = $_POST['address'];
    $dateofbirth    = $_POST['dateofbirth'];
    $nationality    = $_POST['nationality'];
    $hiredate       = $_POST['hiredate'];
    $department     = $_POST['department'];

        $sql = "INSERT INTO employee (employeename, gender, martialstatus, phoneno, address, dateofbirth, nationality, hiredate, department) VALUES(?,?,?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$employeename, $gender, $martialstatus, $phoneno, $address, $dateofbirth, $nationality, $hiredate, $department ]);
        if($result){
          echo 'Successfully saved.';
        }else{
          echo 'There were errors while saving the data.';
        }
  }else{
    echo 'No data';
  }
 ?>
