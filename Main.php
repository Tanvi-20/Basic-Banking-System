<!DOCTYPE html>
<html>
<head>
	<title>Basic Banking System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./Main.css">
	<script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
</head>

<body>


<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-university" style="font-size: 35px;"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#S1" style="font-size: 20px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#S2" style="font-size: 20px;">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#S3" style="font-size: 20px;">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" ><i class="fas fa-search" style="font-size: 20px;"></i></button>
      </form>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!--End of Navbar-->			

<!--Home Section-->
<section class="home" id="S1">
	<h2 class="title"><b>Welcome to</b></h2><br/>
	<h1 class="title"><b>TSF Bank</b></h1>
</section>
<!--End of Home Section-->


<!--Services-->
<section>
	<div class="service" id="S2">
		<header>
			<h1><b>Services</b></h1>
		</header>

		<main>
			<div class="card">
				<i class="fas fa-users"></i>
				<div class="content">
					<a href="./moneytransfer.php" class="btn">View Customers</a>
				</div>
			</div>

			<div class="card">
				<i class="fas fa-coins"></i>
				<div class="content">
					<a href="./moneytransfer.php" class="btn">Make a Transaction</a>	
				</div>	
			</div>

			<div class="card">
				<i class="fas fa-receipt"></i>
				<div class="content">
					<a href="./history.php" class="btn">View Transactions</a>	
				</div>	
			</div>
		</main>
	</div>
</section>
<!--End of services Section-->

<!--Contact Us-->
<div class="contact" id="S3">
		<h2><b>Contact Us</b></h2>
		<form name="contact" onSubmit="return formValidation();" action="" method="post">
		
			<input type="text" name="fname" placeholder="First Name" required><br/>			
			<input type="text" name="lname" placeholder="Last Name" required><br/>
			<input type="text" name="city" placeholder="City" required><br/>
			<input type="text" name="email" placeholder="Email id" required><br/>
			<textarea name="comment" placeholder="Leave your Comments here..." rows="10" cols="30"></textarea><br>
			<input type="submit" value="Submit" onClick="myFunction()"><br/>
		</form>
</div>
<!--End of Contact Us Section-->
		
		
<!-- Footer-->

<footer class="footer">
	<!-- Social Icons -->
	<section id="social-icons">
			<a href="#"><i class="fab fa-facebook facebook"></i></a>
			<a href="#"><i class="fab fa-twitter twitter"></i></a>
			<a href="#"><i class="fab fa-instagram instagram"></i></a>
			<a href="#"><i class="fab fa-google-plus plus"></i></a>	
	</section>
	<!-- End of Social Icons setion-->

	<div class="section-center">
		<p class="text">
			&copy; <span>2021 All rights reserved</span>
		</p>
	</div>	
</footer> 
<!-- End of Footer -->

</body>
</html>