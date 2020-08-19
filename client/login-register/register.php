<?php require_once('header.php');?>
<?php
session_start();
try {
    //connecting to db
  @ $db = new mysqli('127.0.0.1:3306', 'student', '123qwe', 'php_hackathon_db');
    //checking if there is a error when connecting to db
  $dbError = mysqli_connect_errno();
  if ($dbError) {
    throw new Exception('Could not connect to db');
  }

  $query = $query = "SELECT * FROM DEPARTMENT";
  $result = $db->query($query);

  $resultCount = $result->num_rows;

 ?>
    <div class='card' style='max-width:700px; min-width:350px; margin:auto'>


        <div class='card-body'>
            <h4>Register</h4> <br>
            <form  action="../../process/process-register.php" method="post">
            <label>First Name</label> <br>
            <input class="form-control"type="text" name="firstname" id="firstname" placeholder="First Name" required autofocus style="text-align:center;">
            <label>Last Name</label> <br>
            <input class="form-control"type="text" name="lastname" id="lastname" placeholder="Last Name" required autofocus style="text-align:center;">
            <label>Middle Name</label> <br>
            <input class="form-control"type="text" name="middlename" id="middlename" placeholder="Middle Name" required autofocus style="text-align:center;">
            <label class='float-left'>Government Email</label> <br>
            <input class='form-control' type='text' placeholder='juandelacruz@something.gov.ph' name="govemail" id="govemail"> <br>
            <label class='float-left'>Department</label> <br>
            <select class='form-control' id="department" name="department">
              <?php
              for ($ctr = 0; $ctr < $resultCount; $ctr++) {
                $row = $result -> fetch_assoc();
               ?>
                <option value ="<?php echo $row['DEPARTMENT_ID'] ?>"><?php echo $row['DEPARTMENT_NAME'] ?></option>
              <?php
                }
               ?>
            </select> <br>
            <label class='float-left'>Password</label> <br>
            <input class='form-control' id="password" name="password" type='password'  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" >
            <br>
            <center>
                <div class='row'>
                    <div class='col-6'>
                        <button class='btn btn-primary' type='submit' style='height:; max-width:100%'>Register</button>
                    </div>
                    <div class='col-6'>
                      <a href="login.php" class="btn btn-primary" style='height:; max-width:100%'>Log in</a> <br>
                        <div style='font-size:15px'>Already have an account?</div>
                    </div>
                </div>

              <?php

              } catch (Exception $e) {
                echo $e->getMessage();
              }
               ?>
            </center>
        </div>
    </div>
      </form>
<?php require_once('footer.php');?>
