<?php $__env->startSection('contentWebsite'); ?>
	<div class="well well-lg">
		<div class="container">
			<h2>Tentang Website</h2>
			<span>Kenapa website ini ada ?</span>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				<div class="list-group">
					<a href="#tentang" class="list-group-item"><i class="glyphicon glyphicon-hdd"></i> Tentang Website</a>
					<a href="#visi" class="list-group-item"><i class="glyphicon glyphicon-hdd"></i> Visi</a>
					<a href="#kontak" class="list-group-item"><i class="glyphicon glyphicon-hdd"></i> Kontak</a>			
				</div>
			</div>
			<div class="col-xs-9">
			<div class="panel panel-default" id="tentang">
				<div class="panel-heading"><h3 style="padding:0; margin:0;">Tentang Website</h3></div>
				<div class="panel-body">Website ini ditujukan untuk pencari kerja dst</div>
			</div>
			<div class="panel panel-default" id="visi">
				<div class="panel-heading"><h3 style="padding:0; margin:0;">Visi Website</h3></div>
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae sint quod quibusdam quas exercitationem quia laborum eum ullam illo aspernatur, voluptatibus perspiciatis odit magni ut et natus provident. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque quaerat fugit expedita eos iure nam, ea quas, necessitatibus hic vero tenetur voluptatibus minus quos fugiat vel deserunt itaque optio reiciendis.</div>
			</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>