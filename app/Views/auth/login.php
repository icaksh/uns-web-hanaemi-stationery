<?=$this->extend('auth/templates/index.php');?>

<?=$this->section('content');?>
<div id="auth-content">
        <div id="auth-content-signin-box" class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-6 my-5 my-md-0">
                    <div class="auth-content-header">
                        <h3 class="text-primary text-center text-sm-left mt-4 mt-md-0">Masuk</h3>
                        <div class="text-center text-sm-left">
                            <small class="text-secondary">Masuk terlebih dahulu untuk menggunakan aplikasi</small>
                            <br><?= view('Myth\Auth\Views\_message_block') ?>
                        </div>
                    </div>
                    <form id="signin-form" action="<?= route_to('login') ?>" method="post">

                    <?= csrf_field() ?>
                        <div class="form-group">
                            <input type="username" name="login" placeholder="Username" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" id="signin-input-1" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="signin-input-2" required>
                            <div class="placeholder"><span>Enter password</span></div>
                        </div>
                        
                        <div class="form-row">
                            <?php if ($config->allowRemembering): ?>
                            <div class="col text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember-me"<?php if(old('remember')) : ?> checked <?php endif ?>>
                                    <label class="custom-control-label text-secondary" for="remember-me">Remember
                                        me</label>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if ($config->activeResetter): ?>
                            <div class="col text-right">
                                <small class="text-secondary"><a href="<?= route_to('forgot') ?>">Forgot password?</a></small>
                            </div>
                            <?php endif; ?>
                            <?php if ($config->allowRegistration): ?>
                            <div class="col text-right">
                                <small class="text-secondary"><a href="<?= route_to('register') ?>">Buat akun</a></small>
                            </div>
                            <?php endif; ?>
                        </div>
                        <button id="signin-button" class="btn btn-primary rounded-pill float-right mb-4 mb-md-0"
                            style="margin-top: 2.5rem;">Sign In<i
                                class="d-none d-sm-inline-block ml-2 fa fa-long-arrow-right" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
<?=$this->endSection();?>