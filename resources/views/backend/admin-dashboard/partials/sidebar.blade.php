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
            <i class="fas fa-fw fa-home {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Change Segments -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.segments.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#Segments" aria-expanded="true" aria-controls="Segments">
            <i class="fas fa-fw fa-leaf {{ request()->routeIs('admin.segments.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Change Segments</span>
        </a>
        <div id="Segments" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.segments.index') }}">All Segments</a>
            </div>
        </div>
    </li>

    <!-- Job Circular -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.job.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#JobCircular" aria-expanded="true" aria-controls="JobCircular">
            <i class="fas fa-fw fa-bullhorn {{ request()->routeIs('admin.job.*') ? 'text-white' : 'text-gray-400' }}"></i>
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
        <a class="nav-link {{ request()->routeIs('admin.investment.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#InvestmentProposal" aria-expanded="true" aria-controls="InvestmentProposal">
            <i class="fas fa-dollar-sign {{ request()->routeIs('admin.investment.*') ? 'text-white' : 'text-gray-400' }}"></i>
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
                <a class="collapse-item" href="{{route('admin.busines.proposal.index')}}">Business Proposal List</a>
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

    <!-- Blogs -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#Blogs" aria-expanded="true" aria-controls="Blogs">
            <i class="fas fa-fw fa-blog {{ request()->routeIs('admin.blogs.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Manage Blog</span>
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
            <span>Manage Team</span>
        </a>
        <div id="Teams" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.teams.create') }}">Create Team</a>
                <a class="collapse-item" href="{{ route('admin.teams.list') }}">Team List</a>
            </div>
        </div>
    </li>

    <!-- Photo Gallery -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.photos.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#PhotoGallery" aria-expanded="true" aria-controls="PhotoGallery">
            <i class="fas fa-fw fa-image {{ request()->routeIs('admin.teams.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Photo Gallery</span>
        </a>
        <div id="PhotoGallery" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.teams.create') }}">Create Photo</a>
                <a class="collapse-item" href="{{ route('admin.teams.list') }}">Photo List</a>
            </div>
        </div>
    </li>

    <!-- Manage Page -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.pages.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#ManagePage" aria-expanded="true" aria-controls="ManagePage">
            <i class="fas fa-fw fa-file-alt {{ request()->routeIs('admin.pages.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Manage Page</span>
        </a>
        <div id="ManagePage" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.pages.create') }}">Create Page</a>
                <a class="collapse-item" href="{{ route('admin.pages.index') }}">All Pages</a>
            </div>
        </div>
    </li>

    <!-- Manage Porfolio -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.portfolios.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#ManagePortfolio" aria-expanded="true" aria-controls="ManagePortfolio">
            <i class="fas fa-fw fa-folder-open {{ request()->routeIs('admin.portfolios.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Manage Portfolio</span>
        </a>
        <div id="ManagePortfolio" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.pages.create') }}">Create Portfolio</a>
                <a class="collapse-item" href="{{ route('admin.pages.index') }}">All Portfolios</a>
            </div>
        </div>
    </li>

    <!-- Contact -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.contact.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#Contacts" aria-expanded="true" aria-controls="Contacts">
            <i class="fas fa-fw fa-envelope {{ request()->routeIs('admin.contact.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Messages</span>
        </a>
        <div id="Contacts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.contact.index') }}">All Messages</a>
            </div>
        </div>
    </li>

    <!-- Manage Video Story -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.videos.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#ManageVideoStory" aria-expanded="true" aria-controls="ManageVideoStory">
            <i class="fas fa-fw fa-video {{ request()->routeIs('admin.videos.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Manage Video Story</span>
        </a>
        <div id="ManageVideoStory" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.pages.index') }}">All Videos</a>
                <a class="collapse-item" href="{{ route('admin.pages.index') }}">Change Video</a>
            </div>
        </div>
    </li>

    <!-- Manage Allies -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.allies.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#ManageAllies" aria-expanded="true" aria-controls="ManageAllies">
            <i class="fas fa-fw fa-handshake {{ request()->routeIs('admin.allies.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Manage Allies</span>
        </a>
        <div id="ManageAllies" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.pages.index') }}">All Allies</a>
                <a class="collapse-item" href="{{ route('admin.pages.index') }}">Change Allies Image</a>
            </div>
        </div>
    </li>

    
    <!-- Website Settings -->
    {{-- <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.settings.*') ? 'bg-blue-600 text-white' : 'text-gray-400 hover:bg-blue-500 hover:text-white' }}" href="#" data-toggle="collapse" data-target="#WebsiteSettings" aria-expanded="true" aria-controls="WebsiteSettings">
            <i class="fas fa-fw fa-tools {{ request()->routeIs('admin.settings.*') ? 'text-white' : 'text-gray-400' }}"></i>
            <span>Website Settings</span>
        </a>
        <div id="WebsiteSettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">Change Logo</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
