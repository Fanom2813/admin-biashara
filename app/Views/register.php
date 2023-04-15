<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Sign up -
        <?= env('app.displayName') ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/icon/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/metisMenu.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css') ?>">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/typography.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/default-css.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
    <!-- modernizr css -->
    <script src="<?= base_url('assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">

            <div class="login-box ptb--100">

                <form method="post" action="<?= url_to('saveAdmin') ?>">
                    <?= csrf_field() ?>

                    <div class="login-form-head">
                        <h4>Sign up</h4>
                        <p>Hello there, Sign up now</p>
                    </div>
                    <div class="login-form-body">

                        <?php if (!empty(validation_errors())): ?>
                            <div class="alert alert-danger mb-4" role="alert">
                                <ul>
                                    <?php foreach (validation_errors() as $error): ?>
                                        <li>
                                            <?= esc($error) ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>

                        <div class="form-gp">
                            <label for="exampleInputName1">Full Name</label>
                            <input type="text" id="exampleInputName1" name="fullname" value="<?= old('fullname') ?>">
                            <i class="ti-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1" name="email" value="<?= old('email') ?>">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password"
                                value="<?= old('password') ?>">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">Confirm Password</label>
                            <input type="password" id="exampleInputPassword2" name="confirm-password"
                                value="<?= old('confirm-password') ?>">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            <!-- <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#">Sign up with <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Sign up with <i class="fa fa-google"></i></a>
                                </div>
                            </div> -->
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="<?= url_to('loginPage') ?>">Sign
                                    in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?= base_url('assets/js/vendor/jquery-2.2.4.min.js') ?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.slimscroll.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.slicknav.min.js') ?>"></script>

    <!-- others plugins -->
    <script src="<?= base_url('assets/js/plugins.js') ?>"></script>
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
</body>

</html>