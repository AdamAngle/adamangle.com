<?= $this->extend('layouts/MainLayout') ?>

<?= $this->section('content') ?>
  <div class="">
    <div class="anim-gradient-container d-flex align-items-center justify-content-center flex-column" id="main-header-ctrl">
      <?= $this->renderSection('header_content') ?>
    </div>
  </div>
  <div id="content">
    <?= $this->renderSection('content') ?>
  </div>
  
<?= $this->endSection() ?>