<?php $__env->startSection('contentWebsite'); ?>
	<div class="well well-lg">
		<div class="container">
			<h2>Detail Pendaftar Kerja</h2>
			<span>Halaman detail untuk <?php echo e($pendaftar -> nama); ?></span>
		</div>
	</div>
	<div class="container">
		<table class="well table table-bordered">
			<tr>
				<td width="200">Nama</td>
				<td width="1">:</td>
				<td><?php echo e($pendaftar -> nama); ?> </td>
			</tr>
			<tr>
				<td width="200">Email</td>
				<td width="1">:</td>
				<td><?php echo e($pendaftar -> email); ?> </td>
			</tr>
			<tr>
				<td width="200">Pekerjaan yang dicari</td>
				<td width="1">:</td>
				<td><?php echo e($pendaftar -> pekerjaan); ?> </td>
			</tr>
			<tr>
				<td width="200">Alamat</td>
				<td width="1">:</td>
				<td><?php echo e($pendaftar -> alamat); ?> </td>
			</tr>
			<tr>
				<td width="200">Resume</td>
				<td width="1">:</td>
				<td><?php echo e($pendaftar -> resume); ?> </td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><a href="mailto:<?php echo e($pendaftar->email); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-envelope"></i> Kirim Email</a><a href="<?php echo e(url("pendaftarkerja")); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Kembali ke Daftar</a></td>
			</tr>			
		</table>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>