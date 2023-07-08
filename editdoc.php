

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
<?php
  include('database.php');



  $ms=$_GET['email'];
//   $email = $_SESSION['email'];
  
  $stm = "SELECT * FROM doctors WHERE email = '$ms'";
  $res = mysqli_query($mysqli , $stm);

  if (!$res) {
    die("Invalid query: ". $mysqli->error);
}

while ($row =  mysqli_fetch_assoc($res)) {
  
  ?>

<div class="container1">
        <div class="container2">
            <h5>Edit doctor's Information</h5>
<form method="POST" enctype="multipart/form-data">
<div style="display:flex;">
   
    
    <img src="doctors/<?php echo$row['photo'];?>" style="width: 7rem; border-radius: 6rem; height: 7rem;">
 
     </div>
     
     <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="name" >Name:</label>
        <input type="text" value="<?php echo $row["name"] ?>"  id="name" name="name">
        </div>
                </div>
            </div>


     
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="email" >Email:</label>
    <input type="text" value="<?php echo $row["email"] ?>"  id="email" name="email">
    </div>
                </div>
            </div>

  <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="age" >age:</label>
    <label for="age" style="font-size: 1.5rem; margin-right: 1rem;">age:</label>
    <input type="text" value="<?php echo $row["age"] ?>"  id="age" name="age">
    </div>
                </div>
            </div>

  <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="phone" >phone:</label>
    <input type="text" value="<?php echo $row["phone"] ?>"  id="phone" name="phone">
    </div>
                </div>
            </div>

  <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="location" >location:</label>
    <input type="text" value="<?php echo $row["location"] ?>"  id="location" name="location">
    </div>
                </div>
            </div>

  <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="price" >price:</label>
    <input type="text" value="<?php echo $row["price"] ?>"  id="price" name="price">
    </div>
                </div>
            </div>

  <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="speciality" >speciality:</label>
    <input type="text" value="<?php echo $row["speciality"] ?>"  id="speciality" name="speciality">
    </div>
                </div>
            </div>
   
   <input type="submit" value="Save" name="edit" class="btn" /> 

</form>
</div>
            </div>
<?php
 if (isset($_POST["edit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $speciality = $_POST['speciality'];


            $query = "UPDATE `doctors` SET `name`='$name',`email`='$email',`age`='$age',`phone`='$phone',`location`='$location',`price`='$price',`speciality`='$speciality' WHERE email='$email'";
            $result = mysqli_query ($mysqli, $query) or die (mysqli_error($mysqli)); 
            ?>


        <script type="text/javascript">
        alert("Changed Successfull.");
        window.location = "admin.php";
    </script>
    <?php
            }
}
      ?>   

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