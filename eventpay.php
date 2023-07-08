<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="style/payment.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
  
</head>
<body>
<?php include('nav.php');
      include('database.php');
 

      $ms=$_GET['eventname'];
      $ma=$_GET['eventprice'];


      $hat = "SELECT * from `events` WHERE `name`= '$ms'";
      $dots = mysqli_query($mysqli,$hat); 

      
    //   if (!$dots) {
    //     die("Invalid query: ". $mysqli->error);
    // }

    // while ($row =  mysqli_fetch_assoc($dots)) {
        foreach($dots as $row) {

   ?>
     
    </header>
     <div class="mainscreen">
        
           
            <div class="rightside">
              <form method="POST">
                <div class="cards">

                <h3>Payment Details</h3>
              
                <img src="images/visa.jpeg" style="width: 70px;height: 60px; ">
                <img src="images/mc.png" style="width: 70px;height: 60px; ">
                <img src="images/paypal.jpeg" style="width: 70px;height: 60px; ">
                
                </div>

                <div class="row">
                <p>Email</p>
                <input type="text" class="inputbox" name="useremail" required  value="<?php if(empty($useremail)){}else{echo $useremail;}; ?>"/></div>

                <div class="row">
                <p>Phone number</p>
                <input type="number" class="inputbox" name="userphone" required  value="<?php if(empty($userphone)){}else{echo $userphone;}; ?>"/></div>


                <div class="row">
                    <p>Card Number</p>
                    <input type="tel" name="cardno" class="inputbox" id="card_number" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" min="100000000000000" title="Enter 16 digits" placeholder="Enter 16-digit Card Number" value="<?php if(empty($cardno)){}else{echo $cardno;}; ?>">


                <div class="row">
                <div class="col">
                <p>Card Type</p>
                <select class="inputbox" name="cardtype" id="card_type" required>
                  <option value="">--Select a Card Type--</option>
                  <option value="Visa" <?php if(empty($cardtype)){}else{echo $cardtype;}; ?>>Visa</option>
                  <option value="Rupay" <?php if(empty($cardtype)){}else{echo $cardtype;}; ?>>RuPay</option>
                  <option value="MasterCard" <?php if(empty($cardtype)){}else{echo $cardtype;}; ?>>MasterCard</option>
                </select></div>
                
                <div class="col">
                    <p class="expcvv_text">Exp. Date</p>
                    <input type="date"class="inputbox" name="expdate" id="exp_date" required="required" min="2022-07" max="2050-07" value="<?php if(empty($expdate)){}else{echo $expdate;}; ?>">
                </div>
                
                <div class="col">
                    <p for="expcvv_text2">CVV</p>
                    <input type="tel" class="inputbox" name="cvv" id="cvv" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" size="3" min="100" max="999" minlength="3" maxlength="3" placeholder="Enter 3-digit Cvv Number" value="<?php if(empty($cvv)){}else{echo $cvv;}; ?>">
                </div>

                
                <div class="col">
                    <p for="expcvv_text2">Total Amount</p>
                    <input type="text" class="inputbox" name="amount" id="amount"  value=<?php echo($row['price']) ?>>
                </div>

                <button type="submit" name="pay" class="button">CheckOut</button>
              </form>
            </div>
          </div>
          <?php  }  ?>
          
<?php
          if(isset($_POST['pay'])){
 

 $cardno = $_POST['cardno'];
 $cardtype = $_POST['cardtype'];
 $expdate = $_POST['expdate'];
 $cvv = $_POST['cvv'];
 $trans_id = rand();
 $dat = (new \DateTime())->format('Y-m-d H:i:s');
 $useremail = $_POST['useremail'];
 $userphone = $_POST['userphone'];
//  $eventname = $_GET['eventname'];

 $sendd = "INSERT INTO `payment` (`transaction_id`,`cardno`,`cardtype`,`date`,`amount`,`expdate`,`cvv`,`useremail`,`userphone`,`eventname`,`session_event`) 
 VALUES ('$trans_id','$cardno','$cardtype','$dat','$ma','$expdate','$cvv','$useremail','$userphone','$ms','event')";
$payss = mysqli_query($mysqli,$sendd);

echo '<script>alert("Verification massage will be send to your email")</script>';
header('location: user.php');

}

?>








        <?php
include('footer.php');
?>

    <button id="backtotop"><span class="material-symbols-outlined">
    arrow_upward
    </span></button>
</div> 
    
    
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
