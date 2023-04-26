<?=$this->extend('templates/index.php');?>

<?=$this->section('page-content');?>
<div class="container-fluid">
 <?php 
 $denda = ($totalPresensi - ($presensiHadir + $presensiIzin)) * 100000;
 $kotor = ($users->tunjangan_divisi + $users->gaji_pokok) - $denda;
 $ppn = $kotor * (10/100);
 $bersih = $kotor - $ppn;
 ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Selamat Datang - <?=user()->fullname;?></h1>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Divisi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$users->nama_divisi;?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jabatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$users->nama_jabatan;?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Roles
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?=(in_groups('Admin')) ? 'Admin' : ' User';?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Gaji Bersih (Bulan Ini)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.
                                <?=$bersih?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-user"></i> Informasi Karyawan
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <img src="<?=base_url('/img/hanaemi/img-landing.svg');?>" class="img-fluid">
                    <table class="table">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><?=$users->fullname;?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?=$users->address;?></td>
                        </tr>
                        
                        <tr>
                            <td>Nomor Telepon</td>
                            <td><?=$users->phone;?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?=$users->email;?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>*******</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-check"></i> Kehadiran
                        Bulan Ini
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <br>
                    <table class="table">
                        <tr>
                            <td><b>Total Presensi</b></td>
                            <td><?=$totalPresensi;?></td>
                        </tr>
                        <tr>
                            <td><b>Presensi Hadir</b></td>
                            <td><?=$presensiHadir;?></td>
                        </tr>
                        <tr>
                            <td><b>Presensi Izin</b></td>
                            <td><?=$presensiIzin;?></td>
                        </tr>
                        <tr>
                            <td><b>Presensi Alpha</b></td>
                            <td><?=$totalPresensi-($presensiHadir+$presensiIzin);?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-money-bill"></i> Informasi Gaji
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <img src="<?=base_url('/img/hanaemi/img-gaji.svg');?>" class="img-fluid">
                    <table class="table">
                        <tr>
                            <td>Gaji Pokok</td>
                            <td class="text-right">Rp.</td>
                            <td class="text-right"><?=$users->tunjangan_divisi;?></td>
                        </tr>
                        <tr>
                            <td>Tunjangan Jabatan</td>
                            <td class="text-right">Rp.</td>
                            <td class="text-right"><?=$users->gaji_pokok;?></td>
                        </tr>
                        <tr>
                            <td>Denda Alpha</td>
                            <td class="text-right">Rp.</td>
                            <td class="text-right">-<?=$denda;?></td>
                        </tr>
                        <tr>
                            <td>Gaji Kotor</td>
                            <td class="text-right">Rp.</td>
                            <td class="text-right"><?=$kotor;?></td>
                        </tr>
                        <tr>
                            <td>PPN 10%</td>
                            <td class="text-right">Rp.</td>
                            <td class="text-right">-<?=$ppn;?></td>
                        </tr>
                        <tr>
                            <td><b>Gaji Bersih</b></td>
                            <td class="text-right"><b>Rp.</b></td>
                            <td class="text-right"><b><?=$bersih;?></b></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="<?=base_url();?>/vendor/chart.js/Chart.min.js"></script>

    <!-- /.container-fluid -->
    <script>
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Hadir", "Izin", "Alpha"],
                datasets: [{
                    data: [ <?= $presensiHadir; ?> , <?= $presensiIzin; ?> , <?=$totalPresensi - ($presensiHadir + $presensiIzin); ?>
                    ],
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });
    </script>

</div>

<?=$this->endSection();?>