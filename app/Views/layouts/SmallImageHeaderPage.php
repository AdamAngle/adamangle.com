<?= $this->extend('layouts/MainLayout') ?>

<?= $this->section('content') ?>
  <div class="anim-gradient-container-sm">
    <div class="img-header d-flex align-items-center justify-content-center flex-column" id="img-header-ctrl">
      <?= $this->renderSection('header_content') ?>
    </div>
  </div>
  <div id="content-body">
    <?= $this->renderSection('content') ?>
  </div>
  
<?= $this->endSection() ?>