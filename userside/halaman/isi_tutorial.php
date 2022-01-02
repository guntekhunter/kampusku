<?php $current_page = 'tutorial'; ?>
<?php
include "../conf/koneksi.php";
include("../template/header.php")
?>



<section class="isi-cerita">
    <section class="satu">
        <div class="container-section-satu">
            <div class="left">
                <?php $id = $_GET['id']; ?>
                <?php $sql1 = mysqli_query($connect, "SELECT * FROM tutorial WHERE tutorial.id_bahasa = $id ORDER BY tutorial.id ASC ");
                ?>
                <?php while ($result = mysqli_fetch_array($sql1)) : ?>
                    <a href="./video.php?id=<?= $result['id']; ?>&bahasa=<?= $result['id_bahasa']; ?>">
                        <div class="card-tutorial">
                            <?= $result['judul']; ?>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
            <div class="right">
                <h3>Baca cerita</h3>
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
            <a href="./tutorial.php" class="klik">
                <div class="tombol tombol-satu">Kembali</div>
            </a>
        </div>
    </section>
    <div class="gap"></div>
    <?php include("../template/footer.php") ?>