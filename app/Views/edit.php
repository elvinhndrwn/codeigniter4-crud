<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="container">
	<h2>Form Edit Data</h2>
	<form action="/update/<?= $car['id'] ?>" method="post">
		<?= csrf_field(); ?>
		<div class="form-group">
			<input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" placeholder="Nama Mobil" name="name" autofocus value="<?= (old('name')) ? old('name') : $car['name'] ?>">
			<div class="invalid-feedback"><?= $validation->getError('name'); ?></div>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Merk Mobil" name="merk" value="<?= (old('merk')) ? old('merk') : $car['merk'] ?>">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Tahun Keluar" name="year" value="<?= (old('year')) ? old('year') : $car['year'] ?>">
		</div>
		<button type="submit" class="btn btn-sm btn-primary">Update Data</button>
	</form>
</div>
<?= $this->endSection(); ?>