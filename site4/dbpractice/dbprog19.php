<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">



<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>


<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">



<?php 
require_once "dbprog11.php";
$db = new Database;
$query = "select * from prog2";
$result3 = $db->select($query); 
 ?>
<div class="setting mt-5 ">
	

	<input type="text" class=" ml-3" name="fromDate" id="fromDate">
	<input type="text" class=" ml-3" name="toDate" id="toDate">
	<input type="button" value="filter" name="filter" id="filter" class="ml-3 btn btn-info"/>

	<div id="order_table">
		<table class='table table-bordered'>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Age</th>
				<th>Salary</th>
				<th>Order Date</th>
			</tr>	
			<?php while ($row = $result3->fetch_object()) :?>
				<tr>
					<td><?= $row->id;  ?> </td>
					<td><?= $row->name;  ?> </td>
					<td><?= $row->age;  ?> </td>
					<td><?= $row->salary;  ?> </td>
					<td><?= $row->created_date;  ?> </td>
				</tr>
			<?php endwhile; ?>
		</table>
	</div>
</div>



<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 


<script>
	$(document).ready(function() {
			$.datepicker.setDefaults({
				dateFormat:'yy-mm-dd',
				changeMonth: true,
				  changeYear: true,
				  yearRange: "2012:2020"
			});
		// // $(function(){
			$("#fromDate").datepicker();
			$("#toDate").datepicker();
		// });
		// $("#fromDate").datepicker({
		// 	dateFormat:'d-m-y',
		// 	//changeMonth: true,

		// });
		$("#filter").click(function(){
			//var a=10; alert(a);
			// alert($("#fromDate").val());exit;
			var fromDate = $('#fromDate').val();
			// alert(from_date);exit;
			var toDate = $('#toDate').val();
			// alert(to_date);exit;

				//alert("ok");exit;
			if(fromDate != '' && toDate != ''){
				// alert("ok");exit;
				$.ajax({
					url: 'filter.php',
					method: 'POST',
					data: {fromDate:fromDate,toDate:toDate},
					success:function(data)
					{
						//alert('ok');
						$('#order_table').html(data);
					}
				
				});
				
			}else{
				alert("Please Select Date");
			}
		});
	});
</script>

<?php include_once('build/footer.php');?>