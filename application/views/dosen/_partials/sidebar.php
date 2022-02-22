<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('dosen') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'biodata' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('dosen/biodata') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Biodata Dosen</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'hadirs' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Jadwal Tetap</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('dosen/ganjil1819s') ?>">Ganjil 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen/genap1819s') ?>">Genap 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen/ganjil1920s') ?>">Ganjil 2019/2020</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen/jadwalajas') ?>">Genap 2019/2020</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'hadirs' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Jadwal Pengganti</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('dosen/ganjil1819s2') ?>">Ganjil 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen/genap1819s2') ?>">Genap 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen/ganjil1920s2') ?>">Ganjil 2019/2020</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen/jadwalajas2') ?>">Genap 2019/2020</a>
        </div>
    </li>
    
</ul>