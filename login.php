<?php
require('database.php');
$unerror = $passerror = $noacc = '';



if(isset($_POST['submit'])){
    $email = htmlspecialchars($_POST['email']);
    $passw = htmlspecialchars($_POST['password']);
    $sel = "SELECT `email`, `password`, `status`,`role` from `users` WHERE `email` = '$email'";
    $do = mysqli_query($mysqli,$sel);
    $logg = $do -> fetch_array(MYSQLI_ASSOC);
    // print_r($logg);


    if(empty($logg)){
        $doc = "  SELECT `email`, `password`, `status`,`role` from `doctors` WHERE `email` = '$email'";
        $docdo = mysqli_query($mysqli,$doc);
        $dogg = $docdo -> fetch_array(MYSQLI_ASSOC);
        // print_r($dogg);

        if(empty($dogg)){
        $noacc = "Email Not Found";}
        elseif(!empty($dogg)){
            $logname = $dogg['email'];
            $logpass = $dogg['password'];
            $status = $dogg['status'];
            $role = $dogg['role'];
            if($email !== $logname){
                $unerror = "Wrong Email";
                echo($logname);
    
            }
            elseif($passw !== $logpass){
                $passerror = "Wrong Password";
            }
            elseif($email == $logname && $passw == $logpass){
                if($role == 'doctor'){
                    header('location: doctorlogged.php?email='.$email);
                }}}

    }
    elseif(!empty($logg)){
        $logname = $logg['email'];
        $logpass = $logg['password'];
        $status = $logg['status'];
        $role = $logg['role'];
        if($email !== $logname){
            $unerror = "Wrong Username";
            echo($logname);

        }
        elseif($passw !== $logpass){
            $passerror = "Wrong Password";
        }
        elseif($email == $logname && $passw == $logpass){



               

               if($status == 2){
                if($role == 'admin'){
                    header('location: adminlogged.php?email='.$email);

                }else{
                    header('location: logged.php?email='.$email);

                }

               }
               elseif($status==1){
                   echo '<script>alert("Your account is still pending for approval!")</script>';
   
               }
            }
           
         }
      }



    
      
        
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/Login.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 

    <title>Login</title>
  </head>
  <body>


    <header>
    <div class="main" >
        <nav id="navbar" class="bgcolor" >
            <div class="logo">
            <a href="home.html" class="log">Thera</a>
            <a href="home.html" class="logg">piva</a>
            </div>
            <ul>
                
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">SERVICE</a></li>
                <li><a href="#">DOCTORS</a></li>
                <li><a href="#">ACCOUNT</a></li>
                <li><a class="active" href="#">SIGN IN</a></li>
    
            </ul>
        </nav>

    </div>
</header>
 <div class="container1">
<form  method="POST">

            <div class="container2">
                <h1>Sign In</h1>
                <?php  if($noacc == "Username Not Found"){echo '<p class="error">'.$noacc.'</p>';}else{}; ?>

                <form>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <input type="email" name="email" value="<?php if(empty($usname)){}else{echo $usname;}; ?>"class="form-control" id="inputEmail4" placeholder="Email">
                            <?php  if($unerror == "Wrong Username"){echo '<p class="error">'.$unerror.'</p>';}else{}; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <input type="password" name="password" class="form-control" value="<?php if(empty($passw)){}else{echo $passw;}; ?>" id="inputEmail4" required placeholder="Password">
                            <?php  if($passerror == "Wrong Password"){echo '<p class="error">'.$passerror.'</p>';}else{}; ?>
                        </div>
                    </div>
                </div>

                <button type="submit"  name="submit" value="Login" class="btn">Sign In</button>

                <p style="text-align: center;">Creat new account <a href="register.php" > Sign Up</a> </p>
                <a class="forget" href="forget.html"> Forget Password</a>
                    </form>
            </div>
</div>

                
            
 <?php include('footer.php') ?>
            <button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>
                  
                   

</div>
        

            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/all.min.js"></script>
            <script src="jquery-3.6.4.js"></script>
            <script src="main.js"></script>
</body>
</html>