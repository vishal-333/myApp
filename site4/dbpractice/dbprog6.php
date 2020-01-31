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

	         $db_name="INFORMATION_SCHEMA";
			
			$db_connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db_name);

			if (mysqli_connect_errno()) {
					echo "failed to connect";
				}	
			
			  $tables = mysqli_query($db_connect,"SHOW TABLES FROM INFORMATION_SCHEMA");
			$totalTables = mysqli_num_rows($tables);
			//echo "tOTALnO oFtABLE-".$totalTables;
			while($fetch=mysqli_fetch_array($tables)){
				$tableName=$fetch[0];
				// echo $tableName."<br>";
				echo "<option>$tableName</option>";
			}
		 ?>
</select>


	
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?>
	
	 		
