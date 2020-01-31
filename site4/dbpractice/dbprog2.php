		
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
		<?php include_once('DatabaseDbprog.php'); ?>
		<?php

		$db = new DatabaseDbprog;
		echo get_class($db);	
		$sql = "select * from prog1";
		$result = $db->link->query($sql);
		 if (!empty($result) ) {
		     if($count=$result->num_rows >0){
				while ($row= $result->fetch_row()) {
					echo "<tr>";
					echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
				}
		 	    //echo "No of rows returned".$count."<br>";
				// echo"<br>"."vi";//exit;//error
		 	    // $rows =$result->fetch_assoc();
		 	    //  echo"result of fetch_row";
		 	    // print_r($rows);
		 	}
		 }
		?>
	</table>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?>