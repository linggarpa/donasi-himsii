<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <?php echo $this->session->flashdata('pesan'); ?>

                <?= form_error('donasi', '<div class="alert alert-danger alert-message" role="alert">', '</div>'); ?>

                <a href="<?php echo base_url(); ?>admin/tambah_donasi/" class="btn btn-primary mb-3">
                    <i class="fas fa-fw fa-plus mr-2"></i>Tambah Donasi
                </a>

                <?php
                $queryDonasi = "SELECT * FROM donasi JOIN kategori ON donasi.id_kategori = kategori.id_kategori ORDER BY id desc";
                $donasi = $this->db->query($queryDonasi)->result_array();
                ?>

                <div class="widget">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Dana Yang Dibutuhkan</th>
                                    <th scope="col">Dana Yang Terkumpul</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($donasi as $d) : ?>
                                    <tr>
                                        <td scope="row"><?php echo $i . '.'; ?></td>
                                        <td><span><?php echo $d['judul']; ?></span></td>
                                        <td><span><?php echo $d['kategori']; ?></span></td>
                                        <td><?php echo "Rp. " . number_format($d['dana_dibutuhkan'], 2, ',', '.'); ?></td>
                                        <td><?php echo "Rp. " . number_format($d['dana_terkumpul'], 2, ',', '.'); ?></td>
                                        <td><?php echo $d['detail']; ?></td>
                                        <td>
                                            <picture>
                                                <source srcset="" type="image/svg+xml"> <img src="<?= base_url('assets/img/upload/') . $d['gambar']; ?>" class="img-fluid img-thumbnail" alt="...">
                                            </picture>
                                        </td>
                                        <td><?php echo $d['status_donasi']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/ubahDonasi/') . $d['id']; ?>" class="btn btn-primary mr-2 mb-2"><i class="far fa-fw fa-edit mr-2"></i>Edit</a>
                                            <a href="<?php echo base_url('admin/hapusDonasi/') . $d['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $d['judul']; ?> ?');" class="btn btn-danger"><i class="fas fa-fw fa-trash mr-2"></i>Hapus</a>
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