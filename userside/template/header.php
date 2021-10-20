<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/artikel.css">
    <link rel="stylesheet" href="../css/isi-cerita.css">
    <link rel="stylesheet" href="../css/tutorial.css">
    <link rel="stylesheet" href="../css/code-editor.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <? include "../conf/koneksi.php"; ?>
    <title>Kampusku</title>
</head>

<body>
    <header>
        <nav>
            <h1 style="cursor:context-menu">KampusKu</h1>
            <ul>
                <li><a class="<?= $current_page == 'index' ? 'aktif' : '' ?>" href="../halaman/index.php">Home</a></li>
                <li><a class="<?= $current_page == 'artikel' ? 'aktif' : '' ?>" href="../halaman/artikel.php">Artikel</a></li>
                <li><a class="<?= $current_page == 'tutorial' ? 'aktif' : '' ?>" href="../halaman/tutorial.php">Tutorial</a></li>
                <li><a class="<?= $current_page == 'codeEditor' ? 'aktif' : '' ?>" href="../halaman/codeEditor.php">Code editor</a></li>
            </ul>
        </nav>
    </header>