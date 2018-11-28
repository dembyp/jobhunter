<?php $__env->startSection('contentWebsite'); ?>
	<div class="well well-lg">
		<div class="container">
			<h2>Daftar Kerja</h2>
			<span>Halaman untuk melakukan pendaftaran kerja</span>
		</div>
	</div>
	<div class="container">
		<div class="alert alert-info"><i class="glyphicon glyphicon-info-sign"></i> Silahkan isi form di bawah ini dengan data pribadi anda untuk dipromosikan.
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">Form Data Pekerja</div>
			<div class="panel-body">
			<?php if(isset($status)): ?>
				<div class="alert alert-<?php echo $status; ?>"><?php echo $message; ?></div>
			</div>
			<?php endif; ?>
			<form method="post">
			<?php echo csrf_field(); ?>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group"><label for="nama">Nama Lengkap :</label><input for="nama" id="nama" name="nama" required  type="text" class="form-control"></div>
				</div>
				<div class="col-md-6">
					<div class="form-group"><label for="email">Email :</label><input for="email" id="email" name="email" required type="text" class="form-control"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group"><label for="pekerjaan">Pekerjaan yang diinginkan :</label><input for="pekerjaan" id="pekerjaan" name="pekerjaan" required type="text" class="form-control" placeholder="Apabila lebih dari satu gunakan tanda koma (,)"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group"><label for="alamat">Alamat :</label><textarea id="alamat" name="alamat" required class="form-control" rows="4" placeholder="Tuliskan alamat lengkap"></textarea></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group"><label for="resume">Resume :</label><textarea id="resume" name="resume" required class="form-control" rows="8" placeholder="Tuliskan profil dan kemampuan anda secara singkat"></textarea></div>
				</div>
			</div>
			<button class="btn btn-success btn-lg" type="submit" name="submit"><i class="glyphicon glyphicon-send"></i> Submit</button><button class="btn btn-danger btn-lg" type="reset">Reset</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>