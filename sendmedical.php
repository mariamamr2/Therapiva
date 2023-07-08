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
    <link rel="stylesheet" href="style/medical.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet">

    <title>Send Medical History</title>
</head>
<body>
    <?php 
    
    include('database.php');
    include('nav.php');
    ob_start();

    
    $ms=$_GET['doctor'];
    $mm = $_GET['useremail'];

    $hats = "SELECT * from `users` WHERE `email` = '$mm'";
    $ress= mysqli_query($mysqli,$hats);

     
        // $email = $_SESSION['email'];
    
        $hat = "SELECT * from `history` WHERE `useremail` = '$mm'";
        $res= mysqli_query($mysqli,$hat);

            $row =  mysqli_fetch_assoc($res)
  
?>


    
      <div class="mainn">
      <div class="medical">
          <h2>Medical History</h2>
          <p class="lock"></p>
          <form method="post">
          <div class="men">
            <h5 style="margin-bottom: 550px;">Mental Illness :</h5>
            <textarea name="illness" style="width: 35rem; height: 29rem;" style="word-break:break-word;" ><?php if(mysqli_num_rows($res)>0)echo($row['illness']); ?> </textarea>

        </div>
        <div class="men">
            <h5 style="margin-bottom: 116px;">Treatment :</h5>
            <textarea rows="4" cols="170"  name="treatment"  ><?php if(mysqli_num_rows($res)>0)echo($row['treatment']); ?> </textarea>
        </div>
        <div class="men">
            <h5>Chronic Diseases :</h5>
            <textarea rows="1" cols="170"  name="disease" ><?php if(mysqli_num_rows($res)>0)echo($row['disease']); ?> </textarea>

        </div>
        <div class="men">
            <h5>Blood Type :</h5>
            <textarea rows="1" cols="170"  name="blood"><?php if(mysqli_num_rows($res)>0)echo($row['blood']); ?> </textarea>

        </div>
        <div class="men">
            <h5>Allergic Reaction :</h5>
            <textarea rows="1" cols="170" name="allergic" ><?php if(mysqli_num_rows($res)>0)echo($row['allergic']); ?> </textarea>

        </div>
        <div class="men">
            <h5>Previous Pills :</h5>
            <textarea  rows="1" cols="170" name="pills" ><?php if(mysqli_num_rows($res)>0)echo($row['pills']); ?> </textarea>

        </div>
           <input type="submit" name="updatehistory" id="myBtn" value="update" ></input>
           <input type="submit" name="sendhistory" id="myBtn" value="send" style="margin-left: -10rem;margin-top: -2.3rem;"></input>

           </form>

 <?php
 if(isset($_POST['updatehistory'])){


   $illness = $_POST['illness'];
   $treatment = $_POST['treatment'];
   $disease = $_POST['disease'];
   $blood = $_POST['blood'];
   $allergic = $_POST['allergic'];
   $pills = $_POST['pills'];
   $userid = $_GET['userid'];            
   $doctorid = $_GET['doctorid'];               

//    $doctorid = $row['id'];
   

   $sendd = "UPDATE `history` SET `doctorid`='$doctorid' ,`userid`='$userid', `illness` = '$illness' , `treatment` = '$treatment', `disease` = '$disease' , `blood` = '$blood' , `allergic` = '$allergic' , `pills`= '$pills' WHERE `useremail` = '$mm'";

   $emm = mysqli_query($mysqli, $sendd); 
    if($emm){
          echo '<script>alert("Illness history updated")</script>';
  header('location: doctor.php');
    }else{

    }
  


}

if(isset($_POST['sendhistory'])){


    $illness = $_POST['illness'];
    $treatment = $_POST['treatment'];
    $disease = $_POST['disease'];
    $blood = $_POST['blood'];
    $allergic = $_POST['allergic'];
    $pills = $_POST['pills'];
    $userid = $_GET['userid'];            
    $doctorid = $_GET['doctorid'];               
 
 //    $doctorid = $row['id'];
    
 
    $send = "INSERT INTO `history` (`doctorname`,`useremail`,`doctorid`,`userid`,`illness`,`treatment`,`disease`,`blood`,`allergic`,`pills`) 
    VALUES ('$ms','$mm','$doctorid','$userid','$illness','$treatment','$disease','$blood','$allergic','$pills')";
    $em = mysqli_query($mysqli, $send); 
     if($em){
           echo '<script>alert("Illness history sent")</script>';
   header('location: doctor.php');
     
     }
 
 
 }
 


?>



     

    </div>
        

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
  </body>
</html>
