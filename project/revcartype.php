<!DOCTYPE html>
<html>
<title>Admin Panel</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="w3.css">

<body class="w3-content" style="max-width:1200px">


<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" style="margin-left:16%">
  <h3 class="w3-center">Welcome admin...</h3>
<header class="w3-container w3-center" style="padding:100px 100px">
<a href="index.php" class="3-button w3-teal w3-padding-large w3-large w3-margin-top">Home</a>
    <a href="adminpage.html" class="3-button w3-teal w3-padding-large w3-large w3-margin-top">Admin Home</a>
    <a href="addcar.php" class="3-button w3-teal w3-padding-large w3-large w3-margin-top">Delete Car</a>
    <a href="updatecar.php" class="3-button w3-teal w3-padding-large w3-large w3-margin-top">Update car info</a>
<br>
<br>

  
  <div class="w3-content">

    <div class="w3-twothird">

      <form  method="POST" >
        Select Car type : <select name = "car_type_name">
                                      <option>Economy</option>
                                      <option>Standard</option>
                                      <option>Premium</option>
                                      <option>SUV</option>
                                    </select><br><br>
        <input type="submit" name="submit" value="submit">
        <?php 
              if(isset($_POST['submit'])){
                include 'setup.php';
              $c = $_POST['car_type_name'];
              $sql = "SELECT * FROM `billing_details`,`booking_details`,`car_detail`,`car_type`  WHERE `billing_details`.booking_id=`booking_details`.booking_id AND `booking_details`.`car_id`=`car_detail`.`car_id` AND `car_detail`.`car_type_id`=`car_type`.`car_type_id` AND car_type_name='$c'";
              $result = mysqli_query($conn, $sql);
              echo "<table class='w3-table w3-bordered'>";  
              echo'<th>Car Type name</th><th>Booking ID</th><th>Bill ID</th><th>Bill date</th><th>Amount</th><th>Tax Amount</th><th>Total Amount</th>'; 
              while($data = mysqli_fetch_array($result))
              {

              echo'<tr>'; 
              echo '<td>'.$data['car_type_name'].'</td><td>'.$data['booking_id'].'</td><td>'.$data['bill_id'].'</td><td>'.$data['bill_date'].'</td><td>'.$data['amount'].'</td><td>'.$data['tax_amount'].'</td><td>'.$data['total_amount'].'</td>'; 
              echo'</tr>'; 
              }

              echo "</table>";} ?>
      </form>
    </div>
  </div>
</div>


  
 
  <div class="w3-black w3-center w3-padding-24">RV Pavan |  1MJ17CS112</div>

</div>
<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html>
