<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            
                    <a href="{{url('Admin/admin')}}" class="text-nowrap logo-img">
                        
                       
                        <b><h4>@lang('lang.Projectname')</b><br><h6> ADMIN</h6></h4>
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
                    <span class="hide-menu">@lang('lang.Home')</span>
                </li>
                <li class="sidebar-item">
                   
                            <a class="sidebar-link" href="{{url('Admin/dashboard')}}" aria-expanded="false">
                                
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">@lang('lang.Dashboard')</span>
                            </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">@lang('lang.Merchantadmin')</span>
                </li>
                <li class="sidebar-item">
                    
                            <a class="sidebar-link" href="{{url('Admin/merchant')}}" aria-expanded="false">
                                
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">@lang('lang.Listmerchant')</span>
                            </a>
                </li>
                <li class="sidebar-item">
                   
                            <a class="sidebar-link" href="{{url('Admin/form')}}" aria-expanded="false">
                                
                                <span>
                                <i class="fa-solid fa-person-circle-plus fa-lg" style="color: #000000;"></i>
                                </span>
                                <span class="hide-menu">@lang('lang.Newmerchant')</span>
                            </a>
                </li>
                <li class="sidebar-item">
                
                            <a class="sidebar-link" href="{{url('Admin/send_message_merchant')}}" aria-expanded="false">
                                
                                <span>
                                <i class="fa-solid fa-envelope-open-text fa-lg"></i>
                                </span>
                                <span class="hide-menu">Send Message </span>
                            </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">@lang('lang.Employeeadmin')</span>
                </li>
                <li class="sidebar-item">
                    
                            <a class="sidebar-link" href="{{url('Admin/employee')}}" aria-expanded="false">
                                
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">@lang('lang.Listemployee')</span>
                            </a>
                </li>
                <li class="sidebar-item">
                    
                            <a class="sidebar-link" href="{{url('Admin/Add_employee')}}" aria-expanded="false">
                                
                                <span>
                                <i class="fa-solid fa-user-plus fa-lg"></i>
                                </span>
                                <span class="hide-menu">@lang('lang.Newemployee')</span>
                            </a>
                </li>
                <li class="sidebar-item">
                   
                            <a class="sidebar-link" href="{{url('Admin/send_message_employee')}}" aria-expanded="false">
                                                                <span>
                                                                <i class="fa-solid fa-envelope-open-text fa-lg"></i>
                                </span>
                                <span class="hide-menu">Send Message</span>
                            </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">@lang('lang.Project')</span>
                </li>
                <li class="sidebar-item">
                    
                            <a class="sidebar-link" href="{{url('Admin/Project')}}" aria-expanded="false">
                                
                            <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">@lang('lang.Listproject')</span>
                            </a>
                </li>
                <li class="sidebar-item">
                
                            <a class="sidebar-link" href="{{url('Admin/NewProject')}}" aria-expanded="false">
                     
                                <span>
                                <i class="fa-solid fa-folder-plus fa-lg"></i>
                                </span>
                                <span class="hide-menu">@lang('lang.Addproject')</span>
                            </a>
                </li>
                <li class="sidebar-item">
                   
                            <a class="sidebar-link" href="{{url('Admin/project_screen')}}" aria-expanded="false">
                                
                                <span>
                                <i class="fa-solid fa-user-tie fa-lg"></i>
                                </span>
                                <span class="hide-menu">Project Screening</span>
                            </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>
               
                </li>
                <li class="sidebar-item">
                   
                            <a class="sidebar-link" href="{{url('Admin/logout')}}" aria-expanded="false">
                              
                                <span>
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">@lang('lang.Logout')</span>
                            </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
