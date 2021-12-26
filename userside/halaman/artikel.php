<?php $current_page = 'artikel'; ?>
<?php include("../template/header.php") ?>
<?php include "../conf/koneksi.php"; ?>
<div class="artikel">

    <?php include("../template/black-header.php") ?>
    <section class="dua">
        <div class="container container-card">
            <div class="gap"></div>
            <h1 class="judul">Kategori</h1>
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="card-artikel">
                <a href="../halaman/cerita.php?id=1" class="card cerita">
                    <div class="card-container">
                        <h4>Cerita</h4>
                        <img src="../image/home page/3.png" alt="">
                    </div>
                </a>
                <a href="../halaman/cerita.php?id=2" class="card materi">
                    <div class="card-container">
                        <h4>Materi</h4>
                        <img src="../image/home page/3.png" alt="">
                    </div>
                </a>
                <a href="../halaman/cerita.php?id=3" class="card konspirasi">
                    <div class="card-container">
                        <h4>Konspirasi</h4>
                        <img src="../image/home page/3.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="tiga">
        <div class="header">
            <h1>Sering Dilihat</h1>
            <div class="gap"> </div>
            <div class="container-cardnya">
                <div class="cardnya">
                    <?php $sql1 = mysqli_query($connect, "SELECT * FROM artikel ORDER BY artikel.id DESC ");
                    ?>
                    <?php $e = 1; ?>
                    <?php while ($result = mysqli_fetch_array($sql1)) : ?>
                        <?php if ($e < 6) : ?>
                            <a href="../halaman/isi-cerita.php?id=<?= $result['id']; ?>" class="card-containernya" name="ommaleka">
                                <div class="image-container">
                                    <?php $g = $result['gambar']; ?>
                                    <img src="../../serverside/gambar/<?= $g; ?>" alt="">
                                </div>
                                <div class="text-container">
                                    <h3><?php echo $result['judul']; ?></h3>
                                    <h4><?php $coba = $result['isi'];
                                        $i = strip_tags($coba);
                                        if (strlen($i) > 5) :
                                            $stringCut = substr($i, 0, 100);
                                            $endPoint = strrpos($stringCut, ' ');
                                            $i = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        endif;
                                        echo $i;
                                        ?></h4>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php $e++; ?>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>
</div>
<?php include("../template/footer.php") ?>