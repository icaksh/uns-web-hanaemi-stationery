<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?=session()->getFlashdata('flash')?>">
        <!-- Page Heading -->
        <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <!-- Card Body -->
                <div class="card-body">
                    <h1 class="h3 mb-0 text-gray-800 text-center">Dokumentasi Aplikasi Hanaemi Stationery</h1>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <!-- Card Body -->
                <div class="card-body">
                    <h1 class="h3 mb-0 text-gray-800 text-center">Penerapan Teknologi (Penggunaan Library) Aplikasi Hanaemi Stationery</h1>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-desktop"></i> Library Frontend
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <table class="table">
                        <tr>
                        <td class="align-middle"><a href="https://www.chartjs.org/" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-chart-bar"></i>
                                    </span>
                                    <span class="text">Chart.js</span>
                                </a></td>
                            <td>Library untuk menghandle chart</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="https://datatables.net/" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-table"></i>
                                    </span>
                                    <span class="text">DataTables</span>
                                </a></td>
                            <td>Library untuk menghandle table</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="https://sweetalert2.github.io/" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="text">SweetAlert2</span>
                                </a></td>
                            <td>Library untuk menghandle alert</td>
                        </tr>
                        <tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-cogs"></i> Library Backend
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <table class="table">
                        <tr>
                            <td class="align-middle"><a href="https://github.com/lonnieezell/myth-auth" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-code"></i>
                                    </span>
                                    <span class="text">Myth/Auth</span>
                                </a></td>
                            <td>Library untuk handling user multilevel</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <!-- Card Body -->
                <div class="card-body">
                    <h1 class="h3 mb-0 text-gray-800 text-center">Fitur Aplikasi Hanaemi Stationery</h1>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-cogs"></i> Fitur Admin
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <table class="table">
                        <tr>
                            <td class="align-middle"><a href="" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-home"></i>
                                    </span>
                                    <span class="text">Home</span>
                                </a></td>
                            <td>Fitur ini berguna untuk menampilkan informasi tentang karyawan dan rekap dari presensi
                                yang telah dilakukan oleh karyawan serta gaji karyawan menurut divisi dan jabatan.</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="admin/pegawai" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-users"></i>
                                    </span>
                                    <span class="text">Pegawai</span>
                                </a></td>
                            <td>Fitur ini berguna untuk memanajemen pegawai dari kantor, seperti menampilkan tabel
                                pegawai, mengedit nama, divisi, dan jabatan dari pegawai.</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="admin/jabatan" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    <span class="text">Jabatan</span>
                                </a></td>
                            <td>Fitur ini berguna untuk memanajemen jabatan dari kantor, seperti menampilkan tabel
                                jabatan, mengedit nama, dan mengedit tunjangan jabatan.</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="admin/pegawai" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-briefcase"></i>
                                    </span>
                                    <span class="text">Divisi</span>
                                </a></td>
                            <td>Fitur ini berguna untuk memanajemen divisi dari kantor, seperti menampilkan tabel
                                jabatan, mengedit nama, dan mengedit tunjangan divisi.</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="admin/cuti" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-calendar"></i>
                                    </span>
                                    <span class="text">Cuti</span>
                                </a></td>
                            <td>Fitur ini berguna untuk memanajemen cuti yang diajukan oleh pegawai, admin dapat melihat
                                informasi cuti, menolak permohonan cuti, serta menerima permohonan cuti</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="admin/pegawai" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                    <span class="text">Presensi</span>
                                </a></td>
                            <td>Fitur ini berguna untuk memanajemen presensi dari kantor, admin dapat melihat informasi
                                presensi dan membuat presensi</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-cogs"></i> Fitur User
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <table class="table">
                        <tr>
                            <td class="align-middle"><a href="" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-home"></i>
                                    </span>
                                    <span class="text">Home</span>
                                </a></td>
                            <td>Fitur ini berguna untuk menampilkan informasi tentang karyawan dan rekap dari presensi
                                yang telah dilakukan oleh karyawan serta gaji karyawan menurut divisi dan jabatan.</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="admin/pegawai" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-pen"></i>
                                    </span>
                                    <span class="text">Profile</span>
                                </a></td>
                            <td>Fitur ini berguna agar karyawan bisa mengedit profilenya sendiri tanpa harus meminta bantuan admin untuk mengedit profile</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="admin/jabatan" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-clock"></i>
                                    </span>
                                    <span class="text">Presensi</span>
                                </a></td>
                            <td>Fitur ini berguna untuk melakukan presensi harian dengan cara menekan tombol "Lakukan Presensi" jika presensi muncul</td>
                        </tr>
                        <tr>
                        <td class="align-middle"><a href="admin/pegawai" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-calendar"></i>
                                    </span>
                                    <span class="text">Cuti</span>
                                </a></td>
                            <td>Fitur ini berguna untuk mengajukan cuti dengan tampilan tabel riwayat pengajuan cuti dan tombol "Ajukan Cuti"</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <!-- Card Body -->
                <div class="card-body">
                    <h1 class="h3 mb-0 text-gray-800 text-center">Potongan Kode Backend Aplikasi Hanaemi Stationery</h1>
                </div>
            </div>
        </div>
        </div>

        <!-- Cuti -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Config\Routes\Admin</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/routes-admin.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Config\Routes\User</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/routes-user.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Controllers\Admin\Cuti</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/cuti-admin.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Controllers\User\Cuti</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/cuti-user.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Controllers\Admin\Presensi</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/presensi-admin.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Controllers\User\Presensi</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/presensi-user.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Controllers\Admin\Pegawai</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/pegawai-admin.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Controllers\User\Profile</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/profile-user.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Controllers\Admin\Divisi</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/divisi-admin.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Config\Routes\Home</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/routes-home.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Controllers\Admin\Jabatan</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/jabatan-admin.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header border-left-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-code"></i>
                            <code>App\Controllers\Home</code>
                        </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="<?=base_url('img/hanaemi/dokumentasi/home.png');?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->

    <!-- /.container-fluid -->

    <?=$this->endSection();?>