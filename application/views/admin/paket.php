
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <div class="card mb-3">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Data Paket
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <a href="<?= base_url('Admin/add_paket') ?>" class="btn btn-success"><i class="fas fa fa-plus"></i> Tambah Paket</a><br><br>
                                                <table style="width: 100%;" class="table table-hover table-striped table-bordered">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th>Nama Paket</th>
                                                        <th>Kategori</th>
                                                        <th>Harga</th>
                                                        <th>Deskripsi</th>
                                                        <th>Image</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($paket as $p): ?>
                                                    <tr class="text-center">
                                                        <td><?= $p['nama'] ?></td>
                                                        <td><?= $p['nama_kat'] ?></td>
                                                        <td>Rp. <?= $p['harga'] ?>,-</td>
                                                        <td><?= $p['deskripsi'] ?></td>
                                                        <td>
                                                            <img style="width: 100px; height: 100px;" src="<?= base_url('assets/').$p['gambar'] ?>" alt="<?= $p['gambar'] ?>">
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('Admin/show_paket/').$p['id_paket'] ?>" class="btn btn-success"><i class="fas fa fa-pen"></i></a>
                                                            <a href="<?= base_url('Admin/delete_paket/').$p['id_paket'] ?>" class="btn btn-danger"><i class="fas fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup content -->