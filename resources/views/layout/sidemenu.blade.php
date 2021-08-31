<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADS ART</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Customers -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('customers')}}">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Customers</span>
        </a>
    </li>

    <!-- Nav Item - Events -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('events')}}">
            <i class="fas fa-fw fa-calendar-day"></i>
            <span>Events</span>
        </a>
    </li>

    <!-- Nav Item - Employees -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('employees')}}">
            <i class="fas fa-fw fa-hard-hat"></i>
            <span>Employees</span>
        </a>
    </li>

    <!-- Nav Item - Teams -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('teams')}}">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>Teams</span>
        </a>
    </li>

    <!-- Nav Item - Notices -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('notices')}}">
            <i class="fas fa-fw fa-sticky-note"></i>
            <span>Notices</span>
        </a>
    </li>

    <!-- Nav Item - Reports Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-medical-alt"></i>
            <!-- <i class="fas fa-file-medical-alt"></i> -->
            <span>Reports</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <a class="collapse-item" href="{{ route('event-report') }}">Event Report</a> -->
                <a class="collapse-item" href="{{ route('employee-event-report') }}">Employee Event Report</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>