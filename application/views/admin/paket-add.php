
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body"><h5 class="card-title"><b>Tambah Menu Makanan</b></h5>
                                                <form action="<?= base_url('Admin/add_paket') ?>" enctype="multipart/form-data" method="post">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Nama Menu</label>
                                                        <div class="col-sm-10">
                                                            <input name="nama" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-10">
                                                            <input name="deskripsi" type="text" class="form-control">
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
                                                            <input name="harga" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-2 col-form-label">Gambar Menu</label>
                                                        <div class="col-sm-10">
                                                            <input name="gambar" id="exampleFile" type="file" class="form-control-file">
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