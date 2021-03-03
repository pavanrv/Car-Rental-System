<!DOCTYPE html>
<html>
<title>User profile</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="w3.css">
<body class="w3-content" style="max-width:1200px">

<header class="w3-container w3-center" style="padding:85px 16px">
<a href="index.php" class="3-button w3-teal w3-padding-large w3-large w3-margin-top">Home</a>
    
    <a href="carlist.php" class="3-button w3-teal w3-padding-large w3-large w3-margin-top">Book a car</a>
    <a href="returncar.php" class="3-button w3-teal w3-padding-large w3-large w3-margin-top">Return car</a>
<a href="forgot.php" class="3-button w3-teal  w3-large w3-right">click here for id details</a>
</header>
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" style="margin-left:16%">
  <h3 class="w3-center">Return car...</h3>

<br>
  <div class="w3-content">

    <div class="w3-twothird">
      <form  method="POST" >
        
        Enter booking ID : <input type="text" name="booking_id"/><br>
        Enter car ID : <input type="text" name="car_id"/><br>
        Enter Return date: <input type="text" name="return_date"/><br>
        
        <input type="submit" name="submit" value="Return Car">


        <?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
              
                include 'setup.php';
              $booking_id = $_POST['booking_id'];
              $car_id = $_POST['car_id'];
              $return_date= $_POST['return_date'];
              $qry = "UPDATE booking_details SET return_date='$return_date' WHERE booking_id='$booking_id'";
              $result1=mysqli_query($conn, $qry);
              if($result1){
                echo "";
            } else {
                echo "please enter details and click submit.<br>";
                
              }

              
              ?>

      </form>
      
    </div>
          <?php
              error_reporting(E_ERROR | E_WARNING | E_PARSE);
          $sql = "SELECT * FROM billing_details where booking_id='$booking_id'";
      $result1 = mysqli_query($conn, $sql);
      echo "<table class='w3-table w3-bordered'>";  
   echo'<th>Bill ID</th><th>Booking ID</th><th>Bill date</th><th>Amount</th><th>Tax Amount</th><th>Total Amount</th>'; 
      while($data = mysqli_fetch_array($result1))
      {
      echo'<tr>'; 
      echo '<td>'.$data['bill_id'].'</td><td>'.$data['booking_id'].'</td><td>'.$data['bill_date'].'</td><td>'.$data['amount'].'</td><td>'.$data['tax_amount'].'</td><td>'.$data['total_amount'].'</td>'; 
      echo'</tr>'; 
      }

      echo "</table>"; ?>

  </div>
</div>


 
  <div class="w3-black w3-center w3-padding-24">RV Pavan |  1MJ17CS112</div>

</div>

</body>
</html>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
  $qry1 = "UPDATE car_detail SET status='Available' WHERE car_id='$car_id'";
  mysqli_query($conn, $qry1);
  mysqli_close($conn);
?>
