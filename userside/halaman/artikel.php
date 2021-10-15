<?php include("../template/header.php") ?>
<?php include "../conf/koneksi.php"; ?>
<section class="artikel">

    <?php include("../template/black-header.php") ?>
    <section class="dua">
        <div class="container container-card">
            <div class="gap"></div>
            <h1 class="judul">Kategori</h1>
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="card-artikel">
                <a href="../halaman/cerita.php" class="card cerita">
                    <div class="card-container">
                        <h4>Cerita</h4>
                        <img src="../image/home page/3.png" alt="">
                    </div>
                </a>
                <a href="../halaman/cerita.php" class="card materi">
                    <div class="card-container">
                        <h4>Materi</h4>
                        <img src="../image/home page/3.png" alt="">
                    </div>
                </a>
                <a href="../halaman/cerita.php" class="card konspirasi">
                    <div class="card-container">
                        <h4>Konspirasi</h4>
                        <img src="../image/home page/3.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="tiga">
        <div class="container header">
            <h1>Sering Dilihat</h1>
            <div class="gap"> </div>
            <div class="container-cardnya">
                <div class="cardnya">
                    <?php include("../template/sub-artikel.php") ?>
                </div>
            </div>
        </div>
    </section>
    <div class="gap"></div>
    <section class="empat">
    </section>
</section>

</body>
<!-- illustration -->
<!-- <a href='https://www.freepik.com/vectors/school'>School vector created by stories - www.freepik.com</a> -->
<!-- <a href='https://www.freepik.com/vectors/people'>People vector created by stories - www.freepik.com</a> -->
<!-- <a href='https://www.freepik.com/vectors/nature'>Nature vector created by stories - www.freepik.com</a> -->

</html>