
                        <div class="app-inner-layout__wrapper">

                            <!-- content -->
                            
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                                    Portfolio Performance
                                                </div>
                                                <div class="btn-actions-pane-right text-capitalize">
                                                    <button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">
                                                        View All
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="no-gutters row">
                                                <div class="col-sm-6 col-md-4 col-xl-4">
                                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                                        <div class="icon-wrapper rounded-circle">
                                                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                                            <i class="lnr-laptop-phone text-dark opacity-8"></i></div>
                                                        <div class="widget-chart-content">
                                                            <div class="widget-subheading">Cash Deposits</div>
                                                            <div class="widget-numbers">1,7M</div>
                                                            <div class="widget-description opacity-8 text-focus">
                                                                <div class="d-inline text-danger pr-1">
                                                                    <i class="fa fa-angle-down"></i>
                                                                    <span class="pl-1">54.1%</span>
                                                                </div>
                                                                less earnings
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-4">
                                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                                        <div class="icon-wrapper rounded-circle">
                                                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                                            <i class="lnr-graduation-hat text-white"></i></div>
                                                        <div class="widget-chart-content">
                                                            <div class="widget-subheading">Invested Dividents</div>
                                                            <div class="widget-numbers"><span>9M</span></div>
                                                            <div class="widget-description opacity-8 text-focus">
                                                                Grow Rate:
                                                                <span class="text-info pl-1">
                                                <i class="fa fa-angle-down"></i>
                                                <span class="pl-1">14.1%</span>
                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-xl-4">
                                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                                        <div class="icon-wrapper rounded-circle">
                                                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                                            <i class="lnr-apartment text-white"></i></div>
                                                        <div class="widget-chart-content">
                                                            <div class="widget-subheading">Capital Gains</div>
                                                            <div class="widget-numbers text-success"><span>$563</span></div>
                                                            <div class="widget-description text-focus">
                                                                Increased by
                                                                <span class="text-warning pl-1">
                                                <i class="fa fa-angle-up"></i>
                                                <span class="pl-1">7.35%</span>
                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center d-block p-3 card-footer">
                                                <button class="btn-pill btn-wide fsize-1 btn btn-primary">
                                <span class="mr-2 opacity-7">
                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                </span>
                                                    <span class="mr-1">View Complete Report</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card mb-3">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Pengelolaan Pemesanan
                                                </div>
                                                <!-- <div class="btn-actions-pane-right actions-icon-btn">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"
                                                                class="btn-icon btn-icon-only btn btn-link"><i
                                                                class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="card-body">
                                                <table style="width: 100%;" id="example"
                                                       class="table table-hover table-striped table-bordered">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th>Nama Pelanggan</th>
                                                        <th>Tanggal</th>
                                                        <th>Waktu</th>
                                                        <th>Alamat</th>
                                                        <th>Status Upload Bukti Pembayaran</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($pemesanan as $p): ?>
                                                    <tr class="text-center">
                                                        <td><?= $p['nama'] ?></td>
                                                        <td><?= date('d/m/Y', strtotime($p['tgl'])) ?></td>
                                                        <td><?= date('h:i A', strtotime($p['waktu'])) ?></td>
                                                        <td><?= $p['alamat'] ?></td>
                                                        <td class="text-center">
                                                            <img style="width: 100px; height: 100px;" src="<?= base_url('assets/').$p['bukti'] ?>" alt="<?= $p['bukti'] ?>">
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('Admin/show_pemesanan/').$p['id_pemesanan'] ?>" class="btn btn-success"><i class="fas fa fa-pen"></i></a>
                                                            <a href="<?= base_url('Admin/delete_pemesanan/').$p['id_pemesanan'] ?>" class="btn btn-danger"><i class="fas fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-sm-12 col-lg-6">
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="card-hover-shadow-2x mb-3 card">
                                                    <div class="card-header-tab card-header">
                                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                            <i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Chat
                                                            Box
                                                        </div>
                                                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                            <div class="btn-group dropdown">
                                                                <button type="button" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        class="btn-icon btn-icon-only btn btn-link"><i
                                                                        class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                                     class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                    <h6 tabindex="-1"
                                                                        class="dropdown-header">
                                                                        Header</h6>
                                                                    <button type="button" tabindex="0"
                                                                            class="dropdown-item"><i
                                                                            class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                                    </button>
                                                                    <button type="button" tabindex="0"
                                                                            class="dropdown-item"><i
                                                                            class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                                    </button>
                                                                    <button type="button" tabindex="0"
                                                                            class="dropdown-item"><i
                                                                            class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                                    </button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <div class="p-3 text-right">
                                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">
                                                                            View Details
                                                                        </button>
                                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                                            Action
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scroll-area-lg">
                                                        <div class="scrollbar-container">
                                                            <div class="p-2">
                                                                <div class="chat-wrapper p-1">
                                                                    <div class="chat-box-wrapper">
                                                                        <div>
                                                                            <div class="avatar-icon-wrapper mr-1">
                                                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                                                    <img src="assets/images/avatars/2.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="chat-box">But I must explain to you
                                                                                how all this mistaken idea of denouncing
                                                                                pleasure and praising pain was born and I
                                                                                will give you a complete account of the
                                                                                system.
                                                                            </div>
                                                                            <small class="opacity-6">
                                                                                <i class="fa fa-calendar-alt mr-1"></i>
                                                                                11:01 AM | Yesterday
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="float-right">
                                                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                                                            <div>
                                                                                <div class="chat-box">Expound the actual
                                                                                    teachings of the great explorer of the
                                                                                    truth, the master-builder of human
                                                                                    happiness.
                                                                                </div>
                                                                                <small class="opacity-6">
                                                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                                                    11:01 AM | Yesterday
                                                                                </small>
                                                                            </div>
                                                                            <div>
                                                                                <div class="avatar-icon-wrapper ml-1">
                                                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                                                        <img src="assets/images/avatars/3.jpg"
                                                                                             alt="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="chat-box-wrapper">
                                                                        <div>
                                                                            <div class="avatar-icon-wrapper mr-1">
                                                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                                                    <img src="assets/images/avatars/2.jpg"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="chat-box">But I must explain to you
                                                                                how all this mistaken idea of denouncing
                                                                                pleasure and praising pain was born and I
                                                                                will give you a complete account of the
                                                                                system.
                                                                            </div>
                                                                            <small class="opacity-6">
                                                                                <i class="fa fa-calendar-alt mr-1"></i>
                                                                                11:01 AM | Yesterday
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="float-right">
                                                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                                                            <div>
                                                                                <div class="chat-box">Denouncing pleasure
                                                                                    and praising pain was born and I will
                                                                                    give you a complete account.
                                                                                </div>
                                                                                <small class="opacity-6">
                                                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                                                    11:01 AM | Yesterday
                                                                                </small>
                                                                            </div>
                                                                            <div>
                                                                                <div class="avatar-icon-wrapper ml-1">
                                                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                                                        <img src="assets/images/avatars/2.jpg"
                                                                                             alt="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="float-right">
                                                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                                                            <div>
                                                                                <div class="chat-box">The master-builder of
                                                                                    human happiness.
                                                                                </div>
                                                                                <small class="opacity-6">
                                                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                                                    11:01 AM | Yesterday
                                                                                </small>
                                                                            </div>
                                                                            <div>
                                                                                <div class="avatar-icon-wrapper ml-1">
                                                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                                                        <img src="assets/images/avatars/2.jpg"
                                                                                             alt="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <input placeholder="Write here and hit enter to send..." type="text"
                                                               class="form-control-sm form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                                            <div class="card">
                                                <div class="no-gutters row">
                                                    <div class="col-md-12 col-lg-4">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="bg-transparent list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Total Orders
                                                                                </div>
                                                                                <div class="widget-subheading">Last year
                                                                                    expenses
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="widget-numbers text-success">
                                                                                    1896
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="bg-transparent list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Clients</div>
                                                                                <div class="widget-subheading">Total Clients
                                                                                    Profit
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="widget-numbers text-primary">
                                                                                    $12.6k
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="bg-transparent list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Followers</div>
                                                                                <div class="widget-subheading">People
                                                                                    Interested
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="widget-numbers text-danger">
                                                                                    45,9%
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="bg-transparent list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Products Sold
                                                                                </div>
                                                                                <div class="widget-subheading">Total revenue
                                                                                    streams
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="widget-numbers text-warning">
                                                                                    $3M
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="bg-transparent list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Total Orders
                                                                                </div>
                                                                                <div class="widget-subheading">Last year
                                                                                    expenses
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="widget-numbers text-success">
                                                                                    1896
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="bg-transparent list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-heading">Clients</div>
                                                                                <div class="widget-subheading">Total Clients
                                                                                    Profit
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="widget-numbers text-primary">
                                                                                    $12.6k
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tutup content -->