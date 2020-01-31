<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>



<div class="bg-info m-5">
	<div class="row justify-content-center">
		<div class="col-md-3 bg-light mt-5 p-4 mb-5 rounded">
			<h5 class="text-center text-info pb-3">Dependent Drop Down List</h5>
			<form action="" method="post">
				<div class="form-group"><select name="course" id="course" class="form-control form-control-md">
						<option value="" disabled selected>-Select Course-</option>
						<?php
						require_once "dbprog11.php";
						$db = new Database;
						$query = "select * from courses order by c_name";
							$result = $db->select($query);
							// $count = $result->num_rows; echo $count;exit;
						while ($row = $result->fetch_object()) : ?>
							
						
							<option value="<?= $row->id;?>"><?= $row->c_name;?></option>
						<?php endwhile;	?>
					</select></div>
				<div class="form-group"><select name="language" id="language" class="form-control form-control-md">
						<option value="" disabled selected>-Select Language-</option>
					</select></div>
				<div class="form-group"><input type="submit" value="submit" name="submit" class="btn btn-danger btn-block"></div>
			</form>
		</div>
	</div>
</div>





<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<script>
	$(document).ready(function() {
		$("#course").change(function() {
			var course_id = $(this).val();
			$.ajax({
				url: 'action.php',
				method : "POST",
				data: {courseID: course_id},
				success : function(data){
					$("#language").html(data);
				}
			});
			
		});
	});
</script>

<?php include_once('build/footer.php');?>