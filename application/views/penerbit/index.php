<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>List Penerbit</h1>
<div class="d-flex justify-content-end">
    <a  class="btn btn-success btn-sm" href="<?= base_url("penerbit/form")?>">Tambah</a>
</div>
<br/>
<table class="table table-striped"> 
    <tr>
        <th>Nama Peberbit</th>
        <th>Alamat</th>
        <th>Telpon</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['telpon'] ?></td>
            <td><?= $data['email'] ?></td>
            <td>
            <div class="btn-group">
                <a class="btn btn-primary btn-sm" href="<?= base_url("penerbit/detail/{$data['id']}")?>">Detail</a>
                <a class="btn btn-warning btn-sm" href="<?= base_url("penerbit/form/{$data['id']}")?>">Edit</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("penerbit/hapus/{$data['id']}")?>">Hapus</a>
            </div>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>