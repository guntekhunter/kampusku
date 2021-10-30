<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <!-- dropdown -->
    <?= form_error('gambar', '<div class="alert alert-danger" role="alert">
                ', '</div>') ?>


    <?= $this->session->flashdata('message'); ?>
    <?= form_open("Tutorial") ?>
    <select name="id">
        <option value="">Pilih Bahasa</option>
        <?php if (count($ommaleka)) : ?>
            <?php foreach ($ommaleka as $t) : ?>
                <option value='<?= $t->id ?>' href="#"><?= $t->nama ?></option>
            <?php endforeach; ?>
        <?php else : ?>
        <?php endif; ?>
    </select>
    <?= form_submit(['name' => 'submit', 'value' => 'Pilih Bahasa', 'class' => 'btn btn-primary']); ?>
    <?= form_close(); ?>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

    </div>
    <a href="" class="btn btn-primary mb-3 mt-3" data-toggle="modal" data-target="#newMenuModal">Tambah Bahasa</a>

    <div class="row pt-2">
        <!-- kanan -->
        <div class="col-lg-8">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <?php if (count($dapat)) : ?>
                        <?php foreach ($dapat as $d) : ?>
                            <h6 class="m-0 font-weight-bold text-primary"><?= $d->nama; ?></h6>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <h6>Pilih bahasa terlebih dahulu</h6>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <table class="table table-success table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Pertemuan</th>
                                <th scope="col">Nama Materi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($coba)) : ?>
                                <?php $i = 1; ?>
                                <?php foreach ($coba as $t) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <th><?= $t->judul; ?></th>
                                        <td>
                                            <a href="" class="badge badge-success mr-2 p-2">edit</a>
                                            <a href="" class="badge badge-danger p-2">delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td>Belum ada materi</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- kiri -->
        <div class="col-lg-4">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah materi</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <?= form_error('nama', '<div class="alert alert-danger" role="alert">
                ', '</div>') ?>
                        <?= form_error('url', '<div class="alert alert-danger" role="alert">
                ', '</div>') ?>
                        <?= form_open_multipart('tutorial/materi'); ?>


                        <div class="form-group">
                            <label for="judul" class="pl-3">Bahasa</label>
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <?php if (count($dapat)) : ?>
                                    <?php if (count($id)) : ?>
                                        <?php foreach ($dapat as $d) : ?>
                                            <?php foreach ($id as $i) : ?>
                                                <input type="hidden" name='id' id='id' class="form-control " autocomplete="off" value="<?= $i->id; ?>">
                                                <input type="text" class="form-control " autocomplete="off" value="<?= $d->nama; ?>" readonly>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                    <?php else : ?>
                                    <?php endif; ?>
                                <?php else : ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="pl-3">Nama materi</label>
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="text" name='nama' id='nama' class="form-control " autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="pl-3">Url video</label>
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="text" name='url' id='url' class="form-control " autocomplete="off">
                            </div>
                        </div>

                        <div class="ml-2">
                            <button type="submit" class="btn btn-primary btn-user">
                                + materi
                            </button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
    
                </div>
                <?= form_open_multipart('tutorial'); ?>
                <div class="form-group">
                    <label for="judul" class="pl-3">Nama bahasa</label>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <input type="text" name='nama' id='nama' class="form-control " autocomplete="off">
                    </div>
                </div>
    
                <div class="form-group ml-2">
                    <label for="judul" class="ml-3">Gambar</label>
                    <div class="col-sm-3 mb-3 mb-sm-0 p-0">
                        <input type="file" name='userfile' size='20' id='gambar' class="form-control " autocomplete="off" required="">
                    </div>
    
                    <div class="ml-2 modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
    
                    </form>
                </div>
            </div>
        </div>

</div>

