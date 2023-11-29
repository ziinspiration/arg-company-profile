<?php include 'partials/starter-head.php' ?>
<?php

$tampilBerita = query("SELECT berita.*, DATE_FORMAT(berita.date, '%d %M %Y') AS tanggal_format FROM berita");

?>
<?php include 'partials/nav.php' ?>
<?php include 'partials/breadcrumb.php' ?>
<section class="container">

    <?php if (empty($tampilBerita)) : ?>
        <div class="row justify-content-center m-auto">
            <div class="col-lg-12 text-center mt-5">
                <h3>Tidak ada berita yang tersedia.</h3>
            </div>
        </div>
    <?php else : ?>
        <div class="row justify-content-center m-auto">
            <?php foreach ($tampilBerita as $berita) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5 mb-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-5"><?= $berita['headline']; ?></h5>
                            <p class="small text-secondary mb-0"><?= $berita['tanggal_format']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>
<?php include 'partials/starter-foot.php' ?>