<!DOCTYPE html>
<html>
	<head>
		<title>Job Hunter</title>
		<link href="<?php echo e(url("bootstrap/css/bootstrap.min.css")); ?>" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?php echo e(url("bootstrap/js/jquery-3.3.1.min.js")); ?>"></script>
		<script type="text/javascript" src="<?php echo e(url("bootstrap/js/bootstrap.min.js")); ?>"></script>
	</head>
	<body>
	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo e(url("")); ?>">Job Hunter</a>	
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo e(url("")); ?>">Home</a></li>
					<li><a href="<?php echo e(url("daftar")); ?>">Daftar</a></li>
					<li><a href="<?php echo e(url("pendaftarkerja")); ?>">Pendaftar Kerja</a></li>
					<li><a href="<?php echo e(url("tentang")); ?>">Tentang</a></li>
					<li><a href="<?php echo e(url("kontak")); ?>">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<br>
	<?php $__env->startSection('contentWebsite'); ?>
	<?php echo $__env->yieldSection(); ?>
	<footer>
		<div class="container">
			<hr>
			<p class="pull-right"><a href="#">Back to Top</a></p>
			<p>	&copy; Copyright 2018 <a href="http://sikam.info" target="_blank">SIKAM</a></p>
		</div>		
	</footer>
	</body>
</html>