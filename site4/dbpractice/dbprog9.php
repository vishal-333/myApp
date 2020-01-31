
<?php include_once('Database3.php'); ?>

	<?php $db = new Database3(); ?>
	<?php  $query = "select * from prog1"; ?>
	<?php  $posts = $db->select1($query); ?>
	<?php 

	$rows=$posts->fetch_object();
	// $rows =$result->fetch_assoc();
	// $rows =$result->fetch_all();
	// echo"result of fetch_assoc";
	// print_r($rows);
	echo $rows->name; //echo "vi";exit;
	 ?>
	<div class="blog-post">
	<?php //  if($posts): ?>
		<?php //  while ($row= $posts->fetch_object()): ?>


	
	 		<h2>
	 			<div class="blog-post-sno"><?php // echo $row->sno; ?></div>
	 			<div class="blog-post-name"><?php // echo $row->name; ?></div>
	 			<div class="blog-post-age"><?php // echo $row->age; ?></div>
	 			<div class="blog-post-salary"><?php // echo $row->salary; ?></div>
	 		</h2>
		 	<?php // endwhile; ?>	
		<?php // endif; ?>
	 </div>
	<h2>abc</h2>