@php

  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('index')}}/#index" class="brand-link">
      <img src="{{ url('public/Admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Seputar<b>Berita</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public/Admin') }}/dist/img/myprofile.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check()) 
              {{request()->user()->nama}}
            @else
              Silahkan Login
            @endif
          </a>
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
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{checkRouteActive('dashboard')}}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/produk')}}" class="nav-link {{checkRouteActive('produk')}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Berita
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href='/kategori' class="nav-link {{checkRouteActive('kategori')}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Kategori
                    </p>
                </a>
            </li>
            <li class="nav-item menu-open">
              <a href="Master Data" class="nav-link {{checkRouteActive('Master Data')}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Master Data
                      <i class="right fas fa-angle-left"></i>
                    </p>
              </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/supplier" class="nav-link {{checkRouteActive('supplier')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/colegan" class="nav-link {{checkRouteActive('colegan')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colegan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/promo" class="nav-link {{checkRouteActive('promo')}}">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Promo
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}"  class="nav-link {{checkRouteActive('user')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
