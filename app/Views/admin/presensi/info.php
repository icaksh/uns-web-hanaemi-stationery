<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="flash-data" data-flashdata="<?=session()->getFlashdata('flash')?>">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Informasi Presensi Pegawai</h1>
        <a href="<?=base_url('/admin/presensi');?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header border-left-primary py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-calendar"></i> Tabel Presensi <?=$data[0]->hari_presensi.'-'.$data[0]->bulan_presensi.'-'.$data[0]->tahun_presensi;?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Waktu</th>
                            <th>Kondisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $hashtag = 1; ?>
                        <?php foreach ($data as $presensi):?>
                        <tr>
                            <td><?=$hashtag++;?></td>
                            <td><?=$presensi->fullname;?></td>
                            <td><?=$presensi->waktu_masuk;?></td>
                            <td><?=$presensi->nama_potongan;?></td>
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