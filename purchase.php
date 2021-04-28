<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order</title>
	<script src="https://kit.fontawesome.com/f70a446779.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/purchase.css">
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
		<div class="container-fluid" style="background-color: #3cb371;">
		    <nav class="navbar  navbar-expand-lg navbar-dark">
		      <a class="navbar-brand" href="home.php">Home</a>
		      <ul class="navbar-nav ml-auto">
		        <li class="nav-item">
		            <a class="navbar-brand" href="mycart.php">Back to Cart <i class="fa fa-shopping-cart"></i></a>
		        </li>
		      </ul>
		   </div>
		  </nav>
	    </div>
	</section>
	<br>
	<div class="container" style="padding: 10px;">
	    <div class="container">
	      <form action="order.php"  method="POST">

	        <div class="row">
	          <div class="col-50">
	            <h3>Billing Address</h3>
	            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
	            <input type="text" id="fname" name="firstname" placeholder="Full Name" required>
	            <label for="email"><i class="fa fa-envelope"></i> Email</label>
	            <input type="text" id="email" name="email" placeholder="Email" required>
	            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
	            <input type="text" id="adr" name="address" placeholder="Address" required>
	            <label for="city"><i class="fa fa-institution"></i> City</label>
	            <input type="text" id="city" name="city" placeholder="City" required>

	            <div class="row">
	              <div class="col-50">
	                <label for="state">State</label>
	                <input type="text" id="state" name="state" placeholder="State" required>
	              </div>
	              <div class="col-50">
	                <label for="zip">Pin Code</label>
	                <input type="text" id="zip" name="zip" placeholder="Pin code" required>
	              </div>
	            </div>
	          </div>

	          <div class="col-50">
	            <h3>Payment</h3>
	            <label for="fname">Accepted Cards</label>
	            <div class="icon-container">
	              <i class="fa fa-cc-visa" style="color:navy;"></i>
	              <i class="fa fa-cc-amex" style="color:blue;"></i>
	              <i class="fa fa-cc-mastercard" style="color:red;"></i>
	              <i class="fa fa-cc-discover" style="color:orange;"></i>
	            </div>
	            <label for="cname">Name on Card</label>
	            <input type="text" id="cname" name="cardname" placeholder="Name on Cards" required>
	            <label for="ccnum">Credit Card</label>
	            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit Card Number" required>
	            <label for="expmonth">Expiry Month</label>
	            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month" required>

	            <div class="row">
	              <div class="col-50">
	                <label for="expyear">Expiry Year</label>
	                <input type="text" id="expyear" name="expyear" placeholder="Expiry Year" required>
	              </div>
	              <div class="col-50">
	                <label for="cvv">CVV</label>
	                <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
	              </div>
	            </div>
	          </div>

	        </div>
	        <label>
	          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
	        </label>

	        <input type="submit" value="Continue to checkout" class="btn">
	      </form>
	    </div>
	</div>
</body>
</html>