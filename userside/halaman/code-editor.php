<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Codeboard Online IDE</title>

    <link rel="stylesheet" href="../css/code_editor.css" />
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

    <div class="header"> Codeboard Online IDE </div>
    <div class="gaping"></div>
    <div class="control-panel">
        Select Language:
        &nbsp; &nbsp;
        <select id="languages" class="languages" onchange="changeLanguage()">
            <option value="c"> C </option>
            <option value="cpp"> C++ </option>
            <option value="php"> PHP </option>
            <option value="python"> Python </option>
            <option value="node"> Node JS </option>
        </select>
    </div>
    <div class="editor" id="editor"></div>

    <div class="button-container">
        <button class="btn" onclick="executeCode()"> Run </button>
    </div>

    <div class="output"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/lib/ace.js"></script>
    <script src="../js/lib/theme-monokai.js"></script>
    <script src="../js/ide.js"></script>
</body>

</html>