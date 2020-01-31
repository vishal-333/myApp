<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>

	<table border="1" cellpadding="1" cellspacing="1">
		<?php
		$con=mysqli_connect("localhost","root","ilv","site4db");
		if (mysqli_connect_errno()) {
				echo "failed to connect";
			}	
		
		$data= mysqli_query($con,"select * from prog1");
		$fc= mysqli_num_fields($data); 
		// echo "vishal";
		// echo $fc;
		?>
		<tr>
		<?php
		for($i=0;$i<$fc;$i++){
			// $fname= mysqli_field_name($data,$i);
			$fname= mysqli_fetch_field_direct($data, $i)->name;
	
			echo "<th>$fname</th>";
		}  ?>
		</tr>
		
		<?php
		while ($rec= mysqli_fetch_row($data)) {
			 echo "<tr>";
			for($i=0;$i<$fc;$i++){
				echo "<td>$rec[$i]</td>";
			}
		    
		 }?>
		
	</table>
	
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?>