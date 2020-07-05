
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Update Order</b></h5>
                                                <?php foreach ($order as $o): ?>
                                                <form action="<?= base_url('Admin/update_order') ?>" method="post">
                                                    <input type="hidden" name="id_order" value="<?= $o->id_order ?>">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                                        <div class="col-sm-10">
                                                            <input name="nama" value="<?= $o->nama ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Telepon</label>
                                                        <div class="col-sm-10">
                                                            <input name="tlp" value="<?= $o->tlp ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                                        <div class="col-sm-10">
                                                            <input name="alamat" value="<?= $o->alamat ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
                                                        <div class="col-sm-10">
                                                            <input name="tgl_pem" value="<?= $o->tgl_pem ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Tanggal Pengambilan</label>
                                                        <div class="col-sm-10">
                                                            <input name="tgl_peng" value="<?= $o->tgl_peng ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Order</label>
                                                        <div class="col-sm-10">
                                                            <input name="orderan" value="<?= $o->orderan ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Harga</label>
                                                        <div class="col-sm-10">
                                                            <input name="harga" value="<?= $o->harga ?>" type="text" class="form-control">
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