<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?=session()->getFlashdata('flash')?>">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Presensi Pegawai</h1>
            <?php if (strtotime($dataPresensi[0]->waktu_masuk)<strtotime(date('Y-m-d')) && strtotime($dataPresensiTerbaru->tahun_presensi.'-'.$dataPresensiTerbaru->bulan_presensi.'-'.$dataPresensiTerbaru->hari_presensi)==strtotime(date('Y-m-d')) ) :?>
            <button value="<?=$dataPresensiTerbaru->id_presensi."|".user_id();?>" id="presensiButton"
                class="btn btn-success btn-sm "><i class="fas fa-fw fa-clock"></i> Lakukan Presensi Masuk</button>
                </div>
            <?php else: ?>
            <button
                class="btn btn-success btn-sm" disabled><i class="fas fa-fw fa-clock"></i> Lakukan Presensi Masuk</button>
            </div>
            <?php endif ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-info"></i> Presensi
                            Kehadiran
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/img-presensi.svg');?>" class="img-fluid"
                            alt="Edit Informasi Karyawan">
                        <hr>
                        <center>
                            <?=(strtotime($dataPresensiTerbaru->tahun_presensi.'-'.$dataPresensiTerbaru->bulan_presensi.'-'.$dataPresensiTerbaru->hari_presensi)<strtotime(date('Y-m-d')) ) ? 'Presensi Hari Ini Belum Dibuka Admin' : 'Presensi Hari Ini Telah Dibuka, Silakan Klik Tombol Lakukan Presensi';?>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header border-left-primary py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-clock"></i> Riwayat
                            Presensi</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Waktu</th>
                                        <th>Waktu Presensi</th>
                                        <th>Kondisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $hashtag = 1; ?>
                                    <?php foreach ($dataPresensi as $presensi):?>
                                    <tr>
                                        <td><?=$hashtag++;?></td>
                                        <td><?=$presensi->hari_presensi.'-'.$presensi->bulan_presensi.'-'.$presensi->tahun_presensi;?>
                                        </td>
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
        </div>
                                    </div></div>
        <?=$this->endSection();?>