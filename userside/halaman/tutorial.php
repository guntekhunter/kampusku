<?php $current_page = 'tutorial'; ?>
<?php include("../template/header.php") ?>
<?php include "../conf/koneksi.php"; ?>
<div class="tutorial">
        <?php include("../template/black-header.php") ?>
        <section class="dua">
                <div class="container">
                        <div class="card-wrapper">
                                <h1>Bahasa pemrograman</h1>
                                <div class="row">
                                        <?php $sql1 = mysqli_query($connect, "SELECT * FROM tbl_bahasa ORDER BY tbl_bahasa.id ASC ");
                                        ?>
                                        <?php while ($result = mysqli_fetch_array($sql1)) : ?>
                                                <a href="../halaman/isi_tutorial.php?id=<?= $result['id']; ?>" class="card">
                                                        <div class="card-text">
                                                                <h4><?= $result['nama']; ?></h4>
                                                        </div>
                                                        <div class="card-image">
                                                                <?php $r = $result['gambar']; ?>
                                                                <img src="../../serverside/gambar/<?= $r; ?>" alt="">
                                                        </div>
                                                </a>
                                        <?php endwhile; ?>
                                </div>
                        </div>
        </section>
        <section class="tiga">
                <div class="header">
                        <div class="container-cardnya">

                                <h1>Sering dicari</h1>
                                <ul>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error reprehenderit
                                                        iusto!</a></li>
                                </ul>
                        </div>
                </div>
        </section>
</div>
<div class="gap"></div>
<div class="gap"></div>
<?php include("../template/footer.php") ?>