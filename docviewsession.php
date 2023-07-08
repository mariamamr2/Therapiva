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
  </head>
  
  <body>

  </header>
  

<div class="rightside" style="height: 35rem; width: 84rem; margin-top: 2rem;">
  <div class="rightsideheader">
     
    <h3>Requested Sessions</h3>
    </div>
  <div class="table2">
    <div class="content">
      <div class="containertable1">
   
        <div  class="table-responsive custom-table-responsive">
  
          <table id="table2" class="table custom-table">
            <thead>
              <tr>  
  
  
                <th scope="col" class="name">Name</th>
                <th scope="col" class="date">Email</th>
                <th scope="col" class="type">Phone number</th>
                <th scope="col" class="status">Availale days</th>
                <th scope="col" class="status">From</th>
                <th scope="col" class="status">To</th>
                <th scope="col" class="status">Online/Offline</th>
                <th scope="col" class="status">New or old patient</th>

                <th scope="col" class="delete1"></th>
                
  
              </tr>
            </thead>
            
            <tbody>
            
            <?php
                    
                      $dc = $_GET['docname'];
                    
                    $sess = "SELECT * FROM `session` WHERE `doctorname` = '$dc'";
                    $dots = mysqli_query($mysqli,$sess); 

                    foreach($dots as $session){?>
                   <tr  scope="row">
                      <td> <?php echo($session['username']) ?></td>
                      <td class="timedate"><?php echo($session['useremail']) ?></td>
                      <td> <?php echo($session['phoneno']) ?></td>
                      <td> <?php echo($session['day']) ?></td>
                      <td> <?php echo($session['datefrom']) ?></td>
                      <td> <?php echo($session['dateto']) ?></td>
                      <td> <?php echo($session['status']) ?></td>
                      <td> <?php echo($session['usertype']) ?></td>

                  
                  <td>
                  <a href="<?php echo 'docviewsession.php?del=' . $session['useremail']; ?>"><span class="material-symbols-outlined">close</a>
                
                
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
             <input type="submit" name="deletesession" value="Delete">
             <a href="docviewsession.php">Cancel</a>
           </div>
       </form>



      
           <?php
             if(isset($_POST['deletesession'])){
               $sess = $_GET['del'];

              //  $ssq = "DELETE * FROM `daysession` where `useremail` = '$session'";
              //  $ssq = "UPDATE `daysession` SET `doctorname` = '' where `email` = '$patienttemail'";
               $ssq = "DELETE FROM `session` where `useremail` = '$sess'";
             
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