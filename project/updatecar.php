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
    
  
</header> <br><br>
  <div class="w3-content">

    <div class="w3-twothird">
      <form  method="POST" >
        Select Car type to update: <select name = "car_type">
                                      <option>Economy</option>
                                      <option>Standard</option>
                                      <option>Premium</option>
                                      <option>SUV</option>
                                    </select><br><br>
        Enter car ID: <input type="text" name="car_id"/><br><br>
        New Daily Rate: <input type="text" name="rental_price"/><br><br>
        <input type="submit" name="submit1" value="Update">
        <?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);

              include 'setup.php';
              $car_id=$_POST["car_id"];
              $rental_price=$_POST["rental_price"];
              $car_type=$_POST["car_type"];
              
              $qry = "UPDATE car_detail SET rental_price=$rental_price WHERE car_id='$car_id'"; 
              $result=mysqli_query($conn, $qry);
              if($result){
          
                echo "Car rate updated successfully. ";
            } else {
                echo "please enter details and click submit.<br>";
                
              }

              mysqli_close($conn);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
              ?>

      </form>
      
    </div>
  </div>
</div>


  
 
  <div class="w3-black w3-center w3-padding-24">RV Pavan | 1mj17cs112</div>

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
