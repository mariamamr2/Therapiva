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
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style/homedon.css">

    <title>Home</title>
  </head>
  <body>
  <?php 
      include('database.php');
   ?>
    <header>
        <div class="main">
            <nav id="navbar" class="bgcolor" >
                <div class="logo">
                <a href="home.html" class="log">Thera</a>
                <a href="home.html" class="logg">piva</a>
                </div>
               
  
                <div class="topnav" id="myTopnav">
                  
                <ul>
                  
                    <li class="home active"><a href="#home">HOME</a></li>
                    <li class="about"><a href="#about">ABOUTUS</a></li>
                    <li class="service"><a href="#service">SERVICE</a></li>
                    <li class="doctors"><a href="#doctors">DOCTORS</a></li>
                    <li><a href="#">ACCOUNT</a></li>
                    <li><a class="active" href="#">LOGOUT</a></li>
                    
                    
        
                </ul></div>
            
            </nav>
    
        </div>
    </header>

<!-- -----slideshow part---------- -->

<section id="home">
 <div id="slide" class="carousel slide">
    
    <ol class="carousel-indicators">
        <li data-target="#slide" data-slide-to="0" class="active"></li>
        <li data-target="#slide" data-slide-to="1"></li>
        <li data-target="#slide" data-slide-to="2"></li>
    </ol>

   
     <!-- Slideshow images -->
     <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="images/home3.png" class="w-100" style="height: 700px;">
        </div>
        <div class="carousel-item">
            <img src="images/home10.png" class="w-100" style="height: 700px;">
        </div>
        <div class="carousel-item">
           <img src="images/home1.jpg" class="w-100" style="height: 700px;">
        </div>

        <!-- ------texts on slide----- -->

        <div class="slide2">
            <p>Therapiva is welcoming you</p>
        </div>
        <div class="slide3">
            <P>NEED EMERGENCY HELP FINDING A THERAPIST THAT SUITS YOUR NEEDS?</P>
            
            <!-- <p>You are loved and supported by so many people don’t ever forget that,</p> -->
        </div>
        <div class="slide4">
            <p>معك فى طريق صحتك النفسية</p>
            <!-- <p> we’ll always be here for you when things get tough you’re not alone in this.</p> -->
        </div>
        <div class="aboutandcontact" >
            <a href="login.php" style="transition: 5s;"><button type="submit" class="buttn1">Login</button></a>
            <a href="register.php"><button type="submit" class="buttn2">Register</button></a>
        </div>

     </div>
      

    <!-- Slideshow next/prev. buttons -->
    <a href="#slide" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    <a href="#slide" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>


</div>
</section>

<!-- -----who we are part---------- -->
<section id="about">
<div class="whoweare">
    <div class="firstpart"> 
        <h3>WHO WE ARE AND WHAT WE CAN DO?</h3>
        <div class="Whatever">
            <p>"Whatever you’re suffering from we’re going to fight this together"</p>
        </div>
     </div>
     <div class="firsticons">
     <div class="item" data-aos="fade-right" style="transition: 1.5s;">
        <span class="material-symbols-outlined" id="icon1">tips_and_updates</span>
        <h3 id="inno">Innovative Idea</h3>
        <p id="inno1">Therapiva provides the patient a simple secure way <br> to follow up with the doctor to make him comfortable</p>
    </div>
    <div class="item" data-aos="fade-up" style="transition: 1.5s;">
        <span class="material-symbols-outlined" id="icon2">psychology</span>
        <h3 id="spread">Spread Awareness</h3>
        <p id="spread1">Spread the importance and the awareness <br>  of mental illness.</p>
    </div>
    <div class="item" data-aos="fade-left" style="transition: 1.5s;">
    <span class="material-symbols-outlined" id="icon3">
new_releases
</span>
        <h3 id="yourmental">New Methods</h3>
        <p id="yourmental1">psychotherapy needs new methods <br> to cure patients effectively</p>

    </div>
</div>


</div>
</section>


<!-- ---test--picture + haga 3l ymen part---------- -->
<div class="usertest">
    <div class="pics">
        <!-- <img src="testhome.jpg"> -->
        <!-- <img src="Picsart_23-06-13_22-12-03-808.png" style="width: 500px; height: 500px;"> -->
        <img src="images/5 Ways You Can Support Your Local Mental Health Movement.jfif" style="width: 600px; height: 300px;">
    </div>
    <div class="texthome">
        <h1 > Therapiva is helping you...  </h1>
        <h3> Click the link below to know more about yourself </h3>
        <a href="test1.html" class="item" data-aos="zoom-in" style="transition: 1s;"> Let's Go</a>
    </div>
</div>

<!-- -----what we do part---------- -->
<section id="service">
<div class="whatwedo">
  <div class="secondpart"> 
    <h3>WHAT WE DO?</h3>
    <div class="awesome">
        <p>Awesome Features</p>
    </div>
  </div>
  <div class="secondicons">
    <div class="firstline">
    <div class="all">
       <span class="material-symbols-outlined" id="icon4">video_library</span>
       <h3 id="recvid">Recommend Videos </h3>
       <p id="recvid1">Videos help you to understand more about your illness</p>
   </div>
   <div class="all" >
        <span class="material-symbols-outlined" id="icon5"> diversity_3</span>
        <h3 id="group">Group Therapy</h3>
        <p id="group1">Helps you to communicate with others</p>

    </div>
   <div class="all">
       <span class="material-symbols-outlined" id="icon6">auto_stories</span>
       <h3 id="recbook">Recommend Books</h3>
       <p id="recbook1">Make use of lonely times</p>
   </div>
   <div class="seconddd">
   <div class="all">
      <span class="material-symbols-outlined" id="icon7">event</span>
       <h3 id="events">Events</h3>
       <p id="events1">Therapiva announce some events talking about mental health by physiological hosts.</p>
   </div>
   <div class="all">
       <span class="material-symbols-outlined" id="icon8">text_snippet</span>
       <h3 id="notes">Notes</h3>
       <p id="notes1">Patient can send notes to his doctor describing what he feels right now</p>
   </div>
   <div class="all">
       <span class="material-symbols-outlined" id="icon9">add_task</span>       
       <h3 id="tasks">Tasks For You</h3>
       <p id="tasks1">Stay Motivated and connected with <br> your doctor</p>
   </div>
</div>
</div> 
</div>



</div>
</section>
  
<div class="connt">
    <img class="image22" src="images/hands.jpg" >   
    <div class="all2">
    <span id="icon"class="material-symbols-outlined"> heart_plus</span>
    <?php
   
   $hata = "SELECT `name` from `users` WHERE `role`= 'user' ";
                  if ($result = mysqli_query($mysqli,$hata)) {
                    $rowcount = mysqli_num_rows( $result );
                ?>
    <p class="numb item" data-aos="zoom-in" style="transition: 1.5s;"><?php printf("%d\n", $rowcount);?></p>
    <?php } ?>
    <p class="text">Happy Clients </p>
</div>

<div class="all2">
    <span id="icon22"class="material-symbols-outlined">diversity_1 </span>
    <?php
   
                 
                $hats = "SELECT `name` from `doctors`";
                if ($result = mysqli_query($mysqli,$hats)) {
                  $rowcountt = mysqli_num_rows( $result );
              ?>
                   
    <p class="docnumb item"data-aos="zoom-in" style="transition: 1.5s;"><?php printf("%d\n", $rowcountt);?> </p>
    <?php } ?>
    <p class="text2">Doctors </p>
</div>


<div class="all2">
<span id="icon33" class="material-symbols-outlined"> cheer</span>
<?php
   $hatt = "SELECT `sponsorname` from `sponsors`";
  if ($resulttt = mysqli_query($mysqli,$hatt)) {
    $rowcounttt = mysqli_num_rows( $resulttt );
?>

<p class="sponnumb item" data-aos="zoom-in" style="transition: 1.5s;"><?php printf("%d\n", $rowcounttt);?></p>
<?php } ?>
<p class="text3">Sponsors </p>
</div>
</div>

<section id="doctors" >
<div class="ourdoctors">
    <div class="headerr">
        <h3>Our Doctors</h3>
        <div class="crew">
            <p>THE TALENT CREW</p>
        </div>
    </div>
    <div class="doctors item" data-aos="fade-left" style="transition: 1.5s;">

        <div class="twodoctors">
        <?php

$hat = "SELECT * from `doctors` WHERE `status`=2 AND `role`='doctor' ";
$dots = mysqli_query($mysqli,$hat); 
?>
<div class="container2" style="width:100%; display:flex; flex-wrap: wrap; gap:1rem;">
<?php
foreach($dots as $doctor){

  ?>
            <div class="doctor">
                <div class="img"> 
                <img src="doctors/<?php echo$doctor['photo'];?>" ></div>

                <div class="wordss">
                    <h5>
                    <?php echo($doctor['name']) ?>
                    </h5>
                    <h6>
                    <?php echo($doctor['speciality']) ?>
                    </h6>
                    <p>
                    <?php echo($doctor['location']) ?>
                    </p>
                    <div class="icons">
                        <p><b>Price:</b> <?php echo($doctor['price']) ?> / 60 mins</p>
                        <a href="newusersbook.php?doctorname=<?php echo $doctor['name'] ?>&id=<?php echo $doctor['id'] ?>" class="btn">Book Now</a>

                    </div>
                </div>
            </div>
            <?php  }  ?> 
                </div>
            </div>
        </div>
</section>

<div class="sponsers">
    <div class="oursponsers">
        <p>Our Sponsers</p>
   
    </div>
    <!-- <div class="container33" style="width:100%; display:flex; flex-wrap: wrap;"> -->
    <div class="sponsersimg item" data-aos="fade-right" style="transition: 5s;" >
    <?php

$hat = "SELECT * from `sponsors`";
$dots = mysqli_query($mysqli,$hat); 
?>

<?php
foreach($dots as $sponsors){

  ?>
                        
        <img class="" src="sponsors/<?php echo$sponsors['sponsorimg'];?>"  alt="Noon" >
   
        <?php }
  ?>
    </div>

</div>



<footer>
    <div class="footer-area">
    <div  class="main-footer">
        
        <div class="row">
                <div id="desc" class="">
                    <div  class="single-widget">
                        <div class="footer-logo">   
                          <div class="logo">
                              <a href="home.html" class="log">Thera</a>
                              <a href="home.html" class="logg">piva</a>
                              </div>  
                        
                        <p>Our website facilitates the communication 
                          between the doctor and the patient.</p>
                          <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                          </div>
                        </div>
                        
                    </div>
                </div>
                <div id="two">
                <div  class="col-md-3 col-sm-6 col-xs-12">
                  
                    <div id="first"class="single-widget">
                        <h3>information</h3>
                        <p class="lock"></p>
                        <ul>
                            <li class="footer-section">
                                <div  class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <a href=""><p>About Us</p></a>
                                    </div>
                                </div>
                            </li>                                    
                            <li class="footer-section">
                                <div class="row">
                                    <div class="row-md-2 col-sm-2 col-xs-2">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="row-md-10 col-sm-10 col-xs-10">
                                        <a href=""><p>Service</p></a>
                                    </div>
                                </div>
                            </li>                                
                            <li class="footer-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <a href=""><p>Our Doctors</p></a>
                                    </div>
                                </div>
                            </li> 
                            <li class="footer-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <a href=""><p>Our Sponsers</p></a>
                                    </div>
                                </div>
                            </li>                                     
                            <li class="footer-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <a href=""><p>Test Yourself</p></a>
                                    </div>
                                </div>
                            </li>                               
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div id="second" class="single-widget">
                        <h3>get in touch</h3>
                        <p class="lock"></p>
                        <p>Mohy El-Deen Abo El-Eiz Street<br>Dokki, Giza </p>
                        <p>+20 0111 850 2484</p>
                        <ul>
                            <li class="address-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10 single-widget-description noPadding">
                                        <span>02 2470 9390</span>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="address-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i class="fa fa-envelope"></i>                                       
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10 single-widget-description noPadding">
                                        <span>therapiva@gmail.com</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div></div>
        </div>
    </div>   
    <div class="footer-bottom text-center"></div>
  
    <!-- Copyright -->
    
    <div class="Copyright" style="background-color:rgba(0, 0, 0, 0.74) ; color: aliceblue;" >
  
    <div class="text-center p-4 ">
     © 2023 Copyright:
      <a class="text-reset fw-bold" href="#" style="text-decoration: none; color: aliceblue;">Therapiva</a>
    </div></div>
  </div></footer>







<!-- <p>Our Sponsors</p>
<div class="sponsors">
 <img class="sponsor-logo" src="MOFKERA.webp" >
 <img class="sponsor-logo" src="uber (2).png" >
 <img class="sponsor-logo" src="Uber-logo.jpg" >
 <img class="sponsor-logo" src="yalayoga.png" >
 <img class="sponsor-logo" src="path/to/sponsor5-logo.png" alt="Sponsor 5 logo">
 <img class="sponsor-logo" src="path/to/sponsor6-logo.png" alt="Sponsor 6 logo">
</div> -->
















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



    


    <!-- <script>
        const sections = document.querySelectorAll("section");
    const navLi = document.querySelectorAll("nav .topnav ul li");
    window.onscroll = () => {
      var current = "";
    
      sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        if (pageYOffset >= sectionTop - 60) {
          current = section.getAttribute("id"); }
      });
    
      navLi.forEach((li) => {
        li.classList.remove("active");
        if (li.classList.contains(current)) {
          li.classList.add("active");
        }
      });
    };
    </script> -->
  
  
  
    
   
       
</body>
</html>