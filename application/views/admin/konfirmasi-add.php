
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Tambah Konfirmasi</b></h5>
                                                <form action="<?= base_url('Admin/add_konfirmasi') ?>" method="post">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Tanggal</label>
                                                        <div class="col-sm-10">
                                                            <input name="tgl" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Rek From</label>
                                                        <div class="col-sm-10">
                                                            <input name="rek_from" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Rek To</label>
                                                        <div class="col-sm-10">
                                                            <input name="rek_to" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Rek Name</label>
                                                        <div class="col-sm-10">
                                                            <input name="rek_nama" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Status</label>
                                                        <div class="col-sm-10">
                                                            <select name="status" class="form-control">
                                                                <option value="Belum Dibayar">Belum Dibayar</option>
                                                                <option value="Terbayar">Terbayar</option>
                                                                <option value="Lunas">Lunas</option>
                                                                <option value="Di Proses">Di Proses</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Nominal</label>
                                                        <div class="col-sm-10">
                                                            <input name="nominal" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Tagihan</label>
                                                        <div class="col-sm-10">
                                                            <input name="tagihan" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Sisa Pembayaran</label>
                                                        <div class="col-sm-10">
                                                            <input name="sisa" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-10">
                                                            <input type="submit" class="btn btn-primary" value="Submit">
                                                        </div>
                                                    </div>
                                                </form>
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