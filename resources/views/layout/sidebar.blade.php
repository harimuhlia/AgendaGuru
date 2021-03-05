<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('template') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li>
          <a href="{{ route('page.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Data PTK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-angle-right"></i> Semua PTK</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Pendidik (Guru)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Tenaga Kependidikan (TU)</a></li>
          </ul>
        </li>
        <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears (alias)"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-angle-right"></i> Data Kelas</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Data Jurusan</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Data Mapel</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Data Level Pengguna</a></li>
          </ul>
        </li>
        <li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Manajemen User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-angle-right"></i> Manage Admin</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Manage Guru (TP)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Manage Tata Usaha (TK)</a></li>
          </ul>
        </li>
        <li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Input Agenda</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-angle-right"></i> Agenda Guru</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Agenda Tata Usaha</a></li>
          </ul>
        </li>
        <li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-check"></i> <span>Approve</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-green">17</small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-angle-right"></i> Approve Agenda Guru</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Approve Agenda T.U</a></li>
          </ul>
        </li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU PENGATURAN</li>
        <li>
          <a href="{{ route('page.dashboard') }}">
            <i class="fa fa-gear (alias)"></i> <span>Pengaturan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-reorder (alias)"></i>
            <span>Lain-Lain</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-angle-right"></i>SMKN 5 Kab. TNG</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>