<?php
$folder = $this->uri->segment(1);
?>
<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Katalog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link <?= $folder == 'welcome' ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>welcome">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $folder == 'penerbit' ? 'active' : '' ?>" href="<?= base_url() ?>penerbit">Penerbit</a></li>
        <a class="nav-link <?= $folder == 'buku' ? 'active' : '' ?>" href="<?= base_url() ?>buku">Buku</a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <p></p>