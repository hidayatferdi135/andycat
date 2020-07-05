
                                        <!-- body -->
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">

                                        <!-- body -->
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <br>
                                            <h5 class="text-center"><b>Syarat & Ketentuan</b></h5><br>
                                            <?php foreach ($syarat as $s): ?>
                                                <div class="text-center">
                                                <img class="text-center" style="margin-left: auto; margin-right: auto;" src="<?= base_url('assets/').$s['logo'] ?>" alt="Logo">
                                            </div>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                    <div class="col-sm-5">
                                                    <p><?= $s['ketentuan'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 style="font-family: serif;">Informasi Kami</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <i class="fas fa fa-phone fa-2x mr-3"></i><span style="font-size: 15pt;"><?= $s['nomer'] ?></span>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="<?= base_url('Admin/show_syarat/').$s['id_syarat'] ?>" class="btn btn-success"><i class="fas fa fa-pen mr-2"></i>Edit Ketentuan</a>
                                                </div>
                                                <!-- <div class="col-md-5">
                                                    <h5><b>Informasi Kami</b></h5>
                                                    <i class="fas fa fa-phone fa-2x mr-3"></i><span style="font-size: 15pt;">098343545768</span>
                                                </div>
                                                <div class="col-md-7">
                                                    
                                                </div> -->
                                            </div>
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
                                        <!-- tutup body -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup content -->