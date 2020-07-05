
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <div class="card mb-3">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Konfirmasi Pemesanan
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <a href="<?= base_url('Admin/add_konfirmasi') ?>" class="btn btn-success"><i class="fas fa fa-plus"></i> Tambah</a><br><br>
                                                <table style="width: 100%;" id="example"
                                                       class="table table-hover table-striped table-bordered">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th>Order ID</th>
                                                        <th>Tanggal</th>
                                                        <th>Rek From</th>
                                                        <th>Rek To</th>
                                                        <th>Rek Nama</th>
                                                        <th>Status</th>
                                                        <th>Nominal</th>
                                                        <th>Tagihan</th>
                                                        <th>Sisa Pembayaran</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($konfirmasi as $k): ?>
                                                    <tr class="text-center">
                                                        <td><?= $k['id_konfirmasi'] ?></td>
                                                        <td><?= $k['tgl'] ?></td>
                                                        <td><?= $k['rek_from'] ?></td>
                                                        <td><?= $k['rek_to'] ?></td>
                                                        <td><?= $k['rek_nama'] ?></td>
                                                        <td><?= $k['nama_status'] ?></td>
                                                        <td><?= $k['nominal'] ?></td>
                                                        <td><?= $k['tagihan'] ?></td>
                                                        <td><?= $k['sisa'] ?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('Admin/show_konfirmasi/').$k['id_konfirmasi'] ?>" class="btn btn-success"><i class="fas fa fa-pen"></i></a>
                                                            <a href="<?= base_url('Admin/delete_konfirmasi/').$k['id_konfirmasi'] ?>" class="btn btn-danger"><i class="fas fa fa-window-close"></i></a>
                                                            <a href="" class="btn btn-warning"><i class="fas fa fa-bell"></i></a>
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