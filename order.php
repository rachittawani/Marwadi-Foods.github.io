<?php
session_start();
$conn = new mysqli("localhost", "root", "", "marwadi_foods");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
// $requestType = $_SERVER['REQUEST_METHOD'];
// if ($requestType == 'POST') {
//     $email = $_POST['email'];
//     $pwd = $_POST['pwd'];
//     $getinfo = "select pwd where email='$email'";
    //$query =  "INSERT INTO customer VALUES('" . $email . "', '" . $fname . "', '" . $pwd . "')";
    //$res = $conn->query($getinfo);
    // $password = mysqli_query("SELECT pwd FROM customer WHERE email = '$email'");
    // $result = mysqli_fetch_array($password);

    // $sql = "SELECT pwd FROM customer WHERE email = '$email'";
    // $result = $conn->query($sql);
    // $row = $result->fetch_assoc();
    // if ($result->num_rows > 0 and $row["pwd"]==$pwd) {
    // header("Location:home.php");
    // exit;
  $employee = rand(1001,1005);
  $sql = "SELECT * FROM EMPLOYEE WHERE eid='$employee'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  $sql1 = "SELECT * FROM vehicle where eid='$employee'";
  $result1 = $conn->query($sql1);
  $row1 = $result1->fetch_assoc();

  $requestType = $_SERVER['REQUEST_METHOD'];
  if ($requestType == 'POST') {
    $sql2="INSERT INTO order1 SELECT * FROM orders";
    $result2 = $conn->query($sql2);
  }


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Order Details</title>
  <script src="https://kit.fontawesome.com/f70a446779.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/carts.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
<script type = "text/javascript" >
        function preventBack() { window.history.forward(1); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
  </script> 
  <section id="title">

    <!-- Nav Bar -->
    <div class="container-fluid" style="background-color: #3cb371;">
        <nav class="navbar  navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="home.php">Home</a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="navbar-brand" href="ohistory.php">Order history <i class="fa fa-history" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                  <a class="navbar-brand" href="logout.php">Logout <i class="fa fa-sign-out" ></i></a>
              </li>
          </ul>
       </div>
      </nav>
      </div>
    </section>
  <div class="row order">
    <div class="col-lg-6">
      <h1>Thanks For Ordering</h1>
      <br>
      <h4>Your order will be delivered by <?php echo $row['ename']; ?> with in 30 min</h4>
    </div>
    <div class="col-lg-6">
      <h1>Delivery executive details</h1>
      <br>
      <h4>Contact Number - +91-<?php echo $row['phno']; ?></h4>
      <h4>Vehicle Number - <?php echo $row1['veh_no']; ?> </h4>
    </div>
  </div>

  <footer id="footer">
    <a class="logo" href="#footer"><i class="social-icon fab fa-2x fa-facebook"></i></a>
    <a class="logo" href="#footer"><i class="social-icon fab fa-2x fa-twitter"></i></a>
    <a class="logo" href="#footer"><i class="social-icon fab fa-2x fa-instagram"></i></a>
    <a class="logo" href="#footer"><i class="social-icon fas fa-2x fa-envelope"></i></a>
    <p style="color: black;">© Copyright 2020 Marwadi Foods</p>

  </footer>

</body>

</html>