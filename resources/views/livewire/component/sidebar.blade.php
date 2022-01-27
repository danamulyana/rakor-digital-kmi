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
      <li class="nav-item">
        <a class="nav-link" href="https://datastudio.google.com/u/0/reporting/2d0011ee-3666-4b35-a3f5-30ec51cdd027/page/MGwiC" rel="noopener noreferrer" target="_blank">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">View Leaderboards</span>
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