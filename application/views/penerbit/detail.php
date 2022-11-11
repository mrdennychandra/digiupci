<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Divisi</h1>
<table>
    <tr>
        <th>Kode Divisi</th>
        <th>Nama Divisi</th>
    </tr>
    <tr>
        <td><?= $kode ?></td>
        <td><?= $nama ?></td>
    </tr>
</table>

<a href='#' onclick="history.back()">Back</a>