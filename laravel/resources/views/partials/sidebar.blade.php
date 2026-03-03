<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

        <li class="nav-item">
          <a href="{{ route('dashboard3') }}"
             class="nav-link {{ request()->routeIs('dashboard3') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard v3</p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>