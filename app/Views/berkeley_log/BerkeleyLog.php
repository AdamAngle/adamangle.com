<?= $this->extend('layouts/SmallHeaderPage') ?>

<?= $this->section('title') ?>Blog<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<?= $this->endSection() ?>

<?= $this->section('header_content') ?>
  <h1 class="fw-light">berkeley.log</h1>
  <h2 class="fw-light">A cumulative log of my UC Berkeley studies</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="pt-1em ta-l container-xl">
    <div class="row"><div class="col-lg-6 col-sm-12">test</div></div>
    <hr />
    <div class="row">
      <div class="loading-overlay"></div>
      <div class="card col-lg-3 col-sm-12">

      </div>
      <div class="col-lg-9 col-sm-12">
        <div class="blog-list"></div>
        <div id="blog-empty-view" style="display:none;">Nothing found using the given search parameters</div>
        <div class="card-col-blog card-template" style="display:none;">
          <div class="card-hover-grow card">
            <div class="row">
              <div class="col-sm-4"><img src="https://th.bing.com/th/id/OIP.2_3j6nWtlUN1LZcmuPF0UgHaEK?w=297&amp;h=180&amp;c=7&amp;o=5&amp;pid=1.7" height="150" class="img-nostretch w-100" /></div>
              <div class="card-blog-content col-sm-8">
                <div class="card-title h5 post-title"></div>
                <div class="card-subtitle h6 post-date">Aug 17, 2021</div>
                <p class="card-text post-description"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
  <script src="<?= ASSETS_THIRDPARTY ?>/pagination.min.js"></script>
  <script type="text/javascript" src="<?= ASSETS_JS ?>BlogListClient.js"></script>

  <script type="text/javascript">
    p = new BlogListClient('/api/berkeley_log/posts', '.loading-overlay', '.blog-list', '.card-template', '#blog-empty-view');
    p.getPosts();
  </script>
<?= $this->endSection() ?>
