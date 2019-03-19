<?php     
  include_once("header.php");

?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 bg-info">
                <form method="POST" action="getvalue.php">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select class="form-control" id="gender" name="gernder">
                            <option name="gender">Male</option>
                            <option name="gender">Female</option>
                            <option name="gender">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Province</label>
                        <input type="text" class="form-control" id="province" name="province">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
            
            <div class="col-6 bg-light">
                <form action="">
                
                <h3 class="text-center" >Form Get Name</h3><hr>
                    <p>Name : <b><?php //echo $personName;?></b></p>
                    <p>Gender : <b><?php //echo $personGender; ?></b></p>
                    <p> Province : <b><?php //echo $personProvince?></b></p>
                    <p> Email : <b><?php //echo $personEmail;?></b></p>
                    
                </form>
            </div>
        
        </div>
    </div>
    <?php     
  include_once("footer.php");

?>