<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="container">
  <a href="/create" class="btn btn-sm btn-primary mb-2">Tambah Data</a>

  <!-- Alert -->
  <?= $this->include('layout/alert'); ?>
  <!-- End of Alert -->

  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Merk</th>
        <th scope="col">Year</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach($cars as $car): ?>
      <tr>
        <th scope="row"><?= $no++; ?></th>
        <td><?= $car["name"] ?></td>
        <td><?= $car["merk"] ?></td>
        <td><?= $car["year"] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
<?= $this->endSection(); ?>