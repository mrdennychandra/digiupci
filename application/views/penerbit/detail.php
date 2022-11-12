<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Penerbit</h1>
<dl>
  <dt>Nama Peberbit</dt>
  <dd><?= $nama ?></dd>

  <dt>Alamat</dt>
  <dd><?= $alamat ?></dd>

  <dt>Telpon</dt>
  <dd><?= $telpon ?></dd>

  <dt>Email</dt>
  <dd><?= $email ?></dd>
</dl>

<a href='#' onclick="history.back()">Back</a>