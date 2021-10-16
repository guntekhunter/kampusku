<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= form_open_multipart('artikel'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="judul" class="pl-3">Judul</label>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" name='judul' id='judul' class="form-control " autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="judul" class="pl-3">isi</label>
        <div class="col-sm-6 h5">
            <textarea name="isi" id='isi' type="text" rows="15" class="form-control input-isi-artikel"></textarea>
        </div>
    </div>
    <div class="ml-2">
        <button type="submit" class="btn btn-primary btn-user">
            Register Account
        </button>
    </div>

    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->