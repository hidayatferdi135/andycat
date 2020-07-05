
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Update Syarat</b></h5>
                                                <?php foreach ($syarat as $s): ?>
                                                <form action="<?= base_url('Admin/update_syarat') ?>" method="post">
                                                    <input type="hidden" name="id_syarat" value="<?= $s->id_syarat ?>">
                                                    
                                                    <input type="hidden" name="old" value="<?= $s->logo ?>">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Ketentuan</label>
                                                        <div class="col-sm-10">
                                                            <textarea name="ketentuan" class="form-control" cols="20" rows="5"><?= $s->ketentuan ?></textarea>
                                                            <!-- <input name="n" value="<?= $c->nama ?>" type="text" class="form-control"> -->
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Nomer Telepon</label>
                                                        <div class="col-sm-10">
                                                            <input name="nomer" value="<?= $s->nomer ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Logo</label>
                                                        <div class="col-sm-10">
                                                            <input name="logo" id="exampleFile" type="file" class="form-control-file">
                                                            <small class="form-text text-muted">insert image under 2 mb
                                                            </small>
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