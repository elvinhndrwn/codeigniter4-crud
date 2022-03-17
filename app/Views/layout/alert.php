  <?php if(session()->getFlashdata('alert')):  ?>
  <div class="alert alert-success" role="alert">
  	<?= session()->getFlashdata('alert'); ?>
  </div>
  <?php endif; ?>