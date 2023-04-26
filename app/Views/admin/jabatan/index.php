<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="flash-data" data-flashdata="<?=session()->getFlashdata('flash')?>">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Jabatan Pegawai</h1>
        <button id="jabatanTambah" href="" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Jabatan</button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header border-left-primary py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-clock"></i> Tabel Jabatan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Jabatan</th>
                            <th>Gaji Pokok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $hashtag = 1; ?>
                        <?php foreach ($data as $jabatan):?>
                        <tr>
                            <td><?=$hashtag++;?></td>
                            <td><?=$jabatan->nama_jabatan;?></td>
                            <td><?=$jabatan->gaji_pokok;?></td>
                            <td>
                                <button value="<?=$jabatan->id_jabatan;?>" class="btn btn-success btn-sm jabatanEdit"><i
                                        class="fas fa-fw fa-pen"></i></button>
                                <button value="<?=$jabatan->id_jabatan;?>" class="btn btn-danger btn-sm jabatanHapus"><i
                                        class="fas fa-fw fa-trash"></i></button></td>
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