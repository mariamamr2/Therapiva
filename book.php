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
    <link rel="stylesheet" href="css/user1.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 

    <title>Book</title>
  </head>
  <body>
    
    <?php
  
    include('database.php');

    ?>

<?php 
          $ms=$_GET['bookname'];
        $sql="SELECT * FROM `books` WHERE `bookname`='$ms'";
        $result= mysqli_query($mysqli,$sql);
        $queryResult= mysqli_num_rows($result);
    
        foreach($result as $bookss) {
           ?>
         <iframe src="<?php echo($bookss['booklocation'])?>" width="100%" height="615px">
         </iframe>
      

           <?php
           
                  }
    
                   ?>

<body>
    
</body>
</html>