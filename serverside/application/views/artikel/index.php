<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?= form_open_multipart('artikel'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-3 mb3 mb-sm-0">
            <select name="jenis" id="jenis" class="form-control">
                <option value="">Pilih jenis artikel</option>
                <?php foreach ($jenis as $j) : ?>
                    <option value="<?= $j['id']; ?>"><?= $j['jenis']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

    </div>

    <div class="form-group">
        <label for="judul" class="pl-3">Judul</label>
        <div class="col-sm-3 mb-3 mb-sm-0">
            <input type="text" name='judul' id='judul' class="form-control " autocomplete="off">
        </div>
    </div>

    <div class="form-group ml-2">
        <label for="judul" class="ml-3">Gambar</label>
        <div class="col-sm-3 mb-3 mb-sm-0 p-0">
            <input type="file" name='userfile' size='20' id='gambar' class="form-control " autocomplete="off" required="">
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
            Add Article
        </button>
    </div>

    </form>
</div>