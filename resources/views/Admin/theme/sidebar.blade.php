<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            
                    <a href="{{url('Admin/admin')}}" class="text-nowrap logo-img">
                        
                                    <img src="{{ url('/assets/images/logo.png') }}" height="70px">
                        <b><h4>READROOTS</b><br><h6> ADMIN</h6></h4>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                   
                            <a class="sidebar-link" href="{{url('Admin/dashboard')}}" aria-expanded="false">
                                
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">@lang('Products')</span>
                </li>
                <li class="sidebar-item">
                    
                            <a class="sidebar-link" href="{{url('Admin/booklist')}}" aria-expanded="false">
                                
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">List of books</span>
                            </a>
                </li>
                <li class="sidebar-item">
                   
                            <a class="sidebar-link" href="{{url('Admin/create')}}" aria-expanded="false">
                                
                                <span>
                                <i class="fa-solid fa-person-circle-plus fa-lg" style="color: #000000;"></i>
                                </span>
                                <span class="hide-menu">Add new book</span>
                            </a>
                </li>
                
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">User</span>
                </li>
                <li class="sidebar-item">
                    
                            <a class="sidebar-link" href="{{url('Admin/users')}}" aria-expanded="false">
                                
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">List of Users</span>
                            </a>
                </li>
                
                <li class="sidebar-item">
                   
                            <a class="sidebar-link" href="{{url('Admin/logout')}}" aria-expanded="false">
                              
                                <span>
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">logout</span>
                            </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
