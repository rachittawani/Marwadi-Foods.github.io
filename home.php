<?php
session_start();
$y=$_SESSION['var'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Marwadi Foods</title>
  <script src="https://kit.fontawesome.com/f70a446779.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/home.css">
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
    <div class="container-fluid">

    <!-- Nav Bar -->

	    <nav class="navbar  navbar-expand-lg navbar-dark">
	      <a class="navbar-brand" href="#home">Marwadi Foods</a>
	       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav ml-auto">
	          <li class="nav-item">
	              <a class="nav-link" href="#home">Home <i class="fa fa-home"></i></a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#press">Menu <i class="fa fa-cutlery"></i></a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#contact">Contact <i class="fa fa-phone fa-flip-horizontal"></i></a>
	          </li>
	          <li class="nav-item">
	          	<form action="ohistory.php" method="POST">
                	<a class="nav-link" href="ohistory.php">Order history <i class="fa fa-history" aria-hidden="true"></i></a>
					<input type="hidden" name="Email" value=<?php echo "$y" ?> >
				</form>
              </li>
	          <li class="nav-item">
	          		<?php
	          			$count=0;
	          			if(isset($_SESSION['cart']))
	          			{
	          				$count=count($_SESSION['cart']);
	          			}
	          		?>
	              <a class="nav-link" href="mycart.php">Cart(<?php echo $count; ?>) <i class="fa fa-shopping-cart"></i></a>

	          </li>
	          <li class="nav-item">
	              <a class="nav-link" href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
	          </li>
	      </ul>
	   </div>
	  </nav>
    </div>
  </section>
  <section id="home">
    <div class="container-fluid custom-padding custom-background">
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/pic32.jpg"
          alt="First slide">
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="images/pic22.jpg"
          alt="Second slide">
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="images/pic1.jpg"
          alt="Third slide">
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
  </section>


  <!-- Features -->
  
  <section id="features">
    <div class="row">
    <div class="feature-box col-lg-4">
      <i class="icon fas fa-check-circle fa-3x"></i>
    <h3>Safety</h3>
    <p>We take safety of our customers very seriously hence maintainig the high standards of safety.</p>
    </div>
    <div class="feature-box col-lg-4">
      <i class="icon fas fa-bullseye fa-3x"></i>
    <h3>Taste</h3>
    <p>Our food taste soo good, you lick your fingers.</p>
    </div>
    <div class="feature-box col-lg-4">
      <i class="icon fas fa-heart fa-3x"></i>
    <h3>Guaranteed 30 min delivery.</h3>
    <p>We don't like to make our customer wait. We Guarantee to deliver your food within 30 mins.</p>
    </div>
    </div>
  </section>
  <!-- Press -->

  <section id="press">
    <div class="container">

        <!-- Page Heading -->
        <h1 style='font-family: "Ubuntu";
        color: #ffffff;
        font-size: 3.5rem;
        font-weight: 200;
        line-height: 1.75;'>Menu</h1><br><br>
        <!-- Project One -->
        <div class="row">
          	<div class="col-md-7">
              <img class="img-fluid mb-3 mb-md-0 menu" src="images/pizza.jpg" alt="" data-toggle="modal" data-target="#myModal1">
              <div class="modal fade" id="myModal1" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <h2 class="modal-title" style="color: black;">Pizza</h2>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        <div class="modal-body">
			        <img class="img-fluid mb-3 mb-md-0 menu" src="images/pizza.jpg" alt="">
			          <p class="product-desc">Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot.</p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div> 
			    </div>
			  </div>
          	</div>
          <div class="col-md-5">
          	<form action="manage_cart.php" method="POST">
	            <h3 class="menu-head">Pizza</h3>
	            <p class="product-desc">Price - &#x20B9;200</p>
	            <p class="product-desc">Flattened bread dough with toppings.</p>
	            Quantity <input class='text-center' type='number' placeholder="1" name='Quantity' value="$value[Quantity]" min='1' max='100'><br>
	            <button type="submit" class="btn btn-dark btn-lg download-button" href="" name="Add_To_Cart">Add to Cart</button>
	            <input type="hidden" name="pid" value="51">
	            <input type="hidden" name="Item_name" value="Pizza">
	            <input type="hidden" name="Price" value="200">
	            <input type="hidden" name="Email" value=<?php echo "$y" ?> >
	        </form>
          </div>
        </div>
        <!-- /.row -->
  
        <hr>
  
        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
              <img class="img-fluid mb-3 mb-md-0 menu" src="images/burger.jpg" alt="" data-toggle="modal" data-target="#myModal2">
              <div class="modal fade" id="myModal2" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <h2 class="modal-title" style="color: black;">Burger</h2>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        <div class="modal-body">
			        <img class="img-fluid mb-3 mb-md-0 menu" src="images/burger.jpg" alt="">
			          <p class="product-desc">Veg burger recipe with step by step photos – burger buns stuffed with mix vegetable patties, spiced mayonnaise dressing and cucumber, tomato, onion slices.</p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>
			    </div>
			  </div>
            </div>
            <div class="col-md-5">
            	<form action="manage_cart.php" method="POST">
            	<h2 class="menu-head">Burger</h2>
	            <p class="product-desc">Price - &#x20B9;150</p>
	            <p class="product-desc">Sandwich consisting of patties,lettuce and sauces.</p>
	            Quantity <input class='text-center' type='number' placeholder="1" name='Quantity' value='$value[Quantity]' min='1' max='100'><br>
            	<button type="submit" class="btn btn-dark btn-lg download-button" href="" name="Add_To_Cart">Add to Cart</button>
            	<input type="hidden" name="pid" value="52">
            	<input type="hidden" name="Item_name" value="Burger">
            	<input type="hidden" name="Price" value="150">
            	<input type="hidden" name="Email" value=<?php echo "$y" ?> >
          		</form>
          	</div>
        </div>
        <!-- /.row -->
  
        <hr>
  
        <!-- Project Three -->
        <div class="row">
          	<div class="col-md-7">
          	<img class="img-fluid mb-3 mb-md-0 menu" src="images/panchilli.jpg" alt="" data-toggle="modal" data-target="#myModal3">
              <div class="modal fade" id="myModal3" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <h2 class="modal-title" style="color: black;">Chilli Paneer</h2>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        <div class="modal-body">
			        <img class="img-fluid mb-3 mb-md-0 menu" src="images/panchilli.jpg" alt="">
			          <p class="product-desc">Chilli Paneer is a popular Indo-Chinese dish where cubes of fried crispy paneer are tossed in a spicy sauce made with soy sauce, vinegar, chili sauce!</p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div> 
			    </div>
			  </div>
          	</div>
          <div class="col-md-5">
          	<form action="manage_cart.php" method="POST">
            <h3 class="menu-head">Chilli Paneer</h3>
            <p class="product-desc">Price - &#x20B9;100</p>
            <p class="product-desc">Cubes of fried paneer tossed in soy and chilli sauce.</p>
            Quantity <input class='text-center' type='number' placeholder="1" name='Quantity' value='$value[Quantity]' min='1' max='100'><br>
            <button type="submit" class="btn btn-dark btn-lg download-button" href="" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="pid" value="53">
            <input type="hidden" name="Item_name" value="Panner Chilli">
            <input type="hidden" name="Price" value="100">
            <input type="hidden" name="Email" value=<?php echo "$y" ?> >
          	</form>
          </div>
        </div>
        <!-- /.row -->
  
        <hr>
  
        <!-- Project Four -->
        <div class="row">
          <div class="col-md-7">
            <img class="img-fluid mb-3 mb-md-0 menu" src="images/dalbaati.jpg" alt="" data-toggle="modal" data-target="#myModal4">
              <div class="modal fade" id="myModal4" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <h2 class="modal-title" style="color: black;">Dal Baati</h2>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        <div class="modal-body">
			        <img class="img-fluid mb-3 mb-md-0 menu" src="images/dalbaati.jpg" alt="">
			          <p class="product-desc">Dal Baati is a popular Rajasthani dish consisting of mainly Uradh Dal (combination of five lentils) and Baati i.e. small wheat bread balls. Baati is dipped in pure ghee and served hot in a traditional earthen pot.</p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div> 
			    </div>
			  </div>
          </div>
          <div class="col-md-5">
          	<form action="manage_cart.php" method="POST">
            <h3 class="menu-head">Dal Baati</h3>
            <p class="product-desc">Price - &#x20B9;250</p>
            <p class="product-desc">Dal-combination of five lentils and Baati-small wheat bread balls.</p>
            Quantity <input class='text-center' type='number' placeholder="1" name='Quantity' value='$value[Quantity]' min='1' max='100'><br>
            <button type="submit" class="btn btn-dark btn-lg download-button" href="" name="Add_To_Cart">Add to Cart</button>
            <input type="hidden" name="pid" value="54">
            <input type="hidden" name="Item_name" value="Dal Baati">
            <input type="hidden" name="Price" value="250">
            <input type="hidden" name="Email" value=<?php echo "$y" ?> >
          	</form>
          </div>
        </div>
        <!-- /.row -->
  
        <hr>
        <!-- Project Five -->
        <div class="row">
  
            <div class="col-md-7">
              <img class="img-fluid mb-3 mb-md-0 menu" src="images/ffries.jpg" alt="" data-toggle="modal" data-target="#myModal5">
              <div class="modal fade" id="myModal5" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <h2 class="modal-title" style="color: black;">French Fries</h2>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        <div class="modal-body">
			        <img class="img-fluid mb-3 mb-md-0 menu" src="images/ffries.jpg" alt="">
			          <p class="product-desc">French Fries or simply fries are pieces of potato that have been deep-fried.These are deep-fried, very thin, salted slices of potato that are usually served at room temperature.</p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div> 
			    </div>
			  </div>
            </div>
            <div class="col-md-5">
              <form action="manage_cart.php" method="POST">
              <h3 class="menu-head">French Fries</h3>
              <p class="product-desc">Price - &#x20B9;175</p>
              <p class="product-desc">Pieces of potato that have been deep-fried.</p>
              Quantity <input class='text-center' type='number' placeholder="1" name='Quantity' value='$value[Quantity]' min='1' max='100'><br>
              <button type="submit" class="btn btn-dark btn-lg download-button" href="" name="Add_To_Cart">Add to Cart</button>
              <input type="hidden" name="pid" value="55">
              <input type="hidden" name="Item_name" value="French Fries">
              <input type="hidden" name="Price" value="175">
              <input type="hidden" name="Email" value=<?php echo "$y" ?> >
           	  </form>
            </div>
          </div>
          <!-- /.row -->
    
          <hr>
          <!-- Project six -->
        <div class="row">
  
            <div class="col-md-7">
              <img class="img-fluid mb-3 mb-md-0 menu" src="images/dosa.jpg" alt="" data-toggle="modal" data-target="#myModal6">
              <div class="modal fade" id="myModal6" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <h2 class="modal-title" style="color: black;">Dosa</h2>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          </div>
			            <div class="modal-body">
			              <img class="img-fluid mb-3 mb-md-0 menu" src="images/dosa.jpg" alt="">
			              <p class="product-desc">A dose/dosai is a rice pancake, originating from South India, made from a fermented batter predominantly consisting of lentils and rice.Its main ingredients are rice and black gram, ground together in a fine, smooth batter with a dash of salt, then fermented.</p>
			            </div>
			           <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div> 
			    </div>
			  </div>
            </div>
            <div class="col-md-5">
              <form action="manage_cart.php" method="POST">
              <h3 class="menu-head">Dosa</h3>
              <p class="product-desc">Price - &#x20B9;250</p>
              <p class="product-desc">Rice pancake made from fermented batter served with sambhar and chutney.</p>
              Quantity <input class='text-center' type='number' placeholder="1" name='Quantity' value='$value[Quantity]' min='1' max='100'><br>
              <button type="submit" class="btn btn-dark btn-lg download-button" href="" name="Add_To_Cart">Add to Cart</button>
              <input type="hidden" name="pid" value="56">
              <input type="hidden" name="Item_name" value="Dosa">
              <input type="hidden" name="Price" value="250">
              <input type="hidden" name="Email" value=<?php echo "$y" ?> >
           	  </form>
            </div>
          </div>
          <!-- /.row -->
      </div>

  </section>

<section id="contact">
    <div id="contact-us" class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <h2 >Contact Us</h2>
            <p >+91-9758923146</p>
            <p >+91-7567476001</p>
          </div>
    
          <div class="col-lg-4 col-md-4">
            <h2>Address</h2>
            <p >4-A , Marwadi Foods , Square Complex ,</p>
            <p >R.R.Nagar , Bengaluru</p>
          </div>
          <div class="col-lg-4 col-md-4">
            <h2>Email-us</h2>
            <p >rachittawani@gmail.com</p>
            <p >mehulsvps000@gmail.com</p>
          </div>
        </div>
      </div>

</section>

  <!-- Footer -->

  <footer id="footer">
    <a class="logo" href="#footer"><i class="social-icon fab fa-2x fa-facebook"></i></a>
    <a class="logo" href="#footer"><i class="social-icon fab fa-2x fa-twitter"></i></a>
    <a class="logo" href="#footer"><i class="social-icon fab fa-2x fa-instagram"></i></a>
    <a class="logo" href="#footer"><i class="social-icon fas fa-2x fa-envelope"></i></a>
    <p style="color: black;">© Copyright 2020 Marwadi Foods</p>

  </footer>


</body>

</html>
