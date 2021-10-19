<?php $current_page = 'tutorial'; ?>
<?php
include "../conf/koneksi.php";
include("../template/header.php")
?>



<section class="isi-cerita">
    <section class="satu">
        <div class="container-section-satu">
            <div class="left">
                <a href="./video.php">
                    <div class="card-tutorial">
                        halo
                    </div>
                </a>
                <a href="./video.php">
                    <div class="card-tutorial">
                        halo
                    </div>
                </a>
            </div>
            <div class="right">
                <h3>Cerita Lain</h3>
                <?php $sql2 = mysqli_query($connect, "SELECT * FROM artikel ORDER BY artikel.id ASC");
                ?>
                <?php while ($result = mysqli_fetch_array($sql2)) : ?>
                    <div class="garis"></div>
                    <a href="../halaman/isi-cerita.php?id=<?= $result['id']; ?>" class="container-lain">
                        <div class="text-container">
                            <p><?php echo $result['judul']; ?></p>
                            <p class="tanggal"><?= date('d F Y', $result['date_created']) ?></p>
                        </div>
                        <div class="image-container">
                            <?php $g = $result['gambar']; ?>
                            <img src="../../serverside/gambar/<?= $g; ?>" alt="">
                        </div>

                    </a>
                <?php endwhile; ?>
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

    </body>

    </html>