<?php $__env->startSection('contentWebsite'); ?>
	<div class="well well-lg">
		<div class="container">
			<h2>Daftar Kerja</h2>
			<span>Halaman berisi list pencari kerja</span>
		</div>
	</div>
	<div class="container">
		<table class="table table-bordered table-hover"><tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Pekerjaan</th>
			<th width="1">Detail</th>
		</tr>
		<?php $__currentLoopData = $pendaftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pencari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><b><?php echo e($pencari->nama); ?></b></td>
			<td><?php echo e($pencari->email); ?></td>
			<td><?php echo e($pencari->pekerjaan); ?></td>
			<td><a href="<?php echo e(url("pendaftarkerja/detail/" . $pencari->id)); ?>" class="btn btn-block btn-primary btn-sm"><i class="glyphicon glyphicon-search"></i> Detail</a></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>