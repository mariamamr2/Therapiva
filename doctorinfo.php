<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="style/edit.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>


    <title>Doctor edit</title>
</head>

<body>
 <?php
 include("database.php");
 include("nav.php");

  $email = $_SESSION['email'];
 $stm = "SELECT * FROM doctors WHERE email = '$email'";
 $res = mysqli_query($mysqli , $stm);

 if (!$res) {
     die("Invalid query: ". $mysqli->error);
 }

 while ($row =  mysqli_fetch_assoc($res)) {
   
 
  ?> 

    
    <div class="allcontant">
        <div class="leftside">
            <h2 class="text2">We try to keep your security up to date as much as we can</h2>
            <div id="animContainer"></div>
        </div>
        <div class="contact-form">
          <form method="post" autocomplete="off">
     
                <h3 class="title">Update Your Information</h3>
                
                <div class="input-container">
                    <input type="text" name="name" class="input" />
                    <label for=""><?php echo $row["name"]; ?></label>
                    <span>Username</span>
                </div>

                <div class="input-container">
                <input type="text" name="email" class="input" value="<?php echo $row["email"] ?>" />
                    <label for=""></label>
                    <span>Email</span>
                </div>

                <div class="input-container">
                    <input type="number " name="phoneno" class="input" value="<?php echo $row["phone"] ?>" />
                    <label for=""></label>
                    <span>Phone Number</span>
                </div>

                <div class="input-container">
                    <input type="number" name="age" class="input" value="<?php echo $row["age"] ?>"/>
                    <label for=""></label>
                    <span>Age </span>
                </div>

                <div class="input-container">
            <input type="text" name="age" class="input" value="<?php echo $row["location"] ?>"/>
            <label for=""></label>
            <span>Location </span>
           </div>

          <div class="input-container">
            <input type="number" name="age" class="input" value="<?php echo $row["price"] ?>"/>
            <label for=""></label>
            <span>price </span>
          </div>
              <input type="submit" value="Save" name="edit" class="btn" /> 

            </form>
            <?php

if(isset($_POST["edit"])) {
  $phoneno = $_POST['phoneno'];
  $age = $_POST['age'];
  $email = $_POST['email'];

 


  $query = "UPDATE `users` SET `phone`='$phoneno',`age`='$age',`email`='$email' WHERE email='$email'";
  $result = mysqli_query ($mysqli, $query) or die (mysqli_error($mysqli)); 
  ?>


<script type="text/javascript">
alert("Update Successfull.");
window.location = "doctor.php";
</script>
<?php
}
?>   
        </div>
        
    </div>


    <?php 
}
?>
<?php
 include("footer.php");
    ?>
      <button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>


<script src="app.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js'></script> 
<script  src="./form.js"></script> 

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
  const togglePassword = document.querySelector('#togglePassword');
  const togglePassword1 = document.querySelector('#togglePassword1');
const password = document.querySelector('#pass');
const conpassword = document.querySelector('#conpass');

togglePassword.addEventListener('click', function (e) {
// toggle the type attribute
const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
password.setAttribute('type', type);
// toggle the eye slash icon
this.classList.toggle('fa-eye-slash');})

togglePassword1.addEventListener('click', function (e) {
// toggle the type attribute
const type = conpassword.getAttribute('type') === 'password' ? 'text' : 'password';
conpassword.setAttribute('type', type);
// toggle the eye slash icon
this.classList.toggle('fa-eye-slash');})
</script>



<script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
</body>
</html>
