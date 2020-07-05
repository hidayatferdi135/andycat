
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Update Laporan</b></h5>
                                                <?php foreach ($laporan as $l): ?>
                                                <form action="<?= base_url('Admin/update_laporan') ?>" method="post">
                                                    <input type="hidden" name="id_laporan" value="<?= $l->id_laporan ?>">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Data Pemasukkan</label>
                                                        <div class="col-sm-10">
                                                            <input name="pemasukkan" value="<?= $l->pemasukkan ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Pengeluaran</label>
                                                        <div class="col-sm-10">
                                                            <input name="pengeluaran" value="<?= $l->pengeluaran ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Harga</label>
                                                        <div class="col-sm-10">
                                                            <input name="harga" value="<?= $l->harga ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>

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