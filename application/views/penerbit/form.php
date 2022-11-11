<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('divisi/save') ?>">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
<div>
    <label></label>
    <div>
    <h3>Tambah/Ubah Divisi</h3>
    </div>
</div>
<div>
    <label>Kode Divisi</label>
    <div>
        <input type="text" name="kode" id="kode" value="<?= $kode ?>" required size="3"/>
    </div>
</div>

<div>
    <label>Nama Divisi</label>
    <div>
        <input type="text" name="nama" id="nama" value="<?= $nama ?>" required size="30"/>
    </div>
</div>

<div>
<label></label>
<div>
    <input type="button" value="Cancel" onclick="history.back()" />
    <input type="submit" value="Simpan" />
</div>

</form>