<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>

<select>
	<?php 
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="ilv";


		$sql="SHOW DATABASES";
		$link = mysqli_connect($dbhost,$dbuser,$dbpass) or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');

		if (!($result=mysqli_query($link,$sql))) {
		        printf("Error: %s\n", mysqli_error($link));
		    }

		while( $row = mysqli_fetch_row( $result ) ){
		        if (($row[0]!="information_schema")  && ($row[0]!="performance_schema") && ($row[0]!="mysql")) {
		            // echo $row[0]."\r\n";
		            echo "<option>$row[0]</option>";
		        }
		    }
	 ?>
	 	
</select>

	
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?>