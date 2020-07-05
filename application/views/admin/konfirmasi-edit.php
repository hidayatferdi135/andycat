
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Update Konfirmasi</b></h5>
                                                <?php foreach ($konfirmasi as $k): ?>
                                                    <form action="<?= base_url('Admin/update_konfirmasi') ?>" method="post">
                                                        <input type="hidden" name="id_konfirmasi" value="<?= $k->id_konfirmasi ?>">
                                                    <div class="position-relative row form-group">
                                                        <!-- <label class="col-sm-2 col-form-label">Tanggal</label> -->
                                                        <div class="col-sm-10">
                                                            <input name="tgl" value="<?= $k->tgl ?>" type="hidden" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Rek From</label>
                                                        <div class="col-sm-10">
                                                            <input name="rek_from" type="text" value="<?= $k->rek_from ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Rek To</label>
                                                        <div class="col-sm-10">
                                                            <input name="rek_to" value="<?= $k->rek_to ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Rek Name</label>
                                                        <div class="col-sm-10">
                                                            <input name="rek_nama" value="<?= $k->rek_nama ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Status</label>
                                                        <div class="col-sm-10">
                                                            <select name="status" class="form-control">
                                                                <?php foreach ($status as $s): ?>
                                                                    <option value="<?= $s['id_status'] ?>"><?= $s['nama_status'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Nominal</label>
                                                        <div class="col-sm-10">
                                                            <input name="nominal" value="<?= $k->nominal ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Tagihan</label>
                                                        <div class="col-sm-10">
                                                            <input name="tagihan" value="<?= $k->tagihan ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Sisa Pembayaran</label>
                                                        <div class="col-sm-10">
                                                            <input name="sisa" value="<?= $k->sisa ?>" type="text" class="form-control">
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