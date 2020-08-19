<?php require_once('header.php');?>
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
<?php require_once('footer.php');?>  