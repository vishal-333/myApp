<?php include_once('../build/header1.php'); ?>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<?php include_once('../build/header2.php'); ?>

<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>

<?php include_once('../build/nav1.php');?>

<?php include_once('../build/nav2.php');?>

<?php include_once('config.php');?>
<?php include_once('database.php');?>
<?php $db = new Database();  ?>
<?php $query = "select * from prog1"; ?>
<?php $posts = $db->select($query); ?>
<?php if ($posts): ?>
<?php while($row = $posts->fetch_row()): ?>
<?php// while($row = $posts->fetch_array()): ?>
	<div class="blog-post">
		<h2>
			<div class="blog-post-title"><?php $row[0] ?></div>
		</h2>
	</div>
<?php endwhile; ?>
<?php endif; ?>


	
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>

<?php include_once('build/footer.php');?>

