<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>





<table border="1" cellpadding="1" cellspacing="1">
	<tr>
	<th style="background-color: lightblue;color: red;">SNO</th>
	<th style="background-color: lightblue;color: red;">NAME</th>
	<th style="background-color: lightblue;color: red;">AGE</th>
	<th style="background-color: lightblue;color: red;">SALARY</th>
		
	</tr>
		<?php
		$host="localhost";
		$user="root";
		$pass="ilv";
		$db_name="site4db";
		$con=mysqli_connect($host,$user,$pass,$db_name);
		if (mysqli_connect_errno()) {
				echo "failed to connect";
			}	
		
		$query="select * from prog1";
		$data= mysqli_query($con,$query);
		while ($row= mysqli_fetch_row($data)) {
		// while ($row= mysqli_fetch_assoc($data)) {
			echo "<tr>";
			echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]";
			// echo $row['sno'].$row['name'].$row['age'].$row['salary'];
		}
		?>
	</table>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?>