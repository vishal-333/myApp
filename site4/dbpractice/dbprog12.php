<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>


<?php require_once('dbprog11.php');
// error_reporting(E_ALL);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
// ini_set('display_errors', 1); ?>
<?php
		
		$db = new Database();
		
		
	
		$query = "select * from prog1";
		$result = $db->select($query);
		
		// $count = $result->num_rows;
		// echo "No of rows returned=".$count;
		if($result != false){
			while ($row = $result->fetch_object()) {
				// print_r($row);
				echo $row->sno;
				echo $row->name;
				echo $row->age;
				echo $row->salary;
				echo "<br>";
			}
		}
?>


<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?>