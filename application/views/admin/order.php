
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <div class="card mb-3">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Data Order
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <a href="<?= base_url('Admin/add_order') ?>" class="btn btn-success"><i class="fas fa fa-plus"></i> Tambah Order</a><br><br>
                                                <table style="width: 100%;" id="example"
                                                       class="table table-hover table-striped table-bordered">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th>Nama</th>
                                                        <th>Telp</th>
                                                        <th>Alamat</th>
                                                        <th>Tgl Pem</th>
                                                        <th>Tgl Peng</th>
                                                        <th>Order</th>
                                                        <th>Harga</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($order as $o): ?>
                                                    <tr class="text-center">
                                                        <td><?= $o['nama'] ?></td>
                                                        <td><?= $o['tlp'] ?></td>
                                                        <td><?= $o['alamat'] ?></td>
                                                        <td><?= $o['tgl_pem'] ?></td>
                                                        <td><?= $o['tgl_peng'] ?></td>
                                                        <td><?= $o['orderan'] ?></td>
                                                        <td><?= $o['harga'] ?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('Admin/show_order/').$o['id_order'] ?>" class="btn btn-success"><i class="fas fa fa-pen"></i></a>
                                                            <a href="<?= base_url('Admin/delete_order/').$o['id_order'] ?>" class="btn btn-danger"><i class="fas fa fa-trash"></i></a>
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