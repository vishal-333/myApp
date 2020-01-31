<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">


<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>




	<div style="width: 400px;height: 400px;"><canvas id="myChart" width="400" height="400" style="color: red;"></canvas>
	</div>


<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script>
	const CHART = document.getElementById("myChart");
	//console.log(Chart.defaults.scale.ticks);
	Chart.defaults.scale.ticks.beginAtZero = true;
	// Chart.defaults.global.animation.duration = 200;
	let barChart = new Chart(CHART,{
		// type:'pie',
		type:'doughnut',
		data:{
			labels:['Strength','Skill','Health','Speed','Luck'],
			datasets:[
				{
					label:'Points',
					backgroundColor:['#f1c40f','#e67e22','#16a085','#2980b9'],
					// borderColor:['#f1c40f','#e67e22','#16a085','#2980b9'],
					//borderWidth:2,
					data:[10,20,55,30,10]
				}
			]
		},
		options:{
			cutoutPercentage:40,
			rotation:Math.PI * 1,
			animation:{
				animateScale:true
			}
		}
	});
	// $(document).ready(function(){
	// 	var ctx = $('#myChart').get(0).getContext("2d");
	// 	var data = [
	// 		{
	// 			value:30,
	// 			color:"cornflowerblue",
	// 			highlight:"lightskyblue",
	// 			label:"Obese",
	// 		},
	// 		{
	// 			value:90,
	// 			color:"chocklate",
	// 			highlight:"papayawhip",
	// 			label:"Over-weight",
	// 		},
	// 		{
	// 			value:240,
	// 			color:"darkorange",
	// 			highlight:"orange",
	// 			label:"Normal Weight",
	// 		}
	// 	];
	// 	var piechart = new Chart(ctx).Pie(data);
		// alert("ok");
	// });
</script>


<?php include_once('build/footer.php');?>