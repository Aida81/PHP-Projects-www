<?php
require_once('config.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Employee Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
  <div>
      <?php

       ?>
  </div>
  
    <div >
      <form action="registration.php" method="post">
        <div class="container">

          <div class="row">
              <div class="col-sm-3">
                <h1>Registration</h1>
                <p>Fill up the form</p>
                <hr class="mb-3">
                <label for="employeename">Employee Name</label>
                <input class="form-control" id="employeename" type="text" name="employeename" required>

                <label for="gender">Gender</label>
                <input class="form-control" id="gender" type="text" name="gender" required>

                <label for="martialstatus">Martial Status</label>
                <input class="form-control" id="martialstatus" type="text" name="martialstatus" required>

                <label for="phoneno">Phone No.</label>
                <input class="form-control" id="phoneno" type="text" name="phoneno" required>

                <label for="address">Address</label>
                <input class="form-control" id="address" type="text" name="address" required>

                <label for="dateofbirth">Date of birth</label>
                <input class="form-control" id="dateofbirth" type="date" name="dateofbirth" required>

                <label for="nationality">Nationality</label>
                <input class="form-control" id="nationality" type="text" name="nationality" required>

                <label for="hiredate">Hire Date</label>
                <input class="form-control" id="hiredate" type="date" name="hiredate" required>

                <label for="department">Department</label>
                <input class="form-control" id="department" type="text" name="department" required>
                <hr class="mb-3">
                <input class="btn btn-primary" type="submit" id="register" name="create" value="Add New Employee">

              </div>
          </div>
        </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
       $(function(){
         $('#register').click(function(e){

               var valid = this.form.checkValidity();

               if(valid){

               var employeename  = $('#employeename').val();
               var gender        = $('#gender').val();
               var martialstatus = $('#martialstatus').val();
               var phoneno       = $('#phoneno').val();
               var dateofbirth   = $('#dateofbirth').val();
               var nationality   = $('#nationality').val();
               var hiredate      = $('#hiredate').val();
               var department    = $('#department').val();

                e.preventDefault();

                 $.ajax({
                   type: 'POST',
                   url: 'process.php',
                   data: {employeename: employeename, gender: gender, martialstatus: martialstatus, phoneno: phoneno,
                     dateofbirth: dateofbirth, nationality: nationality, hiredate: hiredate, department: department}
                   success: function(data){
                     Swal.fire({
                       'title':'Successful',
                       'text': data,
                       'type': 'success'
                     })
                   },
                   error: function(data){
                     Swal.fire({
                       'title':'Errors',
                       'text': 'There were errors while saving the data.',
                       'type': 'error'
                     })
                   }
                 });
             }else{
             }

         });


       });
    </script>
  </body>
</html>
