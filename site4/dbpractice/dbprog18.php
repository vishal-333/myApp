<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">



<h3 align="center">Data Table with Jquery</h3>
<div class="table-responsive">
	<table class="table table-striped table-bordered" id="prog1-data">
		<thead>
			<tr>
				<td>Name</td>
				<td>Age</td>
				<td>Salary</td>
			</tr>
		</thead>

	<?php
		require_once "dbprog11.php";
		$db = new Database;
		$query = "select * from prog1";
		$result2 = $db->select($query);
		while ($row = $result2->fetch_object()) : ?>
			<tr>
				<td><?= $row->name; ?> </td>
				<td><?= $row->age; ?> </td>
				<td><?= $row->salary; ?> </td>
			</tr>
		<?php endwhile;	?> 
	</table>
</div>


<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
	$(document).ready(function() {
		$('#prog1-data').DataTable();
	});
</script>
<?php include_once('build/footer.php');?>