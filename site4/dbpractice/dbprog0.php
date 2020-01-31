<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>




<br><br>
	<table border="1" cellpadding="1" cellspacing="1">
		<tr>
		<th>SNO</th>
		<th>NAME</th>
		<th>AGE</th>
		<th>SALARY</th>
		</tr>
		<?php
		

		$dbhost="localhost";
		$dbuser="root";
		$dbpass="ilv";
		$db_name="site4db";
		$link =  new mysqli($dbhost,$dbuser,$dbpass,$db_name);

		if ($link->connect_errno) {
		    printf("Connect failed: %s\n", $link->connect_error);
		    exit();
		}

		if ($result = $link->query("SELECT * FROM City LIMIT 10")) {
		    if($count=$result->num_rows > 0){
			    echo "No of rows returned".$count."<br>";
			    $rows =$result->fetch_assoc();
			    // echo"result of fetch_assoc";
			    print_r($rows);
			    echo "<br>";
			    $rows =$result->fetch_all();
			    echo"result of fetch_all";
			    print_r($rows);


		    }
		    
		    /* free result set */
		   // $result->close();
		}
		$query="select * from prog1";
		if($result = $link->query($query)){
			while( $row = $result->fetch_object()) {
			 	echo "<tr>";
				echo "<td>$row->sno</td><td>$row->name</td><td>$row->age</td><td>$row->salary</td>";
			}
		}		
		?>
	</table>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<?php include_once('build/footer.php');?>