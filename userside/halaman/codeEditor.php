<?php $current_page = 'codeEditor'; ?>
<?php include("../template/header.php") ?>
<div>
    <section>
        <?php include("../template/black-header.php") ?>
        <div class="editor-menu">
            <div class="editor-menu-container">
                <button class="run-btn button">Run >></button>
                <button class="dark-btn button">Dark</button>
                <button class="light-btn button">Light</button>
            </div>
        </div>
        <div class="container-code">
            <div class="kiri">
                <div class="editor" contenteditable="">halo</div>
            </div>
            <div class="bar"></div>
            <div class="kanan">
                <iframe src="" frameborder="0" class="iframe editor">asdasd</iframe>
            </div>
        </div>
    </section>
    </body>
</div>
<?php include("../template/footer.php") ?>