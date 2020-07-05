<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2020 00:16:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Andy Catering | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Kero HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="<?= base_url('vendor/admin-kero/icon-pe7/dist/dist/pe-icon-7-stroke.min.css') ?>">
    <link href="<?= base_url('vendor/admin-kero/demo.dashboardpack.com/kero-html-sidebar-pro/') ?>main.07a59de7b920cd76b874.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100 bg-plum-plate bg-animation">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div class="mx-auto app-login-box col-md-8">
                            <div class="app-logo-inverse mx-auto mb-3"></div>
                            <div class="modal-dialog w-100 mx-auto">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="h5 modal-title text-center">
                                            <h4 class="mt-2">
                                                <div>Andy Catering</div>
                                                <span>Please sign in to your account below.</span>
                                            </h4>
                                        </div>
                                        <form class="" method="post" action="<?= base_url('Auth/login_check') ?>">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group"><input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control"></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group"><input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div>
                                        <!-- </form> -->
                                        <div class="divider"></div>
                                        <h6 class="mb-0">No account? <a href="<?= base_url('Auth/regis') ?>" class="text-primary">Sign up now</a></h6>
                                    </div>
                                    <div class="modal-footer clearfix">
                                        <div class="float-left"></div>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary btn-lg">Login to Dashboard</button>
                                             <a style="color: black;" href="<?= base_url('Admin/index') ?>">login</a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center text-white opacity-8 mt-3">Copyright © Kreatindo 2020</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<script type="text/javascript" src="<?= base_url('vendor/admin-kero/demo.dashboardpack.com/kero-html-sidebar-pro/') ?>assets/scripts/main.07a59de7b920cd76b874.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2020 00:16:32 GMT -->
</html>
