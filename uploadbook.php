<?php
  include('database.php');

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

<div class="containerbook">
        <div class="containerbook1">
            <h4>Send Book </h4>
<form method="POST" enctype="multipart/form-data" >
   
<div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="name"  >Book name:</label>
                    <input type="text" id="name" name="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="email"  >Choose book:</label>
                    <input type='file' name='file'>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label for="photo" >book cover:</label>
                    <input type='file' name='image'>
                    </div>
                </div>
            </div>

         
            <button type="submit" name="submit" class="btn" >Add Book</button>

</form>
</div>
</div>
</body>
</html>

<?php



if(isset($_POST['submit'])){
    
  // $booklocation = htmlspecialchars($_POST['file']);

  // $bookcover = ($_FILES['image']);




  
  $maxsize = 104857600; //5   mb  

  // $name = $_FILES['file']['name'];
  $target_dir = "books/";
  $target_file = $target_dir . $_FILES["file"]["name"];

  //VALID FILE EXTENSTION
     $pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  //valid file extenstions
      $extensions_arr = array('pdf','jpg', 'jpeg', 'png');

  //check extenstion
     if(in_array($pdfFileType, $extensions_arr))
     {
  //check file size
      if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)){
         echo "File is too large. File must be less than 5MB.";
      } else {
      if (move_uploaded_file($_FILES['file']['tmp_name'],$target_file)) {
              //insert record
            //   $query = "INSERT INTO books (`bookname`,`booklocation`,`bookcover`) VALUES ('$name','$target_file','$target_file' )";

            //   mysqli_query($mysqli,$query);

            //   echo "Uploaded successfully";
          }
      }

     }
     else {
          echo "Invalid extenstion";
      }
 







  $photo = ($_FILES['image']);
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
      move_uploaded_file($tmpname, 'books/' . $newimagename);

    //   $insert = "INSERT INTO `books`(`bookcover`) VALUES ('$newimagename')";
    //   $result = mysqli_query($mysqli, $insert);
    
  }
  $bookname = $_POST['name'];


  $query = "INSERT INTO books (`bookname`,`booklocation`,`bookcover`) VALUES ('$bookname','$target_file','$newimagename' )";

  mysqli_query($mysqli,$query);

  echo "Uploaded successfully";



}?>


