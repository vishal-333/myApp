<!-- <?php require_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php require_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php require_once('../build/nav1.php');?>

<?php require_once('../build/nav2.php');?>
 -->

<?php 
require_once('dbprog13.php');
error_reporting(E_ALL);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
ini_set('display_errors', 1); 
/**
 * 
 */


// $db = new Admin;
// echo get_class($db);

class User 
{
	public $adminDo;
		
	public function __construct()
	{
		$this->adminDo = new Admin();
	}

	$adminDo->getData();
	// var_dump($this->adminDo);
	// echo get_class($this->adminDo);
	// $userDataInsertion = $this->adminDo->getData();
}
 ?>	






<!-- 	 <script type="text/javascript" src="../js/bootstrap.min.js"></script>
 <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="../js/popper.min.js"></script>

 <?php include_once('build/footer.php');?> -->