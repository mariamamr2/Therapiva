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
    <link rel="stylesheet" href="style/user1.css">
    <link rel="stylesheet" href="style/videos.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 

    <title>Videos</title>
  </head>
  <body>
    <?php
  include('database.php');
 
    ?>
      <header>
   <?php include('nav.php');  ?>
  </header>


  <?php 
      $sql="SELECT * FROM  `video`";

       $result= mysqli_query($mysqli,$sql);
       $queryResult= mysqli_num_rows($result);
    ?>
 <div class="container3-" data-aos="fade-left" style="width: 100%; display: flex; flex-wrap: wrap; justify-content: space-around;">

<?php
foreach($result as $videoss) {
?>
         <div class="containerr">
    <video controls width: 54rem; height="300px">
    <source src="<?php echo($videoss['location']) ?>" type="video/mp4" >
    
    </video>
    <p class="titless"><?php echo($videoss['name']) ?></p>
</div>
    
         <?php
              }

               ?>
               </div>
<button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>





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





<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
   
</body>

</html>