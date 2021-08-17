<?= $this->extend('layouts/SmallHeaderPage') ?>

<?= $this->section('title') ?>Journey<?= $this->endSection() ?>

<?= $this->section('styles') ?>
  <link title="timeline-styles" rel="stylesheet" href="<?= ASSETS_THIRDPARTY ?>/timeline3/css/timeline.css">
<?= $this->endSection() ?>

<?= $this->section('header_content') ?>
  <h1 class="fw-light">Journey</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="pt-1em ta-l container-xl">
    <p>Sorry, there would be a pretty cool interactive timeline here (with all sorts of pictures, videos, and the like), but I just haven't found the time to finish it. I promise it will be done in the near future.  
  </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
  <script src="<?= ASSETS_THIRDPARTY ?>/timeline3/js/timeline-min.js"></script>
  <!-- 3 -->
  <script type="text/javascript">
    t = new TL.Timeline('timeline-embed','/data/journey.json');
  </script>
<?= $this->endSection() ?>