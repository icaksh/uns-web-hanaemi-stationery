<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="flash-data" data-flashdata="<?=session()->getFlashdata('error')?>">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Presensi Pegawai</h1>
        <?php if(strtotime($data[0]->tahun_presensi.'-'.$data[0]->bulan_presensi.'-'.$data[0]->hari_presensi)<strtotime(date('Y-m-d'))):?>
        <button id="tambahPresensi" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Buka Presensi Hari Ini</button>
                </div>
                <?php else: ?>
        <button class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" disabled><i
                class="fas fa-plus fa-sm text-white-50"></i> Presensi Sudah Dibuka</button
            </div>
            <?php endif ?>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header border-left-primary py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-calendar"></i> Tabel Jadwal Presensi</h6>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Hari</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $hashtag = 1; ?>
                        <?php foreach ($data as $presensi):?>
                        <tr>
                            <td><?=$hashtag++;?></td>
                            <td><?=$presensi->hari_presensi;?></td>
                            <td><?=$presensi->bulan_presensi;?></td>
                            <td><?=$presensi->tahun_presensi;?></td>
                            <td>
                            <a href="<?=base_url('/admin/presensi/'.$presensi->id_presensi);?>" class="btn btn-info btn-sm"><i
                                        class="fas fa-fw fa-clipboard-list"></i></a>
                                        </td>
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