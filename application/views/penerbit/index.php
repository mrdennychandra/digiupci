<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>List Penerbit</h1>
<a href="<?= base_url("penerbit/form")?>">Tambah</a>
<table> 
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
                <a href="<?= base_url("penerbit/detail/{$data['id']}")?>">Detail</a>
                <a href="<?= base_url("penerbit/form/{$data['id']}")?>">Edit</a>
                <a onclick="return confirm('menghapus data?')" href="<?= base_url("penerbit/hapus/{$data['id']}")?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>