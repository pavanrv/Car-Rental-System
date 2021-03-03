<!DOCTYPE html>
<html>
<title>Admin Panel</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="w3.css">

<body class="w3-content" style="max-width:1200px">

<a href="adminpage.html" class="3-button w3-teal w3-padding-large w3-large w3-margin-top">Admin Home</a>
    <a href="addcar.php" class="3-button w3-teal w3-padding-large w3-large w3-margin-top">Update car</a>
          
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" style="margin-left:16%">
  <h3 class="w3-center">Welcome admin...</h3>

  <div class="w3-content">

    <div class="w3-twothird">
      <form  method="POST" >

          <input class="w3-input" type="text" placeholder="Registration ID" required name="reg_id">
          <input class="w3-input " type="text" placeholder="Car Name" required name="car_name">
          <input class="w3-input " type="text" placeholder="CAr type" required name="car_type_id">
          <input class="w3-input" type="text" placeholder="full name of img file" required name="image">
          <input class="w3-input" type="text" placeholder="rental price" required name="rental_price">
          <input class="w3-input" type="text" placeholder="Status" required name="status">
          
          <button class="w3-button w3-black w3-section" type="submit" name="save">SUBMIT</button>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
          <?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
              include 'setup.php';
              $reg_id = $_POST['reg_id'];
              $car_name = $_POST['car_name'];
              $car_type_id = $_POST['car_type_id'];
              $image = $_POST['image'];
              $rental_price= $_POST['rental_price'];
              $status = $_POST['status'];
              
              $qry = "INSERT INTO car_detail(reg_id,car_name,car_type_id,image,rental_price,status)
              VALUES('$reg_id','$car_name','$car_type_id','$image','$rental_price','$status')";
              $result=mysqli_query($conn, $qry);
              if($result){
          
                echo "New record created successfully. ";
            } else {
                echo "please enter details and click submit.<br>";
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }

              mysqli_close($conn);
              ?>

          
        </form>
        
    </div>
  </div>
</div>


  
 
  <div class="w3-black w3-center w3-padding-24">B.Tech Project  &copy2017  DBMS</div>

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
