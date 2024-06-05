<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <?php echo $this->session->flashdata('pesan'); ?>

                <?= form_error('pembayaran', '<div class="alert alert-danger alert-message" role="alert">', '</div>'); ?>

                <a href="<?php echo base_url(); ?>admin/tambah_Pembayaran/" class="btn btn-primary mb-3">
                    <i class="fas fa-fw fa-plus mr-2"></i>Tambah Metode Pembayaran
                </a>
                <div class="widget">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Metode Pembayaran</th>
                                    <th scope="col">No Rekening</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pembayaran as $p) : ?>
                                    <tr>
                                        <td scope="row"><?php echo $i . '.'; ?></td>
                                        <td><span><?php echo $p['nama_pembayaran']; ?></span></td>
                                        <td><span><?php echo $p['rekening']; ?></span></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/edit_Pembayaran/<?php echo $p['id_pembayaran']; ?>" class="btn btn-primary mr-2"><i class="far fa-fw fa-edit mr-2"></i>Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/hapus_Pembayaran/<?php echo $p['id_pembayaran']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash mr-2"></i>Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->