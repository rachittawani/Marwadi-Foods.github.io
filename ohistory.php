<?php
session_start();
$conn = new mysqli("localhost", "root", "", "marwadi_foods");
$sql="SELECT oid1,pid,qtn,totalamt,odate FROM order1 WHERE email='".$_SESSION['var']."' ORDER BY odate";
$res=$conn->query($sql);
if (!$res) 
{
	echo"
    <script>
		alert('No Previous Order');
    </script>
    ";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order History</title>
	<script src="https://kit.fontawesome.com/f70a446779.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/ohistory.css">
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
		    <nav class="navbar  navbar-expand-lg navbar-dark">
		    	<a class="navbar-brand" href="home.php">Marwadi Foods</a>
		  	</nav>
		</div>
	</section>
	<section>
		<div class="container-fluid">
			<div class="col-lg-12 text-center rounded bg-light my-5">
				<h1>Order History</h1>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<table class="table">
						<thead class="text-center">
							<tr>
								<th scope="col">Order Id</th>
								<th scope="col">Product Id<th>
								<th scope="col">Quantity<th>
								<th scope="col">Price</th>
								<th scope="col">Date & Time</th>
							</tr>	
						</thead>
						<tbody class="text-center">
							<?php
								while($value=$res->fetch_assoc())
								{
									echo"
									<tr>
										<td>$value[oid1]</td>
										<td>$value[pid]</td>
										<td></td>
										<td>$value[qtn]</td>
										<td></td>
										<td>$value[totalamt]</td>
										<td>$value[odate]</td>
									</tr>
									";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
</html>