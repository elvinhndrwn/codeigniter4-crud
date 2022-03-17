<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="container">
	<h2>Form Add Data</h2>
	<form action="/save" method="post">
		<?= csrf_field(); ?>
		<div class="form-group">
			<input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" placeholder="Nama Mobil" name="name" autofocus>
			<div class="invalid-feedback"><?= $validation->getError('name'); ?></div>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Merk Mobil" name="merk">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Tahun Keluar" name="year">
		</div>
		<button type="submit" class="btn btn-sm btn-primary">Submit</button>
	</form>
</div>
<?= $this->endSection(); ?>