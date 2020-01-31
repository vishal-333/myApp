$(document).ready(function() {
		var data;
		$.ajax({
			url: 'http://site4.com/dbpractice/dbprog24.php',
			method: 'GET',
			// dataType: 'json',
			 // data: data,
			success:function(data){
				// console.log(data);
				var name = [];
				var salary = [];
				for(var i in data){
					// console.log(i);
					// console.log(data[i].name);
					name.push(data[i].name);
					salary.push(data[i].salary);
				}
				// alert([name][0]);
				//alert (name[0]);
				var chartdata = {
					labels:name,
					datasets:[
						{
							label:'Employee Salary',
							backgroundColor:['#f1c40f','#e67e22','#16a085','#2980b9'],
							borderColor:'red',
							hoverBackgroundColor:'black',
							hoverBorderColor:'brown',
							data:salary
						}
					]
				};
				var options1 = {
			        scales: {
			            yAxes: [{
			                ticks:{
			                	min:20000
			                } 
			            }]
			        }
			    };
				var ctx = $('#myChart');
				var barGraph = new Chart(ctx,{
					// type:'pie',
					type:'doughnut',
					data:chartdata,
					options:options1
				});
			},
			error:function(data){
				console.log(data);
			}
		});
		
	});