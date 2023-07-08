<?php
require('database.php');
ob_start();

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
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link rel="stylesheet" href="newdoctor.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/bb.css">
    <!-- <link rel="stylesheet" href="style/footer.css"> -->
    <link rel="stylesheet" href="bb.css">
    

    <title>New Doctor</title>


    <?php include('nav.php');
    ?>
  
  
<body>
  <?php
        $email = $_SESSION['email'];
        $hat = "SELECT * from `doctors` WHERE `email` = '$email'";
        $do= mysqli_query($mysqli,$hat);

        $profd = mysqli_fetch_array($do);

        $docname = $profd['name'];
        $doctorid = $profd['id'];
        // print_r($doctorid);
?>
    <div class="allcontant">
 
<div class="alltop" >
  <div class="leftside">
    
    <img src="images/doc.jpg">
    <h4><?php echo $profd['name']?></h4>

      <div class="editinfo">
        <span class="material-symbols-outlined">
            page_info
            </span>
            <a href="doctorinfo.php">See your info</a></div>

        
      <div class="Schedule">
        <span class="material-symbols-outlined">
          pace
          </span>
       <button id="myBtn">Appointments</button></div>
       <div class="Schedule">
        <span class="material-symbols-outlined">
          movie
          </span>
        <button id="myBtnn">Videos</button>
      </div>
    
      
    </div>

      <!----------------------------- 1st Modal ------------------------------>
      <div class="modalcontainer">
        <div class="firstmodal">
        <div id="myModal" class="modal">

           
          <!-- Modal content -->
    <div class="modal-content">
    <div class="modal-header">
  
  
  <span class="close">×</span>
  </div>
  <div class="modal-body">
    
    <div class="contai">
      
      <form method="post">
        <div class="row">
          <div class="col">
              <div class="form-group">
                  <label for="inputEmail4">Name</label>
                  <input type="name" name="usernamee" value="<?php if(empty($usernamee)){}else{echo $usernamee;}; ?>"  class="form-control" id="inputEmail4" placeholder="Name">
                </div>
          </div>
      </div>
      <div class="row">
          <div class="col">
              <div class="form-group">
                  <label for="inputEmail4">Email</label>
                  <input type="email" name="useremail" value="<?php if(empty($useremail)){}else{echo $useremail;}; ?>"  class="form-control" id="inputEmail4" placeholder="Email">
                </div>
          </div>
      </div>
          
      <div class="row">
          <div class="col">
              <div class="form-group"> 
                  <label class="flabel" for="day">Day</label>
                  <input type="date" name="day" value="<?php if(empty($day)){}else{echo $day;}; ?>" class="form-control" id="day" placeholder="Day">
                  
  
                  
              </div>
          </div>
          <div class="col">
              <div class="form-group">
                  <label class="flabel" for="time">Time</label>
                  <input type="time" name="time" value="<?php if(empty($time)){}else{echo $time;}; ?>" class="form-control" id="time" placeholder="Time">
  
              </div>
          </div>
      </div>
     
      <div class="row">
      <div class="col"> 
          <div class="form-group">
              <label class="" for="typee">Type</label>
              <select class="custom-select" name="type" id="typee">
                  <option selected>Choose...</option>
                  <option name="type" value="session" <?php if(empty($type)){}else if($type == 'session'){echo 'checked';}; ?>>Session</option>
                  <option name="type" value="group therapy" <?php if(empty($type)){}else if($type == 'group therapy'){echo 'checked';}; ?>>Group Therapy</option>
              </select>
          </div></div>
      </div>
      <div class="row">
      <div class="col">
          <div class="form-group">
              <label class="" for="Statuss">Status</label>
              <select class="custom-select" name="statuss" id="Statuss">
                  <option selected>Choose...</option>
                  <option name="statuss" value="online" <?php if(empty($statuss)){}else if($statuss == 'online'){echo 'checked';}; ?>>Online</option>
                <option name="statuss" value="offline" <?php if(empty($statuss)){}else if($statuss == 'offline'){echo 'checked';}; ?>>Offline</option>
          
              </select>
          </div></div>
      </div>
      
      <button type="submit" name="sendsession" class="btn">submit</button>
      
      <?php 

if(isset($_POST['sendsession'])){

    $useremail = $_POST['useremail'];
    $usernamee = $_POST['usernamee'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $type = $_POST['type'];
    $statuss = $_POST['statuss'];

   //  $usernamee = $patient['name'];
    $doctorrname = $docname;

    $senddsession = "INSERT INTO `daysession`(`doctorrname`,`doctorid`,`useremail`,`usernamee`,`day`,`time`,`type`,`statuss`) VALUES ('$docname','$doctorid','$useremail','$usernamee','$day','$time','$type','$statuss')";
    $emm = mysqli_query($mysqli,$senddsession);
    echo '<script>alert("session recorded")</script>';
}

?>
          </form>
  </div>
  
  
  </div>
  <!-- <div class="modal-footer">
  <h3>Modal Footer</h3>
  </div> -->
  </div>
  


</div></div>
      <div class="secondmodal">

      
<div id="myModall" class="modal">
     
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
     
      <span class="close">×</span>
    </div>
    <div class="modal-body">
      <p>Here's you can send a motivational video to your patients</p>
      <div class="uploudsend">
                 
<?php
          if (isset($_POST['btn_upload'])){
        $maxsize = 104857600; //5   mb  

        $name = $_FILES['file']['name'];
        $target_dir = "videos/";
        $target_file = $target_dir . $_FILES["file"]["name"];

        //VALID FILE EXTENSTION
           $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        //valid file extenstions
            $extensions_arr = array("mp4","mp3","ogg","avi","3gp","mov","mpeg","mp4v");

        //check extenstion
           if(in_array($videoFileType, $extensions_arr))
           {
        //check file size
            if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)){
               echo "File is too large. File must be less than 5MB.";
            } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'],$target_file)) {
                    //insert record
                    $query = "INSERT INTO video (name,location) VALUES ('$name','$target_file' )";

                    mysqli_query($mysqli,$query);

                    echo "Uploaded successfully";
                }
            }

           }
           else {
                echo "Invalid extenstion";
            }
       }
       ?>
       <form method="post"  enctype="multipart/form-data">
       <!-- <button class="button1"><span class="material-symbols-outlined"> -->
       <input type='file' name='file' class="button1"><span class="material-symbols-outlined">
        upload
        </span>Upload Video</button>
        

       <input type='submit' name="btn_upload" class="button2" value="Upload Video"><span class="material-symbols-outlined">
        send
        </span>Send Video</input>
      </form>
      </div>
      
    </div>
    
    
  </div>
</div></div>

    </div>

    

     

<!-- <div class="modal-footer">
<h3>Modal Footer</h3>
</div>
</div>
</div>
    
 
  </div>
 -->


<div class="rightside">
  <div class="rightsideheader">
     
    <h3>Daily Planner</h3>
    <a href="docviewsession.php?docname=<?php echo($profd['name'])?>"><span class="material-symbols-outlined">
notifications_active
</span></a>
    </div>
  <div class="table2">
    <div class="content">
      <div class="containertable1">
   
        <div  class="table-responsive custom-table-responsive">
  
          <table id="table2" class="table custom-table">
            <thead>
              <tr>  
  
  
                <th scope="col" class="name">Name</th>
                <th scope="col" class="date">Date & Time</th>
                <th scope="col" class="type">Type</th>
                <th scope="col" class="status">Status</th>
                <th scope="col" class="delete1"></th>
                
  
              </tr>
            </thead>
            
            <tbody>
            
            <?php
                    

                    $sess = "SELECT * FROM `daysession` WHERE `doctorrname` = '$docname'";
                    $dots = mysqli_query($mysqli,$sess); 

                    foreach($dots as $senddsession){?>
                   <tr  scope="row">
                      <td> <?php echo($senddsession['usernamee']) ?></td>
                      <td class="timedate"><?php echo($senddsession['day']) ?><br><?php echo($senddsession['time']) ?></td>
                      <td> <?php echo($senddsession['type']) ?></td>
                      <td> <?php echo($senddsession['statuss']) ?></td>
                   
                      <!-- <td><button class="material-symbols-outlined" name="deletesess"> close </button></td> -->

                <!-- <td><a href="#pop"><span class="material-symbols-outlined">
                  close
                  </span></a> -->
                  <td>
                  <a href="<?php echo 'doctor.php?del=' . $senddsession['useremail']; ?>"><span class="material-symbols-outlined">close</a>
                
                
                </td>
              </tr>
              
           
 
              <?php
                  } ?>
            </tbody> 
            
          </table>
        </div>
      
    </div>


    </div>
    <?php if(isset($_GET['del'])){

?>
    <div class="deletepattt">
       <form method="POST" >
       
         <p class="messg">You are about to delete your appointment <br> Are you sure ?</p>
       
         
           <div class="btnss">
             <input type="submit" name="deletepatient" value="Delete">
             <a href="doctor.php">Cancel</a>
           </div>
       </form>



      
           <?php
             if(isset($_POST['deletepatient'])){
               $session = $_GET['del'];

              //  $ssq = "DELETE * FROM `daysession` where `useremail` = '$session'";
              //  $ssq = "UPDATE `daysession` SET `doctorname` = '' where `email` = '$patienttemail'";
               $ssq = "DELETE FROM `daysession` where `useremail` = '$session'";
             
               $dode = mysqli_query($mysqli,$ssq);

               if($dode){
                 header('location:doctor.php');
               }else{
                 
               }

             }}else{

             }
           
           ?>
         

</div> 

    
      </div>

</div>

</div>
</div>
<div class="downside">
  <div class="downsideheader">
     
    <h3>Your Patients</h3>
    <a href="#popup4" class="button" ><span class="material-symbols-outlined">
      person_add
      </span></a>
    </div>
    

  <div class="dailytable">
    
    
    <div class="containertable">
      <div id="popup4" class="overlayy">
        <div class="popupp">
          <h3>Requests</h3><hr>
          <a class="closee" href="#">&times;</a>
          <div class="contentt">
            <table>
              <tbody class="request">
              
<?php
    $query = "SELECT * FROM users WHERE `status`=1 AND `role`='user' AND `doctorname` = '$docname' ";
    $result = mysqli_query($mysqli,$query);
    while($row = mysqli_fetch_array($result)){
                ?>
            <tr>
             <!-- <td class="id"><p><?php echo $row['id'].' '.$row['id'];?></p></td> -->
              <td class="first"><p><?php echo $row['name']?></p></td>
              <form action ="doctor.php" method ="post">
              <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
              <td><button  name="approve" value="approve" id="appro">Approve</button></td>
              <td><button id="den" name="deny" value="deny">Deny</button> </td>
              </form></tr> 
              <?php 
  } ?> 
            </tbody>
            </table>
          
          </div>
        </div>
      </div>
      <?php 
           if(isset($_POST['approve'])){
           $id=$_POST['id'];
           $select = "UPDATE users SET status = '2' WHERE id ='$id'";
           $result= mysqli_query($mysqli,$select);
            header('location: doctor.php');
           }
          if(isset($_POST['deny'])){
              $id=$_POST['id'];
              $select = "DELETE FROM users WHERE id ='$id'";
          $result= mysqli_query($mysqli,$select);
           echo '<script type="text/javascript">';
           echo 'alert ("user denied")';
           echo'window.location.href="admin-approval.php"';
           echo'</script>';
          }
          ?>   
            
            <!-- <div class="downside">
        <div class="dailytable">
          <div class="containertable"> -->
      <div id="table1" class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  

              <th scope="col" class="name">Name</th>
              <th scope="col" class="date">Date & Time</th>
              <th scope="col" class="medical">Medical History</th>
              <th scope="col" class="note">Notes</th>
              <th scope="col" class="task">Tasks</th>
              <th scope="col" class="delete"></th>

            </tr>
          </thead>
          <tbody>
          <?php 
                    $hattly = "SELECT * FROM `users` WHERE `doctorname` = '$docname' AND `status`= 2";
                    $dot = mysqli_query($mysqli,$hattly);

                    foreach($dot as $patient){?>
            <tr  scope="row">
              
            <td id="name"><?php echo($patient['name']) ?></td>

            <td class="timedate"><?php echo($patient['email']) ?></td>

              <td>
                <div class="box">
                  <a id="medical" class="button" href="sendmedical.php?useremail=<?php echo($patient['email'])?>&doctor=<?php echo($docname) ?>&userid=<?php echo($patient['id'])?>&doctorid=<?php echo($profd['id'])?>">Medical History</a>
                  </div>
                  
               
              </td>
              <td>

                <div class="box">
             
                  <!-- <a id="notes" href="#popup2?useremail=<echo($patient['email'])?>" class="button">View Notes</a></div> -->
                  <a href="<?php echo 'doctor.php?adm=' . ($patient['name']); ?>" id="notes" class="button">View Notes</a></div>

                    </div>   
                  <!-- <div id="popup2" class="overlay"> -->
                  <?php if(isset($_GET['adm'])){

// $patname = $patient['name'];  
$patname = $_GET['adm'];

$hatmsg = "SELECT * FROM `notes` WHERE `username` = '$patname'";
        $doess = mysqli_query($mysqli,$hatmsg);

                  // $ms=$_GET['adm'];


?>

 <div class="notenote">
       <div class="popup">
       <div class="content" id="chat">
       <a class="close" href="doctor.php">&times;</a>

        <?php
    foreach($doess as $notemsg){
      ?>
      
       <h4><?php echo($notemsg['username']) ?></h4>

                        <div class="container">
                        <img src="images/avatar7.png" alt="Avatar" style="width:100%;">
                        <p><?php echo($notemsg['note']);?> </p>
       <!-- <a href="doctor.php">Close</a> -->
                  </div><?php }} ?>
            
                  </div>
                  </div>
                  </div>
        



              <td>
                <div class="box">
                <a href="<?php echo 'doctor.php?not=' . ($patient['name']) ?>&email=<?php echo($patient['email']) ?>&userid=<?php echo($patient['id']) ?>"  class="tasksbtn">Send Tasks</a></div>
    </div></td>
                         <?php if(isset($_GET['not'])){

                          
                          $name = $_GET['not'];
                          $em = $_GET['email'];    
                          $userid = $_GET['userid'];               
                          $hatmsg = "SELECT * FROM `users` WHERE `name` = '$name' AND `email` = '$em'";
                          $does = mysqli_query($mysqli,$hatmsg);
                          if (!$does) {
                            die("Invalid query: ". $mysqli->error);
                        }
                    
                        while ($row =  mysqli_fetch_assoc($does)) {
                          
                          
                      
                     
?>
          
                 <!-- <button class="tasksbtn" onclick="window.location.href='#popup3'">Send Tasks</button></div> -->
                 <div class="tasktask">
                 <!-- <div id="popup3" class="overlay"> -->
                    <div class="popup">
                      <h2>Requested Task</h2>
                      <a class="close" href="doctor.php">&times;</a>
                      <div class="content">

                      <form method="post">
                      <textarea name="sendtaskform" id="tasktext" cols="60" rows="8"></textarea>
                        <input type="submit" name="sendtask" id="texttttt">
                        </form>
                  </div>
                  </div>
                        </div>
                        </div>

                    <?php
               
            }             }           

   
?>
                    
                  
                          
                    
                    <!-- <td  ></td>  -->
              <!-- <td><a href="#poppatient"><span class="material-symbols-outlined">
                delete </span></a></td> -->
                <td>
                  <a href="<?php echo 'doctor.php?dell=' . $patient['email']; ?>" class="material-symbols-outlined">Delete</a>
                </td>
                    </tr>
                        <?php
                    } ?>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            
          
          </tbody>
        </table>
      </div>


    
    
 </div>


 <?php if(isset($_GET['dell'])){

?>


 <div class="deletepattt">
       <form method="POST" >
       
         <h5>You are about to delete the Patient's account.</h5><br>
         <p class="messg">This will delete patient's Medical history, Notes and Tasks<br> Are you sure you want to delete ?
       </p>
         
           <div class="btnss">
             <input type="submit" name="deletepatient" value="Delete">
             <a href="doctor.php">Cancel</a>
           </div>
       </form>

           <?php
             if(isset($_POST['deletepatient'])){
               $patienttemail = $_GET['dell'];

              //  $ssq = "UPDATE `users` SET `doctorname` = '' where `email` = '$patienttemail'";
               $ssq = "DELETE FROM `users` where `email` = '$patienttemail'";
               
               $dodel = mysqli_query($mysqli,$ssq);

               if($dodel){
                 header('location:doctor.php');
               }else{
                 
               }

             }}else{

             }
           
           ?>
         <?php

if(isset($_POST['sendtask'])){

  $sendtaskform = $_POST['sendtaskform'];
 //  $name = $row['username'];
 //  $em = $row['useremail'];
  $doctorname = $docname;

  $sendtask = "INSERT INTO `tasks`(`doctorname`,`doctorid`,`username`,`useremail`,`userid`,`task`) VALUES ('$doctorname','$doctorid','$name','$em','$userid','$sendtaskform')";
  $emm = mysqli_query($mysqli,$sendtask);

  header('location:doctor.php');



}
?>

</div> 
            </div>
    
<?php include('footer.php');

?>
 
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

  
  
   <script>
  
  var modal = document.getElementById('myModal');
  var modall = document.getElementById('myModall');
  // var modalll = document.getElementById('myModalll');


  var btn = document.getElementById("myBtn");
  var btnn = document.getElementById("myBtnn");
  // var btnnn = document.getElementById("myBtnnn");

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


    
   
       
</body>
</html>