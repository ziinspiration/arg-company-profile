<?php include 'partials/starter-head.php' ?>
<?php

$loker = query("SELECT * FROM lowongan_kerja");

$i = 0;

?>
<?php include 'partials/nav.php' ?>
<?php include 'partials/breadcrumb.php' ?>
<table class="table table-striped w-75 m-auto mt-5">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Posisi</th>
            <th scope="col">Kualifikasi</th>
            <th scope="col">Daftar</th>
        </tr>
    </thead>
    <?php foreach ($loker as $l) :
        $i++; ?>
        <tbody>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $l['posisi']; ?></td>
                <td><a href="">Klik disini</a></td>
                <td><a href="">Daftar disini</a></td>
            </tr>
        </tbody>
    <?php endforeach; ?>
</table>
<?php include 'partials/starter-foot.php' ?>