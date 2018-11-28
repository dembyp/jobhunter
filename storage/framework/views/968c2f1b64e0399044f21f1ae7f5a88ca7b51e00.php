<?php $__env->startSection('contentWebsite'); ?>
	<div class="jumbotron">
		<div class="container">
			<h2>Selamat Datang di Website Job Hunter Wahai Para Pencari Kerja</h2>
			<p>Bagi pencari kerja, mencari kerja tidak sulit asal anda mau berusaha dan tidak lupa berdoa. Salah satu usaha anda adalah melalui website yang kami buat ini. Silahkan isi data diri anda pada website ini, secara otomatis anda sudah memporomosikan data diri anda kepada dunia</p>
			<p><a href="<?php echo e(url("daftar")); ?>" class="btn btn-success btn-lg" role="button"><i class="glyphicon glyphicon-check"></i> Daftar Kerja</a>	
			<a href="<?php echo e(url("pendaftarkerja")); ?>" class="btn btn-primary btn-lg" role="button"><i class="glyphicon glyphicon-briefcase"></i>  Lihat Pencari Kerja</a></p>
		</div>
	</div>
	<div class="container">
		<h3>Random Pencari Kerja</h3>
		<hr>
		<div class="row">
		<?php $__currentLoopData = $pendaftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pencari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-6">
				<table class="well table table-bordered">
					<tbody>
						<tr>
							<td rowspan="4" width="1"><img src="images/people.png" alt="People" class="img-circle" width="140" height="140"></td>
							<td width="100">Nama</td>
							<td width="1">:</td>
							<td><?php echo e($pencari->nama); ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><?php echo e($pencari->email); ?></td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td><?php echo e($pencari->pekerjaan); ?></td>
						</tr>
						<tr>
							<td colspan="3"><a href="<?php echo e(url("pendaftarkerja/detail/" . $pencari->id)); ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-search"></i> Detail Pekerja</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	<a href="<?php echo e(url("pendaftarkerja")); ?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-tasks"></i> Tampilkan Semua</a>	
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>