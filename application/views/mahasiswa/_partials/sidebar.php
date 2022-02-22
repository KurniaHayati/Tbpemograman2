<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('mahasiswa') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'biodata' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('mahasiswa/biodata') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Biodata Dosen</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kehadirans' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Jadwal Tetap</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadirana') ?>">Ganjil 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadiranc') ?>">Genap 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadiranb') ?>">Ganjil 2019/2020</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadirand') ?>">Genap 2019/2020</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kehadirans' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Jadwal Pengganti</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadirana2') ?>">Ganjil 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadiranc2') ?>">Genap 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadiranb2') ?>">Ganjil 2019/2020</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadirand2') ?>">Genap 2019/2020</a>
        </div>
    </li>
    
</ul>