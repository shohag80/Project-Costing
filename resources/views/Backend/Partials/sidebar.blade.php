<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="submenu-open">
                <h6 class="submenu-hdr">Main</h6>
                <ul>
                    <li class="active">
                        <a href="{{route('Dashboard')}}"><i data-feather="grid"></i><span>Dashboard</span></a>
                    </li>
                </ul>
            </li>

            <li class="submenu-open">
                <h6 class="submenu-hdr">Finance & Accounts</h6>
                <ul>
                    <li class="submenu">
                        <a class="" href="javascript:void(0);"><i data-feather="file-text"></i><span>Expense</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{route('Project_List')}}">Project List</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="submenu-open">
                <h6 class="submenu-hdr">Others</h6>
                <ul>
                    <li class="submenu">
                        <a class="" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg><span>Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="{{route('Description')}}">Description Settings</a></li>
                            <li><a class="" href="{{route('Designation')}}">Designation Settings</a></li>
                            <li><a class="" href="{{route('Salary')}}">Monthly Prof. Salary Settings</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('Logout')}}"><i data-feather="log-out"></i><span>Logout</span> </a>
                    </li>
                </ul>
            </li>
        </ul>


    </div>
</div>