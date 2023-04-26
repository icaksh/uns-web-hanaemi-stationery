<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?=session()->getFlashdata('flash')?>">
    </div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Pegawai - <?=$user->fullname;?></h1>
        <a href="<?=base_url('/admin/pegawai/');?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-edit"></i> Edit Pegawai
                    </h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <img src="<?=base_url('img/hanaemi/img-edit-pegawai.svg');?>" class="img-fluid">
                    <hr>
                    <form action="" method="post">
                        <?= csrf_field();?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fas fa-fw fa-id-card"></i></span>
                            </div>
                            <input type="text" name="fullname" class="form-control" placeholder="Nama Pegawai" value="<?=$user->fullname;?>" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01"><i
                                        class="fas fa-fw fa-briefcase"></i></label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="id_divisi" required>
                                <option selected>Divisi</option>
                                <?php foreach($divisis as $divisi) :?>
                                    <?php if($user->id_divisi == $divisi->id_divisi):?>
                                        <option value="<?=$divisi->id_divisi;?>" selected><?=$divisi->nama_divisi;?></option>
                                        <?php else :?>
                                    <option value="<?=$divisi->id_divisi;?>"><?=$divisi->nama_divisi;?></option>
                                    <?php endif ?>
                                    <?php endforeach ?>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01"><i
                                        class="fas fa-fw fa-user-plus"></i></label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="id_jabatan" required>
                                <option selected>Jabatan</option>
                                <?php foreach($jabatans as $jabatan) :?>
                                    <?php if($user->id_jabatan == $jabatan->id_jabatan):?>
                                        <option value="<?=$jabatan->id_jabatan;?>" selected><?=$jabatan->nama_jabatan;?></option>
                                        <?php else :?>
                                    <option value="<?=$jabatan->id_jabatan;?>"><?=$jabatan->nama_jabatan;?></option>
                                    <?php endif ?>
                                    <?php endforeach ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fas fa-fw fa-home"></i></span>
                            </div>
                            <input type="text" name="address" class="form-control" placeholder="Jln Tentara Pelajar No. 7" value="<?=$user->address;?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fas fa-fw fa-phone"></i></span>
                            </div>
                            <input type="text" name="phone" class="form-control" placeholder="081210450790" value="<?=$user->phone;?>" required>
                        </div>

                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Simpan</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-info"></i> Informasi Edit Pegawai
                    </h6>
                </div>
                <div class="card-body">
                    <img src="<?=base_url('img/hanaemi/img-help.svg');?>" class="img-fluid">
                    <hr>
                    Untuk mengedit informasi pegawai, anda dapat mengisi formulir yang telah disediakan
                    <br><br>
                    <b>Contoh</b><br>
                    <b>Nama</b>: Palguno Wicaksono<br>
                    <b>Divisi</b>: Pemasaran<br>
                    <b>Jabatan</b>: Direktur Keuangan<br>
                    <b>Alamat</b>: 17 Park Lake St.<br>
                    <b>Nomor HP</b>: 081210450790<br>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

<?=$this->endSection();?>