<?php $current_page = 'tutorial'; ?>
<?php
include "../conf/koneksi.php";
include("../template/header.php")
?>

<section class="isi-cerita">
    <section class="satu">
        <container class="container-wrapper-video">
            <div class="container-video">
                <div class="video-wrapper-wrapper">
                    <div class="video-wrapper">
                        <?php $id = $_GET['id']; ?>
                        <?php $sql1 = mysqli_query($connect, "SELECT tutorial.url_video FROM tutorial WHERE tutorial.id = $id");
                        ?>
                        <?php while ($result = mysqli_fetch_array($sql1)) : ?>
                            <iframe <?= $result['url_video']; ?> allowfullscreen></iframe>

                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="gap"></div>
                <div class="gap"></div>
                <?php $bahasa = $_GET['bahasa']; ?>
                <?php $sql1 = mysqli_query($connect, "SELECT * FROM tutorial WHERE tutorial.id_bahasa = $bahasa ORDER BY tutorial.id ASC ");
                ?>
                <?php while ($result = mysqli_fetch_array($sql1)) : ?>
                    <?php if ($result['id'] > $id) : ?>
                        <a href="./video.php?id=<?= $result['id']; ?>&bahasa=<?= $result['id_bahasa']; ?>">
                            <div class=" card-tutorial">
                                <?= $result['judul']; ?>
                            </div>
                        </a>
                    <?php else : ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </container>
    </section>
    <section class="dua">
        <div class="container">
            <a href="./tutorial.php" class="klik">
                <div class="tombol tombol-satu">Kembali</div>
            </a>
        </div>
    </section>
    <div class="gap"></div>
    <div class="gap"></div>
    <?php include("../template/footer.php") ?>