<?php $current_page = 'artikel'; ?>
<?php
include "../conf/koneksi.php";
include("../template/header.php")
?>



<section class="isi-cerita">
    <section class="satu">
        <div class="container-section-satu">
            <div class="left">
                <?php $id = $_GET['id']; ?>
                <h1 class="judul-artikel"><?php $sql1 = mysqli_query($connect, "SELECT * FROM artikel WHERE artikel.id = $id");
                                            $p = mysqli_fetch_array($sql1);
                                            $judul = $p['judul'];
                                            echo $judul; ?></h1>
                <div class="gap"></div>
                <p class="isi-artikel"><?php $isi = $p['isi'];
                                        echo $isi; ?></p>
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
    <section class="tiga">
        <div class="header">
            <h1>Cerita Terbaru</h1>
            <div class="gap"> </div>
            <div class="container-cardnya">
                <div class="cardnya">

                    <?php $sql1 = mysqli_query($connect, "SELECT * FROM artikel ORDER BY artikel.id DESC ");
                    ?>
                    <?php while ($result = mysqli_fetch_array($sql1)) : ?>
                        <?php if ($result['id_jenis'] == $p['id_jenis']) : ?>
                            <?php if ($result['id'] != $p['id']) : ?>
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
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="gap"></div>
    <?php include("../template/footer.php") ?>