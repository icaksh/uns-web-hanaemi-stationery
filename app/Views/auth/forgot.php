<?=$this->extend('auth/templates/index.php');?>

<?=$this->section('content');?>
<div id="auth-content">
    <div id="auth-content-signin-box" class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-6 my-5 my-md-0">
                <div class="auth-content-header">
                    <h3 class="text-primary text-center text-sm-left mt-4 mt-md-0">Lupa Password</h3>
                    <div class="text-center text-sm-left">
                        <small class="text-secondary">Silakan masukkan email yang terdaftar untuk mendapatkan token
                            untuk mereset password</small>
                            <br><?= view('Myth\Auth\Views\_message_block') ?>
                    </div>
                </div>
                <form id="signin-form" action="<?= route_to('forgot') ?>" method="post">

                    <?= csrf_field() ?>
                    <div class="form-group">
                        <input type="email" name="email"
                            class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                            id="signin-input-1" required>
                        <div class="placeholder"><span>Alamat Email</span></div>
                    </div>
                    <div class="col text-right">
                        <small class="text-secondary"><a href="<?= route_to('login') ?>">Masuk</a></small>
                    </div>
            <button id="signin-button" class="btn btn-primary rounded-pill float-right mb-4 mb-md-0"
                style="margin-top: 2.5rem;">Kirimkan Kode Token<i class="d-none d-sm-inline-block ml-2 fa fa-long-arrow-right"
                    aria-hidden="true"></i>
            </button>
            </form>
        </div>
    </div>
</div>

</div>
<?=$this->endSection();?>