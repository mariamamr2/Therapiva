<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="style/reg.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/bookyoursession.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 


    <title>Book Your Session</title>


    <?php include('nav.php');
      include('database.php');
ob_start();

$email=$_GET['useremail'];
$doc=$_GET['doctor'];


      $hat = "SELECT * from `users` WHERE `email`= '$email'";
      $dots = mysqli_query($mysqli,$hat); 
?>

  <div class="container1">
    <div class="contai">
    <form method="post">

        <h1>Book your session</h1>
         <div class="row">
            <div class="col">
                <div class="form-group"> 
                    <label class="flabel" for="first">User Name</label>
                    <input type="text" class="form-control" id="first" name="username" placeholder="User name" value="<?php if(empty($username)){}else{echo $username;}; ?>">
                </div>
            </div>
            <div class="col">
                
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="useremail"  placeholder="Email" value="<?php if(empty($useremail)){}else{echo $useremail;}; ?>">
                </div>
            </div>
        </div>
            
       
    
     
        <div class="row">
        <div class="col">
            <div class="form-group">
                <label class="" for="doctorname">Doctor name</label>
                <select class="custom-select" name="doctorname" id="doctorname">
                    <option selected>Choose your Doctor</option>
                    <?php
                                          $sess = "SELECT * FROM `doctors`";
                                          $dots = mysqli_query($mysqli,$sess); 
                                          $docname=$_GET[`name`];
                                          foreach($dots as $doctor){?>
                                        <option name="doctorname" value="<?php echo($doctor['name']) ?>" required <?php if(empty($doctor)){}else if($doctor == $doctor['name']){echo 'checked';}; ?>><?php echo($doctor['name'])?></option> 

                                  <?php } ?> 
                </select>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="phoneno">Phone Number</label>
                <input type="number" class="form-control" id="phoneno" placeholder="Enter your Number" name="phoneno" value="<?php if(empty($phoneno)){}else{echo $phoneno;}; ?>">
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="inputEmail4">Available days</label>
                    <input type="text" class="form-control" id="inputEmail4" name="day" placeholder="Enter days you are available in" value="<?php if(empty($day)){}else{echo $day;}; ?>">
                </div>
            </div>
        </div>

        <div class="row">
                <div class="col">
                    <div class="form-group"> 
                        <label class="flabel" for="from">From</label>
                        <input type="time" class="form-control" id="from" name="datefrom" value="<?php if(empty($datefrom)){}else{echo $datefrom;}; ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                         <label class="flabel" for="to">To</label>
                        <input type="time" class="form-control" id="to" name="dateto" value="<?php if(empty($dateto)){}else{echo $dateto;}; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                       
                        <select class="custom-select" id="doctorname" name="status">
                            <option selected>How would you like your session to be?</option>
                            <option value="Online" value="<?php if(empty($status)){}else if($status == 'Online'){echo 'checked';}; ?>">Online Session</option>
                            <option value="Offline"  value="<?php if(empty($status)){}else if($status == 'Offline'){echo 'checked';}; ?>"> Offline Session</option>
                           
                        </select>
                    </div>
                </div>
                </div>
        <!-- <a type="submit" name="checkout" class="btn">Check out</a> -->
  <input type="submit" name="checkout"  class="btn"/>
 <!-- <input type="submit"></input><br> -->
  
                                          
            </form>
    </div>
</div>

<?php

     
if(isset($_POST['checkout'])){
 

    $useremail = $_POST['useremail'];
    $username = $_POST['username'];
    $doctorname = $_POST['doctorname'];
    $phoneno = $_POST['phoneno'];
    $day = $_POST['day'];
    $dateto = $_POST['dateto'];
    $datefrom = $_POST['datefrom'];
    $status = $_POST['status'];

    $iddd = $_GET['id'];
   
   
   
    $sendd = "INSERT INTO `session` (`useremail`,`username`,`doctorname`,`doctorid`,`phoneno`,`day`,`dateto`,`datefrom`,`status`,`usertype`) 
    VALUES ('$useremail','$username','$doctorname','$iddd','$phoneno','$day','$dateto','$datefrom','$status','existing user')";
   $payss = mysqli_query($mysqli,$sendd);
   
   
//    echo '<script>alert("Verification massage will be send to your email")</script>';
   
   header("location:sessionpay.php?useremail=$email&doctorname=$doc");
   
   }
   ?>






     <?php   
// include('footer.php');
?>
<button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>





</div>


    
    
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/all.min.js"></script>
<script src="jquery-3.6.4.js"></script>
<script src="main.js"></script>
<script src = "script.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>

<script>
 const selectBtn = document.querySelector(".select-btn"),
      items = document.querySelectorAll(".item");
selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});
items.forEach(item => {
    item.addEventListener("click", () => {
        item.classList.toggle("checked");
        let checked = document.querySelectorAll(".checked"),
            btnText = document.querySelector(".btn-text");
            if(checked && checked.length > 0){
                btnText.innerText = `${checked.length} Selected`;
            }else{
                btnText.innerText = "Select Day";
            }
    });
})
</script>


  <!-- <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script> -->


    
   
       
</body>
</html>