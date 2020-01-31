<?php 
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $fname = $_FILES['file1']['name'];
// if (isset($_POST['send'])) {
// 	# code...
// 	if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
// 		if (move_uploaded_file($_FILES['file1']['tmp_name'], "download/uploads/$fname")) {
// 			echo "file uploaded";
// 		}else{
// 			echo "file not uploaded";
// 		}
// 	}
// }

 ?>

 <?php include_once('../build/header1.php'); ?>

 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <?php include_once('../build/header2.php'); ?>

 <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

 <?php include_once('../build/nav1.php');?>

 <?php include_once('../build/nav2.php');?>



 <?php
 // $target_dir = "/home/vishu/Downloads/uploads/";
 $target_dir = "uploads/";
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 $uploadOk = 1;
 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 // Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {
 	// var_dump($_FILES);exit;
     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
     if($check !== false) {
         echo "File is an image - " . $check["mime"] . ".";
         $uploadOk = 1;
     } else {
         echo "File is not an image.";
         $uploadOk = 0;
     }
 }
 // Check if file already exists
 if (file_exists($target_file)) {
     echo "Sorry, file already exists.";
     $uploadOk = 0;
 }
 // Check file size
 if ($_FILES["fileToUpload"]["size"] > 500000) {
     echo "Sorry, your file is too large.";
     $uploadOk = 0;
 }
 // Allow certain file formats
 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     $uploadOk = 0;
 }
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
 // if everything is ok, try to upload file
 } else {
     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "/home/vishu/Downloads/".$target_file)) {
         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
 }
 ?>


 	
 <script type="text/javascript" src="../js/bootstrap.min.js"></script>
 <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="../js/popper.min.js"></script>

 <?php include_once('build/footer.php');?>