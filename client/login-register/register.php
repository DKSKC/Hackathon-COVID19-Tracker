<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap StyleSheet -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <title>Registration</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br><br>
    <div class='card' style='max-width:500px; min-width:350px; margin:auto'>
        <div class='card-body'>
            <h4>Register</h4> <br>       
            <label class='float-left'>Government Email</label> <br>          
            <input class='form-control' type='text' placeholder='juandelacruz@something.gov.ph'> <br>           
            <label class='float-left'>Department</label> <br>                
            <select class='form-control'>
                <option value="DSWD">DSWD</option>
                <option value="DOF-SSS">DOF-SSS</option>
                <option value="DOH">DOH</option>
                <option value="DOF-BTr">DOF-BTr</option>
                <option value="DA">DA</option>
                <option value="DOLE">DOLE</option>
                <option value="DILG-PNP">DILG-PNP</option>
                <option value="DND-OCD">DND-OCD</option>
                <option value="DND-AFP">DND-AFP</option>
                <option value="DOLE-OWWA">DOLE-OWWA</option>
                <option value="DOST">DOST</option>
                <option value="DOJ-NBI">DOJ-NBI</option>
                <option value="OEO-OPAPP">OEO-OPAPP</option>
                <option value="DFA">DFA</option>
                <option value="DILG-BFP">DILG-BFP</option>
                <option value="DILG-BJMP">DILG-BJMP</option>
                <option value="DND- VMMC">DND- VMMC</option>
                <option value="LGU">LGU</option>
            </select> <br>             
            <label class='float-left'>Password</label> <br>
            <input class='form-control' type='password'>
            <br>
            <center>
                <div class='row'>                    
                    <div class='col-6'>
                        <button class='btn btn-primary' type='submit' style='height:; max-width:100%'>Register</button> 
                    </div>
                    <div class='col-6'>                      
                        <button class='btn btn-primary' type='submit' style='height:; max-width:100%'>Log in</button> <br>   
                        <div style='font-size:15px'>Already have an account?</div>               
                    </div>                   
                </div>
            </center>
        </div>  
    </div>

    <!-- Bootstrap Jquery  CDN  -->
  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
