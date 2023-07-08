<?php
  include('database.php');

  if(isset($_POST['submit'])){
    
    $sponsorname = htmlspecialchars($_POST['sponsorname']);
    $sponsorimg = ($_FILES['image']);
    $discount = htmlspecialchars($_POST['discount']);



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

        move_uploaded_file($tmpname, 'sponsors/' . $newimagename);


        $insert = "INSERT INTO `sponsors`(`sponsorname`,`discount`,`sponsorimg`) VALUES('$sponsorname','$discount','$newimagename')";
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
    <link rel="stylesheet" href="style/footer.css">


    <title>Document</title>
</head>
<body>





<div class="container1">
    <div class="container2">
        <h3>Add Sponser</h3>
        <form method="POST" enctype="multipart/form-data">
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Sponser's Name</label>
        <input type="text" id="name" name="sponsorname">
        </div>
            </div>
        </div>

      <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="discount">Discount code</label>
    <input type="text" id="email" name="discount">
    </div>
            </div>
        </div>
   
<div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="photo">Sponsor image</label>
    <!-- <input type="file" id="photo" name="photo"> -->
    <input type="file" name="image" id="image">
    </div>
            </div>
        </div>

        <button type="submit" class="btn" name="submit" value="Add Sponsor">Book</button>
            </form>
    </div>
</div>

</body>
</html>