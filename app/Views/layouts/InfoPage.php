<?= $this->extend('layouts/MainLayout') ?>

<?= $this->section('content') ?>
  <div id="content-body">
    <?= $this->renderSection('content') ?>
  </div>
  
<?= $this->endSection() ?>