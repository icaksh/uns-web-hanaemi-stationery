<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?=session()->getFlashdata('flash')?>">
    </div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ajukan Cuti - <?=user()->fullname;?></h1>
        <a href="<?=base_url('/user/cuti/');?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-plus"></i> Pengajuan Cuti
                    </h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <img src="<?=base_url('img/hanaemi/img-cuti.svg');?>" class="img-fluid">
                    <hr>
                    <form action="" method="post">
                        <?= csrf_field();?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fas fa-fw fa-info"></i></span>
                            </div>
                            <input type="text" name="nama_cuti" class="form-control" placeholder="Nama Cuti"
                                aria-label="Nama Cuti" aria-describedby="basic-addon1"" required>
                        </div>

                        <div class=" input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fas fa-fw fa-calendar"></i></span>
                            </div>
                            <input type="date" name="mulai_cuti" class="form-control" placeholder="Tanggal Mulai Cuti"
                                aria-label="Tanggal Mulai Cuti" aria-describedby="basic-addon1"
                                value="<?=date('Y-m-d');?>" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fas fa-fw fa-clock"></i></span>
                            </div>
                            <input type="date" name="selesai_cuti" class="form-control" placeholder="Tanggal Selesai Cuti"
                                aria-label="Tanggal Selesai Cuti" aria-describedby="basic-addon1"
                                value="<?=date('Y-m-d');?>" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Ajukan Cuti</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-info"></i> Informasi Pengajuan
                        Cuti
                    </h6>
                </div>
                <div class="card-body">
                    <img src="<?=base_url('img/hanaemi/img-help.svg');?>" class="img-fluid">
                    <hr>
                    Untuk mengajukan permohonan cuti, anda dapat mengisi formulir yang telah disediakan
                    <br><br>
                    <b>Contoh</b><br>
                    <b>Nama Cuti</b>: Cuti Melahirkan<br>
                    <b>Tanggal Mulai Cuti</b>: 12/20/2021 (20 Desember 2021)<br>
                    <b>Tanggal Selesai Cuti</b>: 12/23/2021 (23 Desember 2021)<br>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

<?=$this->endSection();?>