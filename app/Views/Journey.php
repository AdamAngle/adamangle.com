<?= $this->extend('layouts/SmallHeaderPage') ?>

<?= $this->section('title') ?>Journey<?= $this->endSection() ?>

<?= $this->section('styles') ?>
  <link title="timeline-styles" rel="stylesheet" href="<?= ASSETS_THIRDPARTY ?>/timeline3/css/timeline.css">
<?= $this->endSection() ?>

<?= $this->section('header_content') ?>
  <h1 class="fw-light">Journey</h1>
  <h2 class="fw-light">subtitle</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="pt-1em ta-l container-xl">
    <div id='timeline-embed' style="width: 100%; height: 600px"></div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
  <script src="<?= ASSETS_THIRDPARTY ?>/timeline3/js/timeline-min.js"></script>
  <!-- 3 -->
  <script type="text/javascript">
    t = new TL.Timeline('timeline-embed','/data/journey.json');
  </script>
<?= $this->endSection() ?>