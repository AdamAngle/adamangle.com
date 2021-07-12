<?= $this->extend('layouts/BaseStructure') ?>

<?= $this->section('styles') ?>
  <link rel="stylesheet" href="<?= ASSETS_CSS ?>CommonLayout.css">
<?= $this->endSection() ?>

<?= $this->section('header') ?>
  <?= $this->include('partials/Header') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script type="text/javascript" src="<?= ASSETS_JS ?>common.js"></script>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= $this->include('partials/Footer') ?>
<?= $this->endSection() ?>