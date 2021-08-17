<?= $this->extend('layouts/LargeHeaderPage') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<?= $this->endSection() ?>

<?= $this->section('header_content') ?>
  <div class="container row w-100">
    <div class="col-md-6">
      <h1 class="fw-light">Hello!</h1>
      <h2 class="fw-light">Welcome to my website!</h2>
    </div>
    <div class="col-md-6">
      I really need to put something here.
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  
<?= $this->endSection() ?>
