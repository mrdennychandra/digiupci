<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('penerbit/save') ?>">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
<div>
    <label></label>
    <div>
    <h3>Tambah/Ubah Penerbit</h3>
    </div>
</div>
<div>
    <label>Nama Penerbit</label>
    <div>
        <input type="text" name="nama" id="nama" value="<?= $nama ?>" required/>
    </div>
</div>

<div>
    <label>Alamat</label>
    <div>
        <input type="text" name="alamat" id="alamat" value="<?= $alamat ?>" required/>
    </div>
</div>

<div>
    <label>Telpon</label>
    <div>
        <input type="tel" name="telpon" id="telpon" value="<?= $telpon ?>" required/>
    </div>
</div>

<div>
    <label>Email</label>
    <div>
        <input type="email" name="email" id="email" value="<?= $email ?>" required/>
    </div>
</div>

<div>
    <input type="button" value="Cancel" onclick="history.back()" />
    <input type="submit" value="Simpan" />
</div>

</form>