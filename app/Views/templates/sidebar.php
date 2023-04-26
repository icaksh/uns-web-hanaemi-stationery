<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-pen"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hanaemi <sup>Stationery</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading - User Profile Hanaemi -->
            <div class="sidebar-heading">
                Dashboard
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('/');?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <?php if (in_groups('Admin')) : ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading - User Profile Hanaemi -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Manajemen Kantor</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" style="">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manajemen:</h6>
                        <a class="collapse-item" href="<?=base_url('/admin/pegawai');?>"><i class="fas fa-fw fa-users"></i>
                        <span> Pegawai</span></a>
                        <a class="collapse-item" href="<?=base_url('/admin/jabatan');?>"><i class="fas fa-fw fa-user-plus"></i>
                        <span> Jabatan</span></a>
                        <a class="collapse-item" href="<?=base_url('/admin/divisi');?>"><i class="fas fa-fw fa-briefcase"></i>
                        <span> Divisi</span></a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('/admin/cuti');?>">
                    <i class="fas fa-fw fa-check-circle"></i>
                    <span>Manajemen Cuti</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('/admin/presensi');?>">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Manajemen Presensi</span></a>
            </li>
            <?php endif ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading - User Profile Hanaemi -->
            <div class="sidebar-heading">
                User
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/user/profile">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Edit Profile</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/user/presensi">
                    <i class="fas fa-fw fa-check"></i>
                    <span>Presensi Kehadiran</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/user/cuti">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Pengajuan Cuti</span></a>
            </li>

            
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Tentang
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/about">
                    <i class="fas fa-fw fa-info"></i>
                    <span>Tentang Aplikasi</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/doc">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Dokumentasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>