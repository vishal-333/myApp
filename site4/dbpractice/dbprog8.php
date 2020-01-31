<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>


<form action="" method="post">

	<?php
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="ilv";
		$sql="SHOW DATABASES";
		$link = mysqli_connect($dbhost,$dbuser,$dbpass) or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');

		if (!($result=mysqli_query($link,$sql))) {
		        printf("Error: %s\n", mysqli_error($link));
		    }
	?>

	Our Databases:<select name="drpdb">
		<?php 
			
			// while( $row = mysqli_fetch_row( $result ) ){
			//         if (($row[0]!="information_schema") && ($row[0]!="performance_schema") && ($row[0]!="mysql")) {
			//             // echo $row[0]."\r\n";
			//             echo "<option>$row[0]</option>";
			//         }
			//     }
	?>
	</select>

Our Databases:<select name="drpdb1">
	<?php
	 $txt=$_POST['drpdb1'];
		while( $row1 = mysqli_fetch_row( $result ) ){
		        if (($row1[0]!="information_schema")  && ($row1[0]!="performance_schema") && ($row1[0]!="mysql")) {
		            // if ($txt==$row1[0]) {
		            	echo "<option>$row1[0]</option>";
		           //  else
		           //  	echo "<option>$row[0]</option>";
		           // // }
		        }
		}
	?>
</select>

<?php	// while( $row = mysqli_fetch_row( $result ) ){
	//         if (($row[0]!="information_schema")  && ($row[0]!="performance_schema") && ($row[0]!="mysql")) {
	//             echo "<option>$row[0]</option>";
	//          else
	//             echo "<option>$row[0]</option>";
	//         }
	//     }

///

	//$link = ... // This object is my equivalent of Rick's $link object.

	//$sql = "SHOW DATABASES";
	// $result = $link->query($sql);
	// if ($result === false) {
	//     throw new Exception("Could not execute query: " . $link->error);
	// }

	// $db_names = array();
	// while($row = $result->fetch_array(MYSQLI_NUM)) { // for each row of the resultset
	// 	if (($row[0]!="information_schema") && ($row[0]!="performance_schema") && ($row[0]!="mysql")) {
	// 	    $db_names[] = $row[0]; // Add db name to $db_names array
	// 		echo "<option .(if($txt==$db_names[0]) ? 'selected="selected"' : ''). '>'.$db_names[0].</option>";
	// 	else
	// 		echo "<option>$db_names[0]</option>";
	// 	}
	// }

	// echo "Database names: " . PHP_EOL . print_r($db_names, TRUE); /

?>
<input type="submit" value="GetTable" name="sub">
<br>Our Tables In That Database:<select name="drptable">
				<?php 
					// if(isset($_POST['sub'])||isset($_POST['sub2'])){
					// 	$ptname=$_POST['drptable'];
					// 	$dbname=$_POST['drpdb'];
					// 	$tables = mysqli_query($db_connect,"SHOW TABLES FROM $dbname");
					// 	while($rec=mysqli_fetch_row($tables)){
					// 		if ($ptname==$rec[0]) {
					// 			echo "<option selected>$rec[0]</option>";
					// 		else
					// 			echo "<option>$rec[0]</option>";

					// 		}
					// 	}
					// }	
				 ?>
		</select> 
<input type="text" name="sub2" value="Get Recordes">
<?php
// if(isset($_POST['sub2'])){
// 	$dbname=$_POST['drpdb'];
// 	$tname=$_POST['drptable'];
// 	mysqli_select_db('$dbname');
// 	$data=mysqli_query($link,"select * from $tname");
// 	echo "<table border='2'>";
// 	$fc=mysqli_num_fields($data);
// 	for ($i=0; $i < $fc; $i++) { 
// 		$fname=mysqli_field_name($data,$i);
// 		echo "<th>$fname<?th>";

// 	}
// 	while ($rec=mysqli_fetch_row($data)) {
// 		echo "<tr>";
// 		for ($i=0; $i < $fc; $i++) { 
// 			echo "<td>$rec[$i]</td>";
// 		}
// 	}
// }
?>
</form>


	
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?>