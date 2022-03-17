<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="container">
	<h2>Car Detail</h2>
	<div class="row">
		<div class="col-4">
			<div class="card-group">
				<div class="card">
					<img class="card-img-top" src="https://toyota-cms.azureedge.net/toyotacms/attachments/ckgv1n5ip002z0gnxb7ctuinm-0101010111-side.mobile.png" alt="Card image cap"  height="200">
					<div class="card-body">
						<h5 class="card-title"><?= $car['name'] ?></h5>
						<p class="card-text"><?= $car['merk']. ' - ' .$car['year'] ?></p>
						<div class="row float-right text-white">
							<div class="col">
								<a href="" class="btn btn-sm btn-warning">Edit</a>
								<a href="" class="btn btn-sm btn-danger">Delete</a>

							</div>
						</div>
					</div>
					<div class="card-footer">
						<small class="text-muted">Last updated 3 mins ago</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>