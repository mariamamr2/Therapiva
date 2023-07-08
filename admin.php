<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/bb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet">

    <title>Admin</title>
   
</head>
<body>
<?php include('nav.php');
      include('database.php');
ob_start();

   ?>
     
    <div class="adminimg">
    </div>
<div class="admintext">
    <h2 > Our Responsibilities</h2>
    
</div>

<div class="d-flex"> 

<div class="adminresp">
<div class="box1">
<div class="useradm">
    <button id="admbtn">User information</button>
    <span id="per" class="material-symbols-outlined">person_pin_circle</span>
</div>
    <!-- The Modal -->
         
     <div id="admmodal" class="modaladm">
     
             <!-- Modal content -->
       <div class="modal-content">
       <div class="modal-header">
    
     <h3>Our Users</h3>
     <span class="close">×</span>
     </div>
     <div class="modal-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Gender </th>
                <th scope="col"> Phone Number </th>
                <th scope="col">Doctor </th>
              </tr>
            </thead>
            <?php
           $hat = "SELECT * from `users` WHERE `status`=2 AND `role`='user' ";
           $dots = mysqli_query($mysqli,$hat); 
           
           
           foreach($dots as $users){?>
            <tbody>
              <tr>
              <th scope="row"><?php echo($users['name']) ?></th>
                <td><?php echo($users['email']) ?></td>
                <td><?php echo($users['age']) ?></td>
                <td><?php echo($users['gender']) ?></td>
                <td><?php echo($users['phone']) ?></td>
                <td><?php echo($users['doctorname']) ?></td>
                
              </tr>
 
                    
            </tbody>
            <?php
                    }
                  ?>  
          </table>
     </div>
    </div>
    </div>
     </div> </div>
   
    
     
    
<!--    Sponsors       -->
<div class="secondboxes">
<div class="box2">
<div class="useradm">
    <button id="admbtnn">Sponsors</button>
    <span id="per" class="material-symbols-outlined">person_pin_circle</span>
</div>
    <!-- The Modal -->
         
     <div id="admmodall" class="modaladm">
     
             <!-- Modal content -->
       <div class="modal-content">
       <div class="modal-header">
    
     <h3>Our sponsors</h3>
     <span class="close">×</span>
     </div>
     <a href="addsponsor.php" class="btn1">Add Sponser</a>

     <div class="modal-body">
        <table class="table">
            <thead>
           
                <tbody>
                 
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Discount code</th>
                <th scope="col">Image</th>

              </tr>
            </thead>
          
              <?php
           $hat = "SELECT * from `sponsors` ";
           $dots = mysqli_query($mysqli,$hat); 
           
           
           foreach($dots as $spon){?>
              <tr>
              
                <th scope="row"><?php echo($spon['sponsorname']) ?></th>
                <td><?php echo($spon['discount'])?></td>
                <td><img src="sponsors/<?php echo$spon['sponsorimg'];?>" style="width: 4rem; border-radius: 6rem; height: 4rem;"> </td>
         <?php } ?>
         
              </tr>
              
 
                    
            </tbody>
         
          </table>
     </div>
    </div>
   
    </div>
     </div> </div>
     

     
           </div>

    <!-- The Modal -->
         
    <div class="firsttable">   
    <div class="boxtable" style="margin-bottom: 14rem;height: 41rem;">
    <h3> Our Doctors</h3>
    <table class="table custom-table">
        <thead>
          <tr>  
            
            
          <th scope="col" id="photo" style="width: 50px;">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Price</th>
                    <th scope="col">Location </th>
                    <th scope="col"> Phone Number</th>
                    <th scope="col"> Number of patients </th>


          </tr>
        </thead>
        
        <tbody>

   
                <?php
           $hat = "SELECT * from `doctors` WHERE `status`=2 AND `role`='doctor' ";
           $dots = mysqli_query($mysqli,$hat); 
           
           
           foreach($dots as $doc){?>
                <tbody>
                  <tr>
                  <td><img src="doctors/<?php echo$doc['photo'];?>" style="width: 4rem; border-radius: 6rem; height: 4rem;"> </td>
                <th scope="row"><?php echo($doc['name']) ?></th>
                <td><?php echo($doc['email'])?></td>
                <td><?php echo($doc['price'])?></td>
                <td><?php echo($doc['location'])?></td>
                <td><?php echo($doc['phone'])?></td>
             
            
                   <?php
                   $doctorname = $doc['name'];
                   $hata = "SELECT * from `users` WHERE `doctorname`= '$doctorname' ";
                  if ($result = mysqli_query($mysqli,$hata)) {
                    $rowcount = mysqli_num_rows( $result );
                ?>
                   <td><?php printf("%d\n", $rowcount);?> </td>
                   <?php
                  } ?>
                  <td><a href="editdoc.php?email=<?php echo($doc['email'])?>" class="btn3">Edit</a></td>
                  <td><a href="<?php echo 'admin.php?dele=' . $doc['email']; ?>" class="material-symbols-outlined">Delete</a><td>
                  </tr>
                        <?php
                    }?>

                  
                                 </tbody>

              </table>

              
     </div>
     <a href="adddoc.php" class="btn">Add doctor</a>

     </div>
     </div>
 <?php if(isset($_GET['dele'])){

?>


 <div class="deletepattt">
       <form method="POST" >
       
         <h5>You are about to delete the doctor's account.</h5><br>
         <p class="messg">This will delete doctor<br> Are you sure you want to delete ?
       </p>
         
           <div class="btnss">
             <input type="submit" name="deletedoctor" value="Delete">
             <a href="admin.php">Cancel</a>
           </div>
       </form>

           <?php
             if(isset($_POST['deletedoctor'])){
               $doctoremail = $_GET['dele'];

              //  $ssq = "UPDATE `users` SET `doctorname` = '' where `email` = '$patienttemail'";
               $ssq = "DELETE FROM `doctors` where `email` = '$doctoremail'";
               
               $dodel = mysqli_query($mysqli,$ssq);

               if($dodel){
                 header('location:admin.php');
               }else{
                 
               }

             }}else{

             }
           
           ?>
         
         <tr class="spacer"><td colspan="100"></td></tr>
          <tr class="spacer"><td colspan="100"></td></tr>
 
          

          
         
          
        </tbody>
      </table>

</div>

<div class="boxtable">
<h3> Events </h3>

    <table class="table custom-table">
        <thead>
          <tr>  
            
            
            <th scope="col" class="Name">Name</th>
            <th scope="col" class="host">Host</th>
            <th scope="col" class="date">Date & Time</th>
            <th scope="col" class="Location">Location</th>
            <th scope="col" class="price">Price</th>
            
            <th scope="col" class="editevent">Edit</th>
            <th scope="col" class="deleteevent">Delete</th>


          </tr>
        </thead>
        <tbody>
        <?php
           $hats = "SELECT * from `events`";
           $dotss = mysqli_query($mysqli,$hats); 
           
           
       foreach($dotss as $events){?>
            <td id="name"><?php echo($events['name']) ?></td>
            <td><?php echo($events['host']) ?></td>
            <td><?php echo($events['date']) ?></td>
            <td><?php echo($events['time']) ?></td>
            <td><?php echo($events['location']) ?></td>
            <td><?php echo($events['price']) ?></td>
          <!-- <tr  scope="row"> -->

         
            <td><a href="EditEvent.php?eventname=<?php echo($events['name'])?>">Edit Event</a></td>
           <td><a href="<?php echo 'admin.php?del=' .$events['name']; ?>"><span class="material-symbols-outlined">Delete</a></td>

            
            
            
       
          </tr>  <?php } ?>
          <tr class="spacer"><td colspan="100"></td></tr>
          <tr class="spacer"><td colspan="100"></td></tr>
 
          

          
         
          
        </tbody>
      </table>

</div>

    <?php if(isset($_GET['del'])){

?>
    <div class="deletepattt">
       <form method="POST" >
       
         <p class="messg">You are about to delete this event<br> Are you sure ?</p>
       
         
           <div class="btnss">
             <input type="submit" name="deleteevent" value="Delete">
             <a href="admin.php">Cancel</a>
           </div>
       </form>



      
           <?php
             if(isset($_POST['deleteevent'])){
               $event = $_GET['del'];

               $ssq = "DELETE FROM `events` where `name` = '$event'";
             
               $dode = mysqli_query($mysqli,$ssq);

               if($dode){
                header('location:admin.php');
              }else{
                
              }

            }}else{

             }
            
           ?>
         
</div>
</div> 
<a href="Addevent.php" class="btnevent">Add Event</a>



<div class="boxtable" style="margin-bottom: 14rem;height: 30rem; margin-top: 5rem;">
<h3> Payment Gateway</h3>

    <table class="table custom-table">
        <thead>
          <tr>  
            
            <th scope="col">Transaction id</th>
                    <th scope="col">User email</th>
                    <th scope="col">User Phone</th>
                    <th scope="col">Total amount</th>
                    <th scope="col">Card type</th>
                    <th scope="col">Date of payment</th>
                    <th scope="col">Event or Session</th>
                    <th scope="col">Event Name</th>



          </tr>
        </thead>
        
        <tbody>

        <?php
           $pay = "SELECT * from `payment` ";
           $dotl = mysqli_query($mysqli,$pay); 
           
           
           foreach($dotl as $pays){?>
              <tr>
              
                <th scope="row"><?php echo($pays['transaction_id']) ?></th>
                <td><?php echo($pays['useremail'])?></td>
                <td><?php echo($pays['userphone'])?></td>
                <td><?php echo($pays['amount'])?></td>
                <td><?php echo($pays['cardtype'])?></td>
                <td><?php echo($pays['date'])?></td>
                <td><?php echo($pays['session_event'])?></td>
                <td><?php echo($pays['eventname'])?></td>

                </tr>
         
                    <?php } ?>

                  
                                 </tbody>

              </table>
              </div>
<a href="uploadbook.php" class="btn">Upload Books</a>






    <button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>
  
<?php include('footer.php');

?>





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
    // Get the modal and the button that opens it
var admmodal = document.getElementById("admmodal");
var admmodall = document.getElementById("admmodall");
var admmodalll = document.getElementById("admmodalll");
var admmodallll = document.getElementById("admmodallll");


var admbtn = document.getElementById("admbtn");
var admbtnn = document.getElementById("admbtnn");
var admbtnnn = document.getElementById("admbtnnn");
var admbtnnnn = document.getElementById("admbtnnnn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spann = document.getElementsByClassName("close")[1];
var spannn = document.getElementsByClassName("close")[2];
var spannnn = document.getElementsByClassName("close")[3];
// When the user clicks the button, open the modal
admbtn.onclick = function() {
  admmodal.style.display = "block";
}
span.onclick = function() {
  admmodal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == admmodal) {
    admmodal.style.display = "none";
  }
}


admbtnn.onclick = function() {
  admmodall.style.display = "block";
}
spann.onclick = function() {
  admmodall.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == admmodall) {
    admmodall.style.display = "none";
  }
}


admbtnnn.onclick = function() {
  admmodalll.style.display = "block";
}

spannn.onclick = function() {
  admmodalll.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == admmodalll) {
    admmodalll.style.display = "none";
  }
}

admbtnnnn.onclick = function() {
  admmodallll.style.display = "block";
}

spannnn.onclick = function() {
  admmodallll.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == admmodallll) {
    admmodallll.style.display = "none";
  }
}

  
  
  
    
    </script>
    </body>
</html>