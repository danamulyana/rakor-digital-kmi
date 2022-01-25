<nav class="sidebar sidebar-offcanvas sidebar-fixed" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{  request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{  request()->routeIs('dataList') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dataList') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Record Data</span>
        </a>
      </li>
      @if (Auth::user()->txtRole == 'ADMIN')
      <li class="nav-item {{  request()->routeIs('dataapprove') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dataapprove') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Approval Sportivity</span>
        </a>
      </li>
      @endif
    </ul>
  </nav>