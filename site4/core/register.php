<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>


	<div class="container">
		<div class="m-5 p-5 "> 
		       
		 	<h3 class="ml-5 pl-5">Registration</h3> 
		 	<!-- <form action="" method="post" name="frm1"> -->
		 		<div class="col-md-12 form-group row">
		 			<div class="col-md-2"><label for="name">Name</label></div>
		 			<div class="col-md-6"><input type="text" name="name" id="name"></div>
		 		</div>
		 		<div class="col-md-12 form-group row">
		 			<div class="col-md-2"><label for="mob">Mobile No</label></div>
		 			<div class="col-md-6"><input type="text" name="mob" id="mob"></div>
		 		</div>
		 		<div class="col-md-12 form-group row">
		 			<div class="col-md-2"><label for="email">Email</label></div>
		 			<div class="col-md-6"><input type="email" name="email" id="email"></div>
		 		</div>
		 		<div class="col-md-12 form-group row">
		 			<div class="col-md-2"><label for="pass">Password</label></div>
		 			<div class="col-md-6"><input type="password" name="pass" id="pass"></div>
		 		</div>
		 		<div class="col-md-12 form-group row">
		 			<div class="col-md-2"><label for="gender">Gender</label></div>
		 			<div class="col-md-6">Male&nbsp;<input type="radio" name="gender"  value="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Female&nbsp;<input type="radio" name="gender"  value="female"></div>
		 		</div>
		 		<div class="col-md-12 form-group row">
		 			<div class="col-md-2"><label for="city">City</label></div>
		 			<div class="col-md-6"><select name="city" id="city"><option></option><option>Nagpur</option><option>Chandrapur</option><option>Yavatmal</option> </select></div>
		 		</div>
		 		<div class="col-md-12 form-group row">
		 			<div class="col-md-2"><label for="languages">Languages</label></div>
		 			<div class="col-md-6">English<input type="checkbox" name="languages[]" value = "english">Hindi<input type="checkbox" name="languages[]" value = "hindi">Marathi<input type="checkbox" name="languages[]" value = "marathi"></div>
		 		</div>
		 		<div class="col-md-12 form-group row">
		 			<div class="col-md-2"><label for="dob">DOB</label></div>
		 			<div class="col-md-6"><input type="text" name="dob" id="dob"></div>
		 		</div>
		 		<div class="col-md-6 form-group row m-2 ml-5">
		 			<button class="btn btn-success m-3" id="register">Register</button> 
		 			<button class="btn btn-danger m-3" id="clear">Clear</button>
		 		</div>
		 	<!-- </form> -->
	 		<div class="col-md-6 form-group row m-2 ml-5" id="error">
	 			<!-- <span class="error m-3" id="error"></span> -->
	 		</div>	
			
		</div>
	</div>

		
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/popper.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#register').click(function(event) {
				// if ($('#name').val()==''|| $('#name').val()==null) {
				// 	//alert('Enter name');
				// }
				 // alert("hi");
				 validateForm();  
			});
			function validateForm(){
				var nameReg = /^[A-Za-z]+$/; 
				var mobReg = /^[0-9]+$/; 
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
				var passReg = /^[\w]$/; 
				// var genderReg = /^[]$/; 
				// var cityReg = /^[]$/; 
				// var languageReg = /^[]$/; 
				// var dobReg = /^[]$/; 

				var name = $('#name').val();
				var mob = $('#mob').val();
				var email = $('#email').val();
				var pass = $('#pass').val();
				var gender = $("input[name='gender']:checked").val(); 
				var city = $('[name="city"]').val(); 

				// var language = [];
				// var languages = $('input[type="checkbox"]:checked').val();
				//alert(l);
				// var checkcount = 0;	  
				// var r = document.forms["frm1"]["languages[]"];
				// for (var i = 0; i < r.length; i++) {
				// 	if (r[i].checked){
				// 		languages[i]=language[i];
				// 		checkcount++;
				// 	}
				// }
				
				var dob = $('#dob').val();

				// alert(city);
				// alert(gender);
				// alert(language);


				var inputVal = new Array(name,mob,email,pass,gender,city,dob);
				// var inputVal = new Array(name,mob,email,pass,gender,city,languages,dob);
				var inputMsg = new Array('Name','Mobile Number','Email Address','Password','Gender','City','Date Of Birth');
				// var inputMsg = new Array('Name','Mobile Number','email address','password','gender','city','language','Date Of Birth');
				$('.error').hide();
				// alert(inputVal.length);

				for (var i = 0; i < inputVal.length; i++) {
					if(inputVal[i] == ''||inputVal[i] == null){
				 		// alert("hi");
						// alert('Enter'+inputMsg[i]);
						// var str1 = "Hello ";
						// var str2 = "world!";
						// var res = str1.concat(str2);

						// var x = $(this).attr("name");

						// var a = inputVal[i];
						// $('#'+ a).after('<span class = "error"> Please enter your '+ inputMsg[i] + '</span><br>');
						// $('#'+ a).append('<span class = "error"> Please enter your '+ inputMsg[i] + '</span><br>');
						$('#error').append('<span class = "alert alert-danger"> Please enter your '+ inputMsg[i] + '</span>');
					}
				}


			}
		});
	</script>

	<?php include_once('build/footer.php');?>

