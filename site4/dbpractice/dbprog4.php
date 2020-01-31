<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>

<table border="2" cellspacing="10" cellpadding="15">
	<?php
	if(isset($_POST['sub'])){
		$tname=$_POST['t1'];
		include_once('database2.php');
		$data = mysqli_query($con,"select * from $tname");
		$fc= mysqli_num_fields($data);
		for ($i=0; $i <$fc ; $i++) { 
			$fname=mysqli_fetch_field_direct($data, $i)->name;
			echo "<th>$fname</th>";
		}
		while ($rec=mysqli_fetch_row($data)) {
			echo "<tr>";
			for ($i=0; $i < $fc; $i++) { 
				echo "<td>$rec[$i]</td>";
			}
		}
	} ?>
</table>
<form action="" method="post">
	Table name: <input type="text" name="t1" id="">
	<input type="submit" value="Get Records" name="sub" />
</form>

	
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?>