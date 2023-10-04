  <aside class="main-sidebar sidebar-dark-primary">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/back/index.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/home" class="nav-link">
              <i class="fa-sharp fa-solid fa-gauge-high"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="{{route('adminpendaftaran')}}" class="nav-link">
            <i class="fa-sharp fa-solid fa-box-archive"></i>
              <p>Pendaftaran Haji</p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="{{route('adminproseskeberangkatan')}}" class="nav-link">
            <i class="fa-sharp fa-solid fa-box-archive"></i>
              <p>Proses Keberangkatan</p>
            </a>
          </li>
        <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link">
            <i class="fa-sharp fa-solid fa-users"></i>
            <p>User</p>
            </a>
        </li> -->

        <!-- <li class="nav-item menu-open">
            <a href="/" class="nav-link">
            <i class="fa-sharp fa-solid fa-arrow-left"></i>
            <p>Kembali</p>
            </a>
        </li> -->

        <li class="nav-item menu-open">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
                <p> Log Out</p>
            </a>
                <form id="logout-form" action="{{ route('logout') }}"
                                `   method="POST" class="d-none">
                                    @csrf
                </form>
        </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
