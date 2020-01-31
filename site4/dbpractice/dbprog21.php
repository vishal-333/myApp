<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">


<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>




	<div style="width: 400px;height:400px;"><canvas id="myChart" width="400" height="400" style="color: red;"></canvas></div>



<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script>
	$(document).ready(function(){
		// var ctx = $('#myChart');
		// var ctx = $('#myChart').get(0).getContext("2d");
		
		var data1 = {
	        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
	        datasets: [{
	            label: 'My First dataset',
	            backgroundColor: '#16a085',
	            // color:'aqua',
	            //borderColor: 'red',
	            data: [10, 5, 2, 20, 30, 45]
	        }]
		};
			 
		var options1 = {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero: true
	                }
	            }]
	        }
	    };
		
		var ctx = $('#myChart');
		// var piechart = new Chart(ctx).Bar(data1,options1);
		var piechart = new Chart(ctx,{
			type:'bar',
			data:data1 ,
			options: options1,
		});
	});
</script>


<?php include_once('build/footer.php');?>