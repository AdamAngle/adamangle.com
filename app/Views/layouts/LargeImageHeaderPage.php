<?= $this->extend('layouts/MainLayout') ?>
<?= $this->section('headerClass') ?>navbar-dark<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="anim-gradient-container">
    <div class="img-header d-flex align-items-center justify-content-center flex-column" id="img-header-ctrl">
      <?= $this->renderSection('header_content') ?>
      <a class="head-scroll-arrow" href="#content-body"><span></span></a>
    </div>
  </div>
  <div id="content-body">
    <?= $this->renderSection('content') ?>
  </div>
  
<?= $this->endSection() ?>