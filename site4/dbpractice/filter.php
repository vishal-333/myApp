<?php
require_once "dbprog11.php";
// error_reporting(E_ALL);

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// ini_set('display_errors', 1);

//$FDate = $_POST['fromDate'];
//echo $FDate;
// echo $_POST['fromDate'];
 // print_r($_POST['fromDate']);
 // print_r($_POST['toDate']);
// print_r($_POST);
// var_dump($_POST);
if(isset($_POST["fromDate"],$_POST["toDate"])){  //,$_POST['toDate']
//echo "vishal"; exit;
	$output = '';
	$db = new Database;
	// echo"vi";
	$query = "select * from prog2 where created_date between '".$_POST["fromDate"]."' and '".$_POST["toDate"]."'";
	$result4 = $db->select($query);
	$count=$result4->num_rows;
	//echo $count;
	$output .= " 
		<table class='table table-bordered'>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Age</th>
				<th>Salary</th>
				<th>Order Date</th>
			</tr>
			";
			if ($result4->num_rows > 0) {
				while ($row = $result4->fetch_object()) {
					$output .= '
					<tr>
						<td>'.$row->id.'</td>
						<td>'.$row->name.'</td>
						<td>'.$row->age.'</td>

						<td>'.$row->salary.'</td>
						<td>'.$row->created_date.'</td>
					</tr>
					';
				}
			}else{
				$output .= '
				<tr>
					<td>No Order Found</td>
				</tr>
				';
			}
			$output .= '</table>';
			echo $output;
			// echo "vishal";

}
//echo "vi";
 ?>