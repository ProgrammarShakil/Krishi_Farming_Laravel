<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <img width="35px" src="{{ asset('images/icon.png') }}" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">BD KRISHI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Job Circular -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.job.circular.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#JobCircular" aria-expanded="true" aria-controls="JobCircular">
            <i class="fas fa-fw fa-briefcase {{ request()->routeIs('admin.job.circular.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Job Circular</span>
        </a>
        <div id="JobCircular" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.job.circular.create') }}">Create Job Circular</a>
                <a class="collapse-item" href="{{ route('admin.job.circular.index') }}">Job Circular List</a>
                <a class="collapse-item" href="{{ route('admin.job.applicants.index') }}">Job Applicants</a>
            </div>
        </div>
    </li>

    <!-- Investment Proposal -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.investment.proposal.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#InvestmentProposal" aria-expanded="true" aria-controls="InvestmentProposal">
            <i class="fas fa-dollar-sign {{ request()->routeIs('admin.investment.proposal.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Investment Proposal</span>
        </a>
        <div id="InvestmentProposal" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.investment.proposal.create') }}">Create Proposal</a>
                <a class="collapse-item" href="{{ route('admin.investment.proposal.index') }}">Proposal List</a>
                <a class="collapse-item" href="{{ route('admin.investment.applicants.index') }}">Investment Applicants</a>
            </div>
        </div>
    </li>

    <!-- Intern Application -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.intern.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#InternApplication" aria-expanded="true" aria-controls="InternApplication">
            <i class="fas fa-fw fa-id-badge {{ request()->routeIs('admin.intern.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Intern Application</span>
        </a>
        <div id="InternApplication" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.intern.index') }}">Intern Application List</a>
            </div>
        </div>
    </li>

    <!-- Business Proposal -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.business.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#BusinessProposal" aria-expanded="true" aria-controls="BusinessProposal">
            <i class="fas fa-fw fa-briefcase {{ request()->routeIs('admin.business.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Business Proposal</span>
        </a>
        <div id="BusinessProposal" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">Business Proposal List</a>
            </div>
        </div>
    </li>

    <!-- Brand Franchise Proposal -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.brand.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#BrandFranchiseProposal" aria-expanded="true" aria-controls="BrandFranchiseProposal">
            <i class="fas fa-fw fa-code-branch {{ request()->routeIs('admin.brand.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Brand Proposal</span>
        </a>
        <div id="BrandFranchiseProposal" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.brand.franchise.index')}}">Brand Franchise List</a>
            </div>
        </div>
    </li>

    <!-- Website Settings -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.settings.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#WebsiteSettings" aria-expanded="true" aria-controls="WebsiteSettings">
            <i class="fas fa-fw fa-tools {{ request()->routeIs('admin.settings.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Website Settings</span>
        </a>
        <div id="WebsiteSettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">Change Logo</a>
                <a class="collapse-item" href="login.html">Change Password</a>
            </div>
        </div>
    </li>

    <!-- Blogs -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#Blogs" aria-expanded="true" aria-controls="Blogs">
            <i class="fas fa-fw fa-blog {{ request()->routeIs('admin.blogs.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Blog Manage</span>
        </a>
        <div id="Blogs" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">Create Blog</a>
                <a class="collapse-item" href="login.html">Blog List</a>
            </div>
        </div>
    </li>

    <!-- Team -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.teams.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#Teams" aria-expanded="true" aria-controls="Teams">
            <i class="fas fa-fw fa-users {{ request()->routeIs('admin.teams.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Team Manage</span>
        </a>
        <div id="Teams" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.teams.create') }}">Create Team</a>
                <a class="collapse-item" href="{{ route('admin.teams.list') }}">Team List</a>
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
