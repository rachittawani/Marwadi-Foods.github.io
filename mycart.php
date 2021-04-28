<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Marwadi Foods Cart</title>
	<script src="https://kit.fontawesome.com/f70a446779.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/cart.css">
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
		            <a class="navbar-brand" href="purchase.php">Order <i class="fa fa-shopping-cart"></i></a>
		        </li>
		      </ul>
		   </div>
		  </nav>
	    </div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center rounded bg-light my-5">
				<h1>My Cart</h1>
			</div>

			<div class="col-lg-9">
				<table class="table">
				<thead class="text-center">
					<tr>
						<th scope="col">Serial No.</th>
						<th scope="col">Product Id</th>
						<th scope="col">Product Name</th>
						<th scope="col">Price</th>
						<th scope="col">Quantity</th>
						<th scope="col"></th>
					</tr>	
				</thead>
				<tbody class="text-center">
					<?php
						$total=0;
						if(empty($_SESSION['cart']))
						{
							echo"<script>
									alert('The Cart is Empty');
									window.location.href='home.php';
								</script>";
						}
						else if(isset($_SESSION['cart']))
						{
							foreach ($_SESSION['cart'] as $key => $value)
							{
								$sr=$key+1;
								$total=$total+$value['Price']*$value['Quantity'];
								echo"
								<tr>
									<td>$sr</td>
									<td>$value[Pid]</td>
									<td>$value[Item_name]</td>
									<td>$value[Price]</td>
									<td>$value[Quantity]</td>
									<td>
										<form action='manage_cart.php' method='POST'>
											<button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
											<input type='hidden' name='Item_name' value='$value[Item_name]'>
										</form>
									</td>
								</tr>
								";
							}
						}
					?>
				</tbody>
				</table>
			</div>
			<div class="col-lg-3">
				<div class="border bg-light rounded p-4">
					<h4>Total:</h4>
					<h5 class="text-right"><?php echo $total ?></h5>
					<br>
					<form>
						<!--<button></button>-->
						<a class="btn btn-primary btn-block" href="purchase.php">Order</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>