  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hải Nguyễn</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
            
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa-solid fa-gauge-high"></i>
              <p>
                   Thống kê         
              </p>
            </a>
          </li>
      
          <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link">
              <i class="fa-solid fa-users"></i>
              <p>
                Quản lý tài khoản
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('gplx.index') }}" class="nav-link">
              <i class="fa-solid fa-book"></i>
              <p>
                Quản lý thông tin khách
              </p>
            </a>
          </li>
         
          <li class="nav-item ">
            <a href="{{ route('categories.index') }}" class="nav-link">
              <i class="fa-solid fa-car-side"></i>
              <p>
                Quản lý loại ô tô
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('gara.index')}}" class="nav-link">
              <i class="fa-solid fa-warehouse"></i>
              <p>
                Quản lý gara
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('car.index') }}" class="nav-link">
              <i class="fa-solid fa-car"></i>
              <p>
                Quản lý ô tô
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('blog.index') }}" class="nav-link">
              <i class="fa-sharp fa-solid fa-pen"></i>
              <p>
                Quản lý bài đăng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('discount.index') }}" class="nav-link">
              <i class="fa-solid fa-percent"></i>
              <p>
                Quản lý mã giảm giá
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('renral.index') }}" class="nav-link">
              <i class="fa-solid fa-truck"></i>
              <p>
               Quản lý thuê ô tô
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>