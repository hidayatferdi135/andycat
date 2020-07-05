
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Update Rating</b></h5>
                                                <?php foreach ($rating as $r): ?>
                                                <form action="<?= base_url('Admin/update_rating') ?>" method="post">
                                                    <input type="hidden" name="id_rating" value="<?= $r->id_rating ?>">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                                        <div class="col-sm-10">
                                                            <input name="nama" value="<?= $r->nama ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input name="email" value="<?= $r->email ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Username</label>
                                                        <div class="col-sm-10">
                                                            <input name="user" value="<?= $r->user ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Tanggapan</label>
                                                        <div class="col-sm-10">
                                                            <input name="tanggapan" value="<?= $r->tanggapan ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Rating</label>
                                                        <div class="col-sm-10">
                                                            <input name="rating" value="<?= $r->rating ?>" type="text" class="form-control">
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