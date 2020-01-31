<!-- <?php require_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php require_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php require_once('../build/nav1.php');?>

<?php require_once('../build/nav2.php');?> -->

<?php 
// error_reporting(E_ALL);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
// ini_set('display_errors', 1); 
/**
 * 
 */

require_once "Database.php";

class Admin 
{
	public $db;
	
	public function __construct()
	{
		$this->$db = new Database();
	}

	public function getData()
	{
		
		$query = "select * from prog1";
		$result = $db->select($query);
		if($result != false){
			while ($row = $result->fetch_object()) {
				echo $row->name;
				// return $row->name;
			}
		}
	}


	// public function insertData()
	// {
		
	// 	$query = "insert into prog1(name,age,salary) values('swapnil',28,28000)";
	// 	$insert_row = $db->insert($query);

	// 	if(!empty($insert_row)) { 
	// 		<div class="alert alert-success" role="alert">
	// 		 Record  added successfully !!!
	// 		</div>

	// 	<?php
	// 	}
	// }

}

?>



<!-- 
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?> -->