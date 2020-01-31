<?php header('Content-Type: application/json');	 ?>


<?php require_once'dbprog11.php';
	$db = new Database;
	$query = "select name,salary from prog2";
	$result5 = $db->select($query);
	// $count =$result5->num_rows;
	// echo $count;
	$data = array();
	// while ($row = $result5->fetch_row()) {
	// while ($row = $result5->fetch_array()) {
	while ($row = $result5->fetch_assoc()) {
	// while ($row = $result5->fetch_object()) {
		$data[] = $row;
	}
	print json_encode($data);
	// json_encode($data);

	// print_r($data);
	// print_r($data[1]['name']);
 ?>

