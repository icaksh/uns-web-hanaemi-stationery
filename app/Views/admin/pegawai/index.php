<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
                <!-- Begin Page Content -->
                <div class="flash-data" data-flashdata="<?=session()->getFlashdata('flash')?>">
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User List</h1>
                    <p class="mb-4">Hati-hati dalam manajemen users, data yang dihapus tidak dapat dikembalikan lagi!   </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel List Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Lengkap</th>
                                            <th>Divisi</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $hashtag = 1; ?>
                                        <?php foreach ($data as $user):?>
                                        <tr>
                                            <td><?=$hashtag++;?></td>
                                            <td><?=$user->fullname;?></td>
                                            <td><?=$user->nama_divisi;?></td>
                                            <td><?=$user->nama_jabatan;?></td>
                                            <td>
                                                <a href="<?=base_url('admin/pegawai/'. $user->id);?>"
                                                class="btn btn-success"><i class="fas fa-fw fa-pen"></i></a>
                                                <button value="<?=$user->id;?>"
                                                class="btn btn-danger pegawaiHapus"><i class="fas fa-fw fa-trash"></i></a>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
<?=$this->endSection();?>