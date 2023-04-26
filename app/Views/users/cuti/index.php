<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="flash-data" data-flashdata="<?=session()->getFlashdata('flash')?>">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cuti Pegawai</h1>
        <a href="<?=base_url('/user/cuti/create');?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-clipboard-list fa-sm text-white-50"></i> Ajukan Cuti</a>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-info"></i> Informasi Pengajuan
                        Cuti Terakhir
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <img src="<?=base_url('img/hanaemi/img-cuti.svg');?>" class="img-fluid" alt="Edit Informasi Karyawan">
                    <table class="table">
                        <tr>
                            <td>Status</td>
                            <td><?php
                            switch ($cutiTerbaru->status_cuti) {
                                case 0:
                                    echo '<span class="badge badge-warning">Diajukan</span>';
                                    break;
                                
                                case 1:
                                    echo '<span class="badge badge-success">Diterima</span>';
                                    break;
                                
                                case 2:
                                    echo '<span class="badge badge-danger">Ditolak</span>';
                                    break;
                            }?></td>
                        </tr>
                        <tr>
                            <td>Nama Cuti</td>
                            <td><?=$cutiTerbaru->nama_cuti;?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Cuti Mulai</td>
                            <td><?=$cutiTerbaru->mulai_cuti;?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Cuti Selesai</td>
                            <td><?=$cutiTerbaru->selesai_cuti;?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Diajukan</td>
                            <td><?=$cutiTerbaru->created_at;?></td>
                        </tr>
                        <?php if(!empty($cutiTerbaru->keterangan_cuti)) :?>
                        <tr>
                            <td>Keterangan</td>
                            <td><?=$cutiTerbaru->keterangan_cuti;?></td>
                        </tr>
                        <?php endif ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Pengajuan Cuti</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$cutiTotal?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Annual) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Cuti Baru Diajukan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$cutiDiajukan;?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clock fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Cuti Diterima
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$cutiDiterima;?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=($cutiDiterima/$cutiTotal)*100;?>%"
                                                    aria-valuenow="<?=($cutiDiterima/$cutiTotal)*100;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-check fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Annual) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Cuti Ditolak
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$cutiDitolak;?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: <?=($cutiDitolak/$cutiTotal)*100;?>%"
                                                    aria-valuenow="<?=($cutiDitolak/$cutiTotal)*100;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-times fa-2x text-gray-300"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="card shadow mb-4">
        <div class="card-header border-left-primary py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-clock"></i> Riwayat Pengajuan Cuti</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Cuti</th>
                            <th>Waktu Diajukan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $hashtag = 1; ?>
                        <?php foreach ($dataCuti as $cuti):?>
                        <tr>
                            <td><?=$hashtag++;?></td>
                            <td><?=$cuti->nama_cuti;?></td>
                            <td><?=$cuti->created_at;?></td>
                            <td><?=$cuti->mulai_cuti;?></td>
                            <td><?=$cuti->selesai_cuti;?></td>
                            <td><?php
                        switch ($cuti->status_cuti) {
                            case 0:
                                echo '<span class="badge badge-warning">Diajukan</span>';
                                break;
                            
                            case 1:
                                echo '<span class="badge badge-success">Diterima</span>';
                                break;
                            
                            case 2:
                                echo '<span class="badge badge-danger">Ditolak</span>';
                                break;
                        }?></td>
                            <td>
                                <button value="<?=$cuti->id_cuti;?>" class="btn btn-info btn-sm showCutiInfo"><i
                                        class="fas fa-fw fa-info"></i></button>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- DataTales Example -->

<!-- /.container-fluid -->

<?=$this->endSection();?>