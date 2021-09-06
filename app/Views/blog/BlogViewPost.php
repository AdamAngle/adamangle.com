<?= $blogPost->img
  ? $this->extend('layouts/SmallImageHeaderPage')
  : $this->extend('layouts/SmallHeaderPage') ?>

<?= $this->section('title') ?><?= $blogPost->title ?> - Blog<?= $this->endSection() ?>
<?= $this->section('headerClass') ?>navbar-dark<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="author" content="Adam Angle" />
<meta name="distribution" content="global" />
<meta name="published" content="<?= $blogPost->postIso ?>" />
<meta name="modified" content="<?= $blogPost->editIso ?>" />
<meta name="email" content="contact@adamangle.com" />
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= ASSETS_THIRDPARTY ?>/prism/prism.css" />
<style>
  #img-header-ctrl {
    background: linear-gradient(
      rgba(0, 0, 0, 0.3), 
      rgba(0, 0, 0, 0.3)
    ), url("<?= $blogPost->img ?>") no-repeat center top;
    text-shadow: 1px 1px 2px black, 0 0 1em white, 0 0 0.2em white;
    background-size: cover;
    color: white;
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('header_content') ?>
  
  <h1 class="fw-light"><?= $blogPost->title ?></h1>
  <h2 class="fw-light"><?= $blogPost->subtitle ?></h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="pt-1em ta-l container-md blog-content">
    <a href="/blog" class="return-to-blog">
      <i class="fas fa-arrow-left"></i>
      Return to all blog posts
    </a>
    <div class="blog-post-publish-date">
      <?= sprintf("Posted on %s", $blogPost->postDate) ?>
      <?= $blogPost->editDate
        ? sprintf("<br/>Edited on %s", $blogPost->editDate) : ""
      ?>
    </div>
    <?= $pd->text($blogPost->body) ?>
  </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script defer src="<?= ASSETS_THIRDPARTY ?>/prism/prism.js"></script>
<?= $this->endSection() ?>
