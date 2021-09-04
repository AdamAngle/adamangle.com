<?= $this->extend('layouts/MainLayout') ?>
<?= $this->section('headerClass') ?>navbar-light<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="anim-gradient-container">
    <div class="anim-gradient d-flex align-items-center justify-content-center flex-column">
      <?= $this->renderSection('header_content') ?>
      <a class="head-scroll-arrow" href="#content-body"><span></span></a>
    </div>
  </div>
  <div id="content-body">
    <?= $this->renderSection('content') ?>
  </div>
  
<?= $this->endSection() ?>