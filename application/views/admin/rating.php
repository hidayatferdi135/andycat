
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <div class="card mb-3">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Evaluasi Rating
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
                                                        <th>Nama Pelanggan</th>
                                                        <th>Email</th>
                                                        <th>User Name</th>
                                                        <th>Tanggapan</th>
                                                        <th>Rating</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($rating as $r): ?>
                                                    <tr class="text-center">
                                                        <td><?= $r['nama'] ?></td>
                                                        <td><?= $r['email'] ?></td>
                                                        <td><?= $r['user'] ?></td>
                                                        <td><?= $r['tanggapan'] ?></td>
                                                        <td><?= $r['rating'] ?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('Admin/show_rating/').$r['id_rating'] ?>" class="btn btn-success"><i class="fas fa fa-pen"></i></a>
                                                            <a href="<?= base_url('Admin/delete_rating/').$r['id_rating'] ?>" class="btn btn-danger"><i class="fas fa fa-trash"></i></a>
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