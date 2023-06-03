<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-user-edit  mb-3"></i>
              <p>
                MASTER
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-item">
              <li class="nav-item">
                <a href="index.php?page=datapasien" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=datadokter" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Dokter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=datapuskesmas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Puskesmas</p>
                </a>
              </li>
            </ul>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-chalkboard-teacher mr-2"></i>
              <p>
                LAPORAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-item">
              <li class="nav-item">
              <a href="index.php?page=laporan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Perbulan</p>
                </a>
              </li>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link text-red">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  LOGOUT
                </p>
              </a>
            </li>
          </ul>
        </nav>
      