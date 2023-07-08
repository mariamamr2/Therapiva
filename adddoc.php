<?php
  include('database.php');

  if(isset($_POST['submit'])){
    
    $namee = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $phone = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);
    $price = htmlspecialchars($_POST['price']);
    $speciality = htmlspecialchars($_POST['speciality']);
    $photo = ($_FILES['image']);




    

   if (isset($_POST["submit"])) {


    if ($_FILES["image"]["error"] === 4) {

        echo "<script> alert('Image Doesn't Exist')</script>";
    } else {
        $filename = $_FILES["image"]["name"];
        $filesize = $_FILES["image"]["size"];
        $tmpname = $_FILES["image"]["tmp_name"];

        $validimageextension = ['jpg', 'jpeg', 'png'];
        $imageextension = explode('.', $filename);
        $imageextension = strtolower(end($imageextension));
    }

    if (!in_array($imageextension, $validimageextension)) {
        echo "<script> alert('Invalid Extension')</script>";
    } else if ($filesize > 10000000) {
        echo "<script> alert('Image is large')</script>";
    } else {
        $newimagename = uniqid();
        $newimagename .= '.' . $imageextension;

        move_uploaded_file($tmpname, 'doctors/' . $newimagename);

        // $insert = "INSERT INTO `doctors`(`photo`) VALUES ('$newimagename')";
        // $result = mysqli_query($mysqli, $insert);

        $insert = "INSERT INTO `doctors`(`name`,`email`,`password`,`age`,`gender`,`phone`,`status`,`role`,`location`,`price`,`speciality`,`photo`) VALUES('$namee','$email','$pass','$age','$gender','$phone','2','doctor','$location','$price','$speciality','$newimagename')";
        $result = mysqli_query($mysqli,$insert);
        
          header ('location:admin.php');
    }
}
  }

?>


  




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link rel="stylesheet" href="add.css">

    <title>Document</title>
</head>
<body>




<form method="POST" enctype="multipart/form-data" style="text-align: revert; padding: 6rem;">
  
<div class="container3">
        <div class="container4">
            <h4>Add Doctor</h4>
            <form method="POST" enctype="multipart/form-data" >
       
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="name"  >Name:</label>
                    <input type="text" id="name" name="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="email"  >Email:</label>
                    <input type="text" id="email" name="email">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="pass"  >password:</label>
                    <input type="text" id="pass" name="pass">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="age" >age:</label>
                    <input type="text" id="age" name="age">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="gender" >gender:</label>
                    <input type="text" id="gender" name="gender">
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="phone" >phone:</label>
                    <input type="text" id="phone" name="phone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="location" >location:</label>
                    <input type="text" id="location" name="location">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="price" >price:</label>
                    <input type="text" id="price" name="price">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="speciality" >speciality:</label>
                    <input type="text" id="speciality" name="speciality">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="photo"  >photo</label>
                    <input type="file" name="image" id="image">
                    </div>
                </div>
            </div>
           
            <input type="submit" name="submit" id="adddoc" value="Add Doctor" />

          
                </form>
        </div>
</div>
     



</form>

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
</body>
</html>