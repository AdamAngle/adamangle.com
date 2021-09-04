<?= $this->extend('layouts/SmallHeaderPage') ?>

<?= $this->section('title') ?>Blog<?= $this->endSection() ?>

<?= $this->section('styles') ?>
  <style>
    #img-header-ctrl {
      background: linear-gradient(
        rgba(255, 255, 255, 0.3), 
        rgba(255, 255, 255, 0.3)
      ), url("<?= ASSETS_GENERIC ?>/berkeley_log/header.jpg") no-repeat center top;
      text-shadow: 1px 1px 2px black, 0 0 1em white, 0 0 0.2em white;
      background-size: cover;
      background-position: middle bottom;
    }
  </style>
<?= $this->endSection() ?>

<?= $this->section('header_content') ?>
  <h1 class="fw-light">Blog</h1>
  <h2 class="fw-light">Random computer science things</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="pt-1em ta-l container-xl">
    <div class="row">
      <div class="loading-overlay"></div>
      <div class="card card-white col-lg-3 col-sm-12 text-center">
        Once I get a few more posts here, I will add some cool filtering controls in this box.
      </div>
      <div class="col-lg-9 col-sm-12">
        <div class="blog-list"></div>
        <div id="blog-empty-view" style="display:none;">Nothing found using the given search parameters</div>
        <a class="card-col-blog card-template" style="display:none;">
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
        </a>
      </div>
      
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
  <script src="<?= ASSETS_THIRDPARTY ?>/pagination.min.js"></script>
  <script type="text/javascript" src="<?= ASSETS_JS ?>BlogListClient.js"></script>

  <script type="text/javascript">
    p = new BlogListClient('/api/blog/posts', '.loading-overlay', '.blog-list', '.card-template', '#blog-empty-view', '/blog/');
    p.getPosts();
  </script>
<?= $this->endSection() ?>
