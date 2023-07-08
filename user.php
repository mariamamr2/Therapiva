<?php
include("database.php");





?>
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
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 


    <title>User</title>
  </head>
  <body>
  <div class="allcontant">
        <?php include('nav.php');
        $email = $_SESSION['email'];

        $hat = "SELECT * from `users` WHERE `email` = '$email'";
        $do= mysqli_query($mysqli,$hat);

        $profd = mysqli_fetch_array($do);



?>
    



<div class="alltop" >
  <div class="leftside">
    
      <img src="images/avatar7.png">
      <h4><?php echo $profd['name'] ?></h4>
      <div class="editinfo">
        <span class="material-symbols-outlined">page_info</span>
        <a href="edit.php">See your info</a></div>
        <div class="Schedule">
          <span class="material-symbols-outlined">chat</span>
          <button id="myBtn">Notes</button>
        </div>
          <div class="Schedule">
            <span class="material-symbols-outlined">flash_on</span>
            <button id="myBtnn">Tasks</button>
          </div>
          <div class="Schedule">
            <span class="material-symbols-outlined">
              date_range
              </span>
            <button id="myBtnnn">Schedule</button>
          </div>
          <div class="allspan">
            <!-------------------------------------- EVENTS ------------------------------ -->
            <span id="span" class="material-symbols-outlined">
              waving_hand
              </span>
              <?php
    $even = "SELECT * from `events`";
    $events = mysqli_query($mysqli,$even); 
    $events =  mysqli_fetch_assoc($events); {


   ?>
            <div class="popup2" onclick="myFunction()">Events
              
            <span class="popuptext" id="myPopup"> Date & Time<br>  <p> Meet our host  <?php echo($events['host']) ?> at  <?php echo($events['date']) ?> at  <?php echo($events['time']) 
            ?> for <?php echo($events['price']) ?></p>
  

     <a href="eventpay.php?eventname=<?php echo($events['name'])?>&eventprice=<?php echo($events['price']) ?>" name="book" >Book Now</a></span>

     <?php
    }?>
            </div>
          </div>
          
      
    </div>

      <div class="modalcontainer">
  
       
     
      <!------------------------------ NOTES Modal ------------------------------>
             
     <div id="myModal" class="modal">
     
             <!-- Modal content -->
       <div class="modal-content">
       <div class="modal-header">
    
     <h3>How you feel right now ?</h3><!--Your Feelings Matter !-->
     <span class="close">×</span>
     </div>
     <div class="modal-body">
       
     <!-- <p>اااااااااااااااااااااااااه</p> -->
     <div class="messages">
      <form method="post">

       <textarea rows="11" cols="132" type="text" name="notetext" placeholder="Feel free to open up here..."> </textarea>
       <input type="submit" name="submitnote">
</form>
    
     </div>
     <!-- <a href="#" >Send</a> -->
    
<?php 
   if(isset($_POST['submitnote'])){

      $notetext = $_POST['notetext'];
      $patientname = $profd['name'];
      $patientemail = $profd['email'];
      $doctorname = $profd['doctorname'];
      $doctorid = $profd['doctorid'];
      $userid = $profd['id'];

      $sendd = "INSERT INTO `notes`(`doctorname`,`doctorid`,`email`,`username`,`userid`,`note`) VALUES ('$doctorname','$doctorid','$patientemail','$patientname','$userid','$notetext')";
      $emm = mysqli_query($mysqli,$sendd);

   }

?>
 
    
     </div>
     <!-- <div class="modal-footer">
     <h3>Modal Footer</h3>
     </div> -->
     </div>
     </div>
      <!----------------------------- TASKS Modal ------------------------------------->
         
     <div id="myModall" class="modal">
     
       <!-- Modal content -->
       <div class="modal-content">
         <div class="modal-header">
           <h3>Your Tasks </h3>
           <span class="close">×</span>
         </div>
         <div class="modal-body">
         <?php

       $geeb = "SELECT * from `tasks` where `useremail` =  '$email'";
       $rhat = mysqli_query($mysqli,$geeb);
       foreach($rhat as $task){
  
  ?>

  <div>
     <p><?php echo($task['task']) ?></p>
  </div>

<?php 
}


?>

            <!-- -------rating stars------ -->
            <!-- <h4 class="startext">Do you find your uploaded tasks helpful?</h4> -->
           <div class="rate">
             <h4 class="startext">Do you find your uploaded tasks helpful?</h4>
             <input type="radio" id="star5" name="rate" value="5" />
             <label for="star5" title="text">5 stars</label>
             <input type="radio" id="star4" name="rate" value="4" />
             <label for="star4" title="text">4 stars</label>
             <input type="radio" id="star3" name="rate" value="3" />
             <label for="star3" title="text">3 stars</label>
             <input type="radio" id="star2" name="rate" value="2" />
             <label for="star2" title="text">2 stars</label>
             <input type="radio" id="star1" name="rate" value="1" />
             <label for="star1" title="text">1 star</label>
           </div>
          
           
         </div>
         
         <!-- <div class="modal-footer">
           <h3>Modal Footer</h3>
         </div> -->
       </div>
     </div>
    
     <!----------------------------- SCHEDULE Modal --------------------------------------->
    
       <div id="myModalll" class="modal">
       
       
       <div class="modal-content">
       <div class="modal-header">
         <h3>Your Schedule</h3>
     
       <span class="close">×</span>
       </div>
       <div class="modal-body">
         <table class="table">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Day</th>
           <th scope="col">Time</th>
           <th scope="col">Type </th>
         </tr>
       </thead>
       <tbody>

       <?php
         $geeb = "SELECT * from `daysession` where `useremail` =  '$email'";
         $rhat = mysqli_query($mysqli,$geeb);
         foreach($rhat as $schedule){
  ?>
      <tr>
        <th scope="row">1</th> 
        <td><?php echo($schedule['day']) ?></td>
        <td><?php echo($schedule['time']) ?></td>
        <td><?php echo($schedule['type']) ?></td>
        <td><?php echo($schedule['statuss']) ?></td>

        </tr>  



<?php  } ?>
        <?php
  $eventname='name';
   if(isset($_POST["book"])) {
       $hat = "SELECT * from `events` WHERE `name` = '$eventname' ";
       $dots = mysqli_query($mysqli,$hat); 
     
      foreach($dots as $event){?>
        <td><?php echo($event['date']) ?><br> 11/2/2023 </td>
        <td>7:00 PM</td>
        <td>Session</td>
      </tr>
  
     <?php
     }

 }


 
 ?>
       </tbody>
     </table>

     <?php      
    $ppp = $profd['doctorname'];
    $ddo = "SELECT `id` from `doctors` where `name` = '$ppp'";
    $rtt = mysqli_query($mysqli,$ddo);

    $asoc = mysqli_fetch_assoc($rtt);
    ?>
  <a  href="bookyoursession.php?useremail=<?php echo ($profd['email']); ?>&doctor=<?php echo($profd['doctorname']) ?>&id=<?php echo($asoc['id']) ?>"  id="booksession" >Book Your Session</a>


          </div>
        </div>
      </div> 
    </div>


     


       
       <!-- <div class="modal-footer">
       <h3>Modal Footer</h3>
       </div> -->
       


<div class="rightside">

 
            

         <?php
         $hat = "SELECT * from `books`";
         $dots = mysqli_query($mysqli,$hat); 
         ?>
        <section class="containerr" >
    <form id = "books" name = "books">
        <!-- <h4>This is best quiz on the internet!</h4> -->
  <span id="left-arrow" class="arrow">&lsaquo;</span>
  <span id="right-arrow" class="arrow">&rsaquo;</span>
  <div class="slider" id="slider">

        <?php
         foreach($dots as $doc){?>
         <div>
                      <p class="many_text">
                      <a href="book.php?bookname=<?php echo($doc['bookname'])?>"> <img src="books/<?php echo$doc['bookcover'];?>" style="height: 250px; width: 190px;"></a> 
                      
                    </div>  
               <?php }
        ?>
         </div>
         </form>
</section>
  
   <hr>
   <?php
         $useremail=$profd['email'];
         $ha = "SELECT * from `history` WHERE `useremail` = '$useremail'";
         $dot = mysqli_query($mysqli,$ha);
         foreach($dot as $history){
     
          ?>
    
   <div class="text">
    <p><?php echo($history['illness']) ?></p>
    <p><?php echo($history['treatment']) ?></p>

    <?php
         } ?>





   </div>






   <a id="medical" class="button" href="medical.php?useremail=<?php echo($profd['email'])?>&doctor=<?php echo $profd['doctorname']; ?>">View your Medical History <span class="material-symbols-outlined">
arrow_right_alt
</span></a>


  
</div>
</div>
<div class="downside">

    <div class="hp">
     
    <h3>Mental self care ideas</h3>
    <p class="lock1"></p></div>
    <hr>
    <section class="containerr" >

      <div class="slider" id="slider">

      <?php 
        
        $sql="SELECT * FROM  `video`";
        $result= mysqli_query($mysqli,$sql);
        $queryResult= mysqli_num_rows($result);


        $i = 0;
       foreach($result as $videoss) {
           if (++$i == 4) {
               break;
             }?>

<div class="box"><video controls style=" height: 100%;  width:100% ;">
               <source src="<?php echo($videoss['location']) ?>" type="video/mp4" >
       </video></div>
       
          

           <?php
           
                  }
    
                   ?>
           </div>
    </section>
           <div class="dummy"> <a href="videos.php">See More</a>
            <span class="material-symbols-outlined">
            play_arrow</span></div>
       </div>
 
</div>
<button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>


<?php include('footer.php') ?>

    
  
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



<script>

var modal = document.getElementById('myModal');
var modall = document.getElementById('myModall');
var modalll = document.getElementById('myModalll');


var btn = document.getElementById("myBtn");
var btnn = document.getElementById("myBtnn");
var btnnn = document.getElementById("myBtnnn");

var span = document.getElementsByClassName("close")[0];
var spann = document.getElementsByClassName("close")[1];
var spannn = document.getElementsByClassName("close")[2];


btn.onclick = function() {
modal.style.display = "block";
}

span.onclick = function() {
modal.style.display = "none";
}

window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}
btnn.onclick = function() {
modall.style.display = "block";
}

spann.onclick = function() {
modall.style.display = "none";
}

window.onclick = function(event) {
if (event.target == modall) {
  modall.style.display = "none";
}
}
btnnn.onclick = function() {
modalll.style.display = "block";
}

spannn.onclick = function() {
modalll.style.display = "none";
}

window.onclick = function(event) {
if (event.target == modalll) {
  modalll.style.display = "none";
}
}




</script>
  <!-- <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script> -->


    
   
       
</body>
</html>