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
  
</header> 
  <div class="w3-content">

    <div class="w3-twothird">

      <h4>List of Customers</h4>
      <?php
      include 'setup.php';
      $sql = "SELECT * FROM customer";
      $result = mysqli_query($conn, $sql);
      echo "<table class='w3-table w3-bordered'>";  
      echo'<th>Cust ID</th><th>DL no.</th><th>First name</th><th>Last name</th><th>DOB</th><th>Address</th><th>City</th><th>State</th><th>Contact no.</th><th>Email ID</th>'; 
      while($data = mysqli_fetch_array($result))
      {

      echo'<tr>'; 
      echo '<td>'.$data['cust_id'].'</td><td>'.$data['dl_no'].'</td><td>'.$data['first_name'].'</td><td>'.$data['last_name'].'</td><td>'.$data['dob'].'</td><td>'.$data['address'].'</td><td>'.$data['city'].'</td><td>'.$data['state'].'</td><td>'.$data['contact_no'].'</td><td>'.$data['email_id'].'</td>'; 
      echo'</tr>'; 
      }

      echo "</table>"; 
      ?>
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
