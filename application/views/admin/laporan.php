
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <div class="card mb-3">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Laporan
                                                </div>
                                                <div class="btn-actions-pane-right actions-icon-btn">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"
                                                                class="btn-icon btn-icon-only btn btn-link"><i
                                                                class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <table style="width: 100%;" id="example"
                                                       class="table table-hover table-striped table-bordered">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th>Data Pemasukan</th>
                                                        <th>Data Pengeluaran</th>
                                                        <th>Harga</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($laporan as $p): ?>
                                                    <tr class="text-center">
                                                        <td><?= $p['pemasukkan'] ?></td>
                                                        <td><?= $p['pengeluaran'] ?></td>
                                                        <td><?= $p['harga'] ?></td>
                                                        <td class="text-center">
                                                            <a href="" class="btn btn-success"><i class="fas fa fa-download"></i></a>
                                                            <a href="<?= base_url('Admin/delete_laporan/').$p['id_laporan'] ?>" class="btn btn-danger"><i class="fas fa fa-trash"></i></a>
                                                            <a href="<?= base_url('Admin/show_laporan/').$p['id_laporan'] ?>" class="btn btn-warning"><i class="fas fa fa-pen"></i></a>
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