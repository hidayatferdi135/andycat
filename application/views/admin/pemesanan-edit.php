
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Update Menu Makanan</b></h5>
                                                <?php foreach ($pemesanan as $p): ?>
                                                    <form action="<?= base_url('Admin/update_pemesanan') ?>" method="post">
                                                    <input type="hidden" name="id_pemesanan" value="<?= $p->id_pemesanan ?>">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                                        <div class="col-sm-10">
                                                            <input name="nama" value="<?= $p->nama ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Tanggal</label>
                                                        <div class="col-sm-10">
                                                            <input name="tgl" readonly="" value="<?= date('d/m/Y', strtotime($p->tgl)) ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Waktu</label>
                                                        <div class="col-sm-10">
                                                            <input name="waktu" readonly="" value="<?= date('h:i A', strtotime($p->waktu)) ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                                        <div class="col-sm-10">
                                                            <input name="alamat" value="<?= $p->alamat ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="bukti" value="<?= $p->bukti ?>">
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-10">
                                                            <input type="submit" class="btn btn-primary" value="Submit">
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                        <!-- tutup body -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup content -->