<?php 
session_start();
    ?>
 

  <header>
        <div class="main">
            <nav id="navbar" class="bgcolor" >
                <div class="logo">
                <a href="homedon.php" class="log">Thera</a>
                <a href="homedon.php" class="logg">piva</a>
                <!-- <a href="homedon.php" class="logg"></a> -->
                </div>
               
  
                <div class="topnav" id="myTopnav">
                  
                <ul>
                  
                    <li class="home active"><a href="#home">HOME</a></li>
                    <li class="about"><a href="#about">ABOUTUS</a></li>
                    <li class="service"><a href="#service">SERVICE</a></li>
                    <li class="doctors"><a href="#doctors">DOCTORS</a></li>
                    <?php   
                    if(!empty($_SESSION['login'])){
                    if($_SESSION['login'] == "True"){
                        
                        echo '<li class="navli"><a href="profile.php?username='.$_SESSION['email'].'" class="logout"> Account</a> </li>';
                        echo '<li class="navli"><a href="logout.php" class="active">Logout</a> </li>';
                     
                     
                    } }
                    else{
                        echo '<a href="login.php"><li class="navli"> Login </li></a>
                            <a href="register.php"><li class="navli"> Register </li></a>';
                    }
                    ?>
                    <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                      <i class="fa fa-bars"></i>
                    </a></li>
                    
        
                </ul></div>
            
            </nav>
    
        </div>
    </header>
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
    