
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Update Menu Makanan</b></h5>
                                                <?php foreach ($paket as $p): ?>
                                                    <form action="<?= base_url('Admin/update_paket') ?>" method="post">
                                                    <input type="hidden" name="id_paket" value="<?= $p->id_paket ?>">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Nama Menu</label>
                                                        <div class="col-sm-10">
                                                            <input name="nama" value="<?= $p->nama ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-10">
                                                            <input name="deskripsi" value="<?= $p->deskripsi ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Kategori Makanan</label>
                                                        <div class="col-sm-10">
                                                            <select name="kategori" class="form-control">
                                                                <?php foreach ($kategori as $k): ?>
                                                                    <option value="<?= $k['id_kat'] ?>"><?= $k['nama_kat'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Harga</label>
                                                        <div class="col-sm-10">
                                                            <input name="harga" value="<?= $p->harga ?>" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Gambar Menu</label>
                                                        <div class="col-sm-10">
                                                            <input name="gambar" value="<?= $p->gambar ?>" id="exampleFile" type="file" class="form-control-file">
                                                            <small class="form-text text-muted">insert image under 2 mb
                                                            </small>
                                                            </div>
                                                    </div>
                                                    <input type="hidden" name="old" value="<?= $p->gambar ?>">
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