<?php
include "../conf/koneksi.php";
include("../template/header.php")
?>



<section class="isi-cerita">
    <section class="satu">
        <div class="container-section-satu">
            <div class="left">
                <h1 class="judul-artikel"><?php $sql1 = mysqli_query($connect, "SELECT * FROM artikel");
                                            $p = mysqli_fetch_array($sql1);
                                            $judul = $p['judul'];
                                            echo $judul; ?></h1>
                <div class="gap"></div>
                <p class="isi-artikel"><?php $isi = $p['isi'];
                                        echo $isi; ?></p>
            </div>
            <div class="right">
                <h3>Cerita Lain</h3>
                <?php include("../template/sub-sub-artikel.php") ?>
                <?php include("../template/sub-sub-artikel.php") ?>
                <?php include("../template/sub-sub-artikel.php") ?>
                <div class="gap"></div>
                <h5><a href=""> More..</a></h5>
            </div>
        </div>
    </section>
    <section class="dua">
        <div class="container">
            <a href="./artikel.php" class="klik">
                <div class="tombol tombol-satu">Kembali ke Artikel</div>
            </a>
        </div>
    </section>
    <section class="tiga">
        <div class="container header">
            <h1>Cerita Terbaru</h1>
            <div class="gap"> </div>
            <div class="container-cardnya">
                <div class="cardnya">
                    <?php include("../template/sub-artikel.php"); ?>
                </div>
            </div>
        </div>
    </section>


    </body>

    </html>