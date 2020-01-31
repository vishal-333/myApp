<?php 
require_once "dbprog11.php";
$output = '';
$db1 = new Database();
$query = "select * from languages where cid ='".$_POST['courseID']."' order by p_lang";
$result1 = $db1->select($query);
//$count = $result->num_rows; echo $count;exit;
$output .= '<option value="" disabled selected>-Select Language-</option>';
while($row = $result1->fetch_object()){
$output .= '<option value="'.$row->id.'">'.$row->p_lang.'</option>'; 

}
echo $output;
 ?>
