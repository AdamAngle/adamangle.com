<?= $this->extend('layouts/LargeSingularContentPage') ?>

<?= $this->section('title') ?>Journey<?= $this->endSection() ?>

<?= $this->section('styles') ?>
  <link title="timeline-styles" rel="stylesheet" href="<?= ASSETS_THIRDPARTY ?>/timeline3/css/timeline.css">
<?= $this->endSection() ?>

<?= $this->section('header_content') ?>
  <div class="ta-l mb-1 w-100 h-100">
    <div id='timeline-embed' style="width: 100%; height: 100%"></div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <noscript>
    This page requires JavaScript to be enabled to work properly. As much as I would like to create a non-JS friendly version, I just don't have the time right now. To view this content, please enable JavaScript and refresh the page.
  </noscript>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
  <script src="<?= ASSETS_THIRDPARTY ?>/timeline3/js/timeline-min.js"></script>
  <!-- 3 -->
  <script type="text/javascript">
    var additionalOptions = {
      font: '<?= ASSETS_THIRDPARTY ?>/timeline3/css/fonts/font.segoe-adamangle.css'
    }
    t = new TL.Timeline('timeline-embed','/data/journey.json', additionalOptions);
  </script>
<?= $this->endSection() ?>