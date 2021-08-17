<?= $this->extend('layouts/SmallImageHeaderPage') ?>

<?= $this->section('title') ?>Journey<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<style>
  #img-header-ctrl {
    background: linear-gradient(
      rgba(255, 255, 255, 0.3), 
      rgba(255, 255, 255, 0.3)
    ), url("https://th.bing.com/th/id/R98e15e0a1ca7ddda6015bb5f1c625487?rik=C7gg5Wec2ydKlw&pid=ImgRaw") no-repeat center top;
    text-shadow: 1px 1px 2px black, 0 0 1em white, 0 0 0.2em white;
    background-size: cover;
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('header_content') ?>
  
  <h1 class="fw-light">Test</h1>
  <h2 class="fw-light">subtitle</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="pt-1em ta-l container-xl">
    
  </div>
<?= $this->endSection() ?>
