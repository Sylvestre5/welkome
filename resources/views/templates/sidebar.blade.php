<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
        <i class="fa fa-fw fa-tachometer"></i>
        <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-folder"></i>
        <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
        <i class="fa fa-fw fa-area-chart"></i>
        <span>Charts</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        <i class="fa fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('rooms.index') }}">
        <i class="fa fa-fw fa-bed"></i>
        <span>Rooms</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('invoices.index') }}">
        <i class="fa fa-fw fa-file"></i>
        <span>Invoices</span></a>
    </li>
</ul>