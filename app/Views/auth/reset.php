<?=$this->extend('auth/templates/index.php');?>

<?=$this->section('content');?>
<div id="auth-content">
    <div id="auth-content-signin-box" class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-6 my-5 my-md-0">
                <div class="auth-content-header">
                    <h3 class="text-primary text-center text-sm-left mt-4 mt-md-0">Reset Password</h3>
                    <div class="text-center text-sm-left">
                        <small class="text-secondary">Untuk mengubah password, silakan lengkapi formulir di bawah ini dengan kode token merupakan kode yang dikirimkan ke email</small>
                    </div>
                </div>
                
                <form id="signin-form" action="<?= route_to('reset-password') ?>" method="post">

                    <?= csrf_field() ?>
                    <div class="form-group">
                        <input type="text" name="token"
                            class="form-control <?php if(session('errors.token')) : ?>is-invalid<?php endif ?>"
                            id="signin-input-1"  placeholder="Token" value="<?= old('token', $token ?? '') ?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email"
                            class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                            id="signin-input-1" placeholder="Email" value="<?= old('email') ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password"
                            class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                            id="signin-input-1" required>
                        <div class="placeholder"><span>Password</span></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass_confirm"
                            class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                            id="signin-input-1"required>
                        <div class="placeholder"><span>Konfirmasi Password</span></div>
                    </div>
            <button id="signin-button" class="btn btn-primary rounded-pill float-right mb-4 mb-md-0"
                style="margin-top: 2.5rem;">Reset Password<i class="d-none d-sm-inline-block ml-2 fa fa-long-arrow-right"
                    aria-hidden="true"></i>
            </button>
            </form>
        </div>
    </div>
</div>

</div>
<?=$this->endSection();?>