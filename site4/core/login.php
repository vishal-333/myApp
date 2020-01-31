<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>


	<div class="container">
		<div class="m-5 p-5 "> 
         <h3 class="ml-5 pl-5">Login Here</h3> <br>
			<div class="col-md-12 form-group row">
					<div class="col-md-2"><label for="email">Email</label></div>
					<div class="col-md-6"><input type="email" name="email" id=""></div>
			</div>
			<div class="col-md-12 form-group row">
					<div class="col-md-2"><label for="pass">Password</label></div>
					<div class="col-md-6"><input type="password" name="pass" id=""></div>
			</div>
			<div class="col-md-6 form-group row m-2 ml-5">
					<button class="btn btn-success m-3">Login</button> 
					<button class="btn btn-danger m-3">Clear</button>
			</div>
		</div>
	</div>
	

	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/popper.min.js"></script>

	<?php include_once('build/footer.php');?>