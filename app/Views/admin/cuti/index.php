<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?=session()->getFlashdata('flash')?>">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manajemen Cuti Pegawai</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header border-left-primary py-3">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-clock"></i> Tabel Pengajuan Cuti
                    Pegawai</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Cuti</th>
                                <th>Nama Pengaju</th>
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
                                <td><?=$cuti->fullname;?></td>
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
                        }?>
                                </td>
                                <td>
                                    <button value="<?=$cuti->id_cuti;?>"
                                        class="btn btn-info btn-sm showCutiInfoAdmin"><i
                                            class="fas fa-fw fa-info"></i></button>
                                    <?php if($cuti->status_cuti ==0): ?>
                                    <button value="<?=$cuti->id_cuti;?>"
                                        class="btn btn-success btn-sm approveCutiAdmin"><i
                                            class="fas fa-fw fa-check"></i></button>
                                    <button value="<?=$cuti->id_cuti;?>"
                                        class="btn btn-danger btn-sm rejectCutiAdmin"><i
                                            class="fas fa-fw fa-times"></i></button>
                                    <?php endif ?>
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