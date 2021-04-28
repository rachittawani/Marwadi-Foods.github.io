<?php
session_start();
$conn = new mysqli("localhost", "root", "", "marwadi_foods");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($requestType == 'POST') {
    $email = $_POST['email'];
    $fname = $_POST['name'];
    $addr = $_POST['addr'];
    $pwd = $_POST['pwd'];
    $query =  "INSERT INTO customer VALUES('" . $email . "', '" . $fname . "','" . $addr. "', '" . $pwd . "')";
    $res = $conn->query($query);
    if ($res) {
      echo "
      <script>
        alert('Successfully Signed-Up!')
      </script>";
      header("Location:index.php");
?>
        
<?php
    }
    else{
        ?>
        <script>
            alert("User already exist!");
        </script>
<?php
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Signup</title>
  <script src="https://kit.fontawesome.com/f70a446779.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="" method="POST">
  <!-- <img class="mb-4" src="images/codingmobs.png" alt="" width="100%" height="110"> -->
  <h2><a href="index.php">Marwadi Foods</a></h2><br>
  <label for="firstName" class="sr-only">Name</label> 
  <input type="text"  name="name" class="form-control top" placeholder="Name" required autofocus>
  <!-- <label for="lastName"  class="sr-only">Last Name</label>
  <input type="text" name="lname" class="form-control middle" placeholder="Last Name" required> -->
  <label for="email" class="sr-only">Email</label>
  <input type="email" name="email" class="form-control middle" placeholder="Email" required>
  <label for="address" class="sr-only">Adrress</label>
  <input type="address" name="addr" class="form-control middle" placeholder="Address" required>
  <label for="password"  class="sr-only">Password</label>
  <input type="password" name="pwd" class="form-control bottom" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
  <br><br>
  <p class=" mb-3 ">&copy; Marwadi Foods</p>
</form>

</body>
</html>