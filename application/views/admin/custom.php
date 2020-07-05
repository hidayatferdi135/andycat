
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <div class="card mb-3">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Data Custom
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <a href="<?= base_url('Admin/add_custom') ?>" class="btn btn-success"><i class="fas fa fa-plus"></i> Tambah Custom</a><br><br>
                                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th>Nama</th>
                                                        <th>Harga</th>
                                                        <th>Gambar</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($custom as $c): ?>
                                                    <tr class="text-center">
                                                        <td><?= $c['nama'] ?></td>
                                                        <td><?= $c['harga'] ?></td>
                                                        <td class="text-center">
                                                            <img class="text-center" style="width: 100px; height: 100px;" src="<?= base_url('assets/').$c['gambar'] ?>" alt="<?= $c['gambar'] ?>">
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('Admin/show_custom/').$c['id_custom'] ?>" class="btn btn-success"><i class="fas fa fa-pen"></i></a>
                                                            <!-- <a href="#" type="button" data-toggle="modal" data-target="#custommodal<?php echo $c['id_custom']; ?>" class="btn btn-success"><i class="fas fa fa-pen"></i></a> -->
                                                            <a href="<?= base_url('Admin/delete_custom/').$c['id_custom'] ?>" class="btn btn-danger"><i class="fas fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
                                                    </tfoot>
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
                