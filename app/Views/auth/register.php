<?=$this->extend('auth/templates/index.php');?>

<?=$this->section('content');?>
<div id="auth-content">
<div id="auth-content-signup-box" class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-6 my-5 my-md-0">
            <div class="auth-content-header">
                <h3 class="text-primary text-center text-sm-left mt-4 mt-md-0"><?=lang('Auth.register')?></h3>
                <div class="text-center text-sm-left">
                    <small class="text-secondary">Buat akun Anda terlebih dahulu</small>
                </div>
                <?= view('Myth\Auth\Views\_message_block') ?>
            </div>
            <form id="signup-form" action="<?= route_to('register') ?>" method="post">

                <?= csrf_field() ?>

                <div class="form-group">
                    <input type="text" name="username" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" id="signup-input-1" autocomplete="off" value="<?= old('username') ?>" required>
                    <div class="placeholder"><span>Username</span></div>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" id="signup-input-2" value="<?= old('email') ?>" autocomplete="off" required>
                    <div class="placeholder"><span>Alamat Surel</span></div>
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" id="signup-input-3" autocomplete="off">
                    <div class="placeholder"><span>Password</span></div>
                </div>
                <div class="form-group">
                    <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="signup-input-4" autocomplete="off">
                    <div class="placeholder"><span>Konfirmasi Password</span></div>
                </div>
                <div class="form-row custom-mt-25">
                    <div class="col-12 col-sm-5 col-lg-6 text-center text-md-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="terms-conditions">
                            <label class="custom-control-label text-secondary" for="terms-conditions">I have
                                read and agree to the <a href="#">Terms</a> and <a href="#">Conditions</a></label>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-lg-6 text-center text-sm-right mt-4 mt-sm-0">
                        <button type="submit" id="signup-button"
                            class="btn btn-primary rounded-pill float-md-right mt-3 mt-sm-0 mb-4 mb-md-0"><?=lang('Auth.register')?><i class="d-none d-sm-inline-block ml-2 fa fa-long-arrow-right"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?=$this->endSection();?>