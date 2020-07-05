
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Update Custom</b></h5>
                                                <?php foreach ($custom as $c): ?>
                                                <form action="<?= base_url('Admin/update_custom') ?>" method="post">
                                                    <input type="hidden" name="id_custom" value="<?= $c->id_custom ?>">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Nama Custom</label>
                                                        <div class="col-sm-10">
                                                            <input name="nama" value="<?= $c->nama ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Harga</label>
                                                        <div class="col-sm-10">
                                                            <input name="harga" value="<?= $c->harga ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Gambar Custom</label>
                                                        <div class="col-sm-10">
                                                            <input name="gambar" id="exampleFile" type="file" class="form-control-file">
                                                            <small class="form-text text-muted">insert image under 2 mb
                                                            </small>
                                                            </div>
                                                    </div>
                                                    <input type="hidden" name="old" value="<?= $c->gambar ?>">
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