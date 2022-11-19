<body>
  <div id="app">
    <div id="sidebar">
      <div class="sidebar-wrapper active">
        <div class="sidebar-header">
          <a href="dashboard">
            <img src="<?= base_url() ?>assets/images/logo.svg" alt="" srcset="">
          </a>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">            
            <li class='sidebar-title'>Main Menu</li>
            </li>
            <li class="sidebar-item">
              <a href="<?= base_url() ?>admin/dashboard" class='sidebar-link'>
                <i data-feather="home" width="20"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= base_url() ?>admin/tourney" class='sidebar-link'>
                <i data-feather="globe" width="20"></i>
                <span>Tournament</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= base_url() ?>admin/team" class='sidebar-link'>
                <i data-feather="flag" width="20"></i>
                <span>Team</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= base_url() ?>admin/partner" class='sidebar-link'>
                <i data-feather="star" width="20"></i>
                <span>Partner</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= base_url() ?>admin/kategori" class='sidebar-link'>
                <i data-feather="list" width="20"></i>
                <span>Kategori</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="<?= base_url() ?>admin/blog" class="sidebar-link">
                <i data-feather="book-open" width="20"></i>
                  <span>Blog</span>
              </a>
            </li>
            <li class='sidebar-title'>Forms &amp; Tables</li>
          </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>
    </div>
    <div id="main">
      <nav class="navbar navbar-header navbar-expand navbar-light">
        <a class="sidebar-toggler" href="#">
          <span class="navbar-toggler-icon"></span>
        </a>
        <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                    <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="<?= base_url() ?>assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Admin</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('admin/login/logout') ?>"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
      </nav>