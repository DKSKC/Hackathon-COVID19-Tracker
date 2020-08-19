<?php require_once('header.php');?>
    <div class='card' style='max-width:500px; min-width:350px; margin:auto'>
        <div class='card-body'>
            <h4>Log in</h4> <br>
            <form action="../process/process-login.php" method="post">


            <label class='float-left'>Government Email</label> <br>
            <input class='form-control'type="text" name="email" id="name" required="required">
            <label for="float-left">Password</label>
            <input class='form-control'type="password" name="password" id="password" required="required">
            <br>
            <center>
            <div class='row'>
                <div class='col-6'>
                    <button class='btn btn-primary'>Log in</button>
                </div>
                <div class='col-6'>
                    <a href="register.php" class="btn btn-primary">Register</a> <br>
                    <span style='font-size:13px;'>Don't have an account yet? <br>Register here</span>
                </div>
            </div>
            </center>
          </form>
        </div>
    </div>
<?php require_once('footer.php');?>
