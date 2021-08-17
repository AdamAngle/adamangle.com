<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo BASE_URL; ?>favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#23a6d5" />
    <meta
      name="description"
      content="Adam Angle's website and blog."
    />
    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>/logo192.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="<?php echo BASE_URL; ?>/manifest.json" />
    
    <link href="<?php echo ASSETS_THIRDPARTY; ?>/bootstrap.min.css" rel="stylesheet">
    
    <?= $this->renderSection('styles') ?>

    <title><?= $this->renderSection('title') ?> - Adam Angle</title>
  </head>

  <body>
    <div id="root">
      <?= $this->renderSection('header') ?>
      <main><?= $this->renderSection('content') ?></main>
      <?= $this->renderSection('footer') ?>
    </div>
    
    <!-- Scripts -->
    <script
      src="<?php echo ASSETS_THIRDPARTY; ?>/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>

    <script src="<?php echo ASSETS_THIRDPARTY; ?>/bootstrap.bundle.min.js"></script>
    
    <?= $this->renderSection('scripts') ?>

    <!-- Font Awesome -->
    <script defer src="<?= ASSETS_THIRDPARTY ?>/fontawesome/js/brands.js"></script>
    <script defer src="<?= ASSETS_THIRDPARTY ?>/fontawesome/js/solid.js"></script>
    <script defer src="<?= ASSETS_THIRDPARTY ?>/fontawesome/js/fontawesome.js"></script>
  </body>

</html>
