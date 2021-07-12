<?= $this->extend('layouts/SmallHeaderPage') ?>

<?= $this->section('title') ?>Blog<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<?= $this->endSection() ?>

<?= $this->section('header_content') ?>
  <h1 class="fw-light">Blog</h1>
  <h2 class="fw-light">Random computer science things</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="pt-1em ta-l container-xl">
    <div class="row"><div class="col-lg-6 col-sm-12">test</div></div>
    <hr />
    <div class="row">
      <div class="card-col-blog col-lg-6 col-sm-12">
        <div class="card-hover-grow card">
          <div class="row">
            <div class="col-sm-4"><img src="https://th.bing.com/th/id/OIP.2_3j6nWtlUN1LZcmuPF0UgHaEK?w=297&amp;h=180&amp;c=7&amp;o=5&amp;pid=1.7" height="150" class="img-nostretch w-100" /></div>
            <div class="card-blog-content col-sm-8">
              <div class="card-title h5">Test Blog Post (Markdown)</div>
              <div class="card-subtitle h6">Apr 2, 2021</div>
              <p class="card-text">A blog post to test the blogging engine's Markdown features.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>
