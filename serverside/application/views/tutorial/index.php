<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <!-- dropdown -->
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pilih Bahasa
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php foreach ($bahasa as $b) : ?>
            <form method="GET">
                <input type="hidden" name="namanya" value="<?= $b['id']; ?>">
                <button type="submit" class="btn btn-success "><?= $b['nama']; ?></button>
            </form>
        <?php endforeach; ?>
    </div>
    <a href="" class="btn btn-primary mb-3 mt-3" data-toggle="modal" data-target="#newMenuModal">Tambah Bahasa</a>

    <div class="row pt-2">
        <!-- kanan -->
        <div class="col-lg-8">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <?php $judul = $_GET['namanya']; ?>
                    <?php $queryJudul = "SELECT * FROM tbl_bahasa";
                    $nama = $this->db->query($queryJudul)->result_array(); ?>

                    <?php foreach ($nama as $n) : ?>
                        <?php $id = $n['id']; ?>
                        <?php if ($judul == $id) : ?>
                            <h6 class="m-0 font-weight-bold text-primary"><?= $n['nama']; ?></h6>
                        <?php endif; ?>
                    <?php endforeach; ?>
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
                            <?php $nama = $_GET['namanya']; ?>
                            <?php $i = 1; ?>
                            <?php foreach ($tutor as $t) : ?>
                                <?php $id = $t['id_bahasa']; ?>
                                <?php if ($id == $nama) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <th><?= $t['judul'] ?></th>
                                        <td>
                                            <a href="" class="badge badge-success mr-2 p-2">edit</a>
                                            <a href="" class="badge badge-danger p-2">delete</a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <?php $i++; ?>
                            <?php endforeach; ?>
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

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>

            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>