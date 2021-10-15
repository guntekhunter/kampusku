<?php $sql1 = mysqli_query($connect, "SELECT * FROM artikel");
?>
<?php while ($result = mysqli_fetch_array($sql1)) : ?>
    <a href="../halaman/isi-cerita.php?id=<?= $result['id']; ?>" class="card-containernya" name="ommaleka">
        <div class="image-container">
            <img src="../image/artikel page/Image 9.png" alt="">
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
<?php endwhile; ?>
<!-- <form action="../halaman/isi-cerita.php" method="get">
            <input type="text" name="kirim-id" value="agung"></input>
            <input type="submit"></input>
        </form> -->