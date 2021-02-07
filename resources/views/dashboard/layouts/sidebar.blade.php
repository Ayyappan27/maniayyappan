<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ Request::segment(2) === 'dashboard' ? 'active' : null }}">
                <a href="/admin"><i class="la la-home"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ Request::segment(2) === 'users' ? 'active' : null }}">
                <a href="/admin/users"><i class="la la-user"></i>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a href=javascript:void(0);><i class="la la-file-text"></i><span class="menu-title">Info Settings</span> </a>
                <ul class="menu-content">
                    <li class="nav-item {{ Request::segment(2) === 'abouts' ? 'active' : null }}">
                        <a class="menu-item" href="/admin/abouts"><i></i>
                            <span>About</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::segment(2) === 'contacts' ? 'active' : null }}">
                        <a class="menu-item" href="/admin/contacts"><i></i>
                            <span>Contacts</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::segment(2) === 'terms' ? 'active' : null }}">
                        <a class="menu-item" href="/admin/terms"><i></i>
                            <span>Terms and Condition</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::segment(2) === 'apps' ? 'active' : null }}">
                        <a class="menu-item" href="/admin/apps/settings"><i></i>
                            <span>App Settings</span>
                        </a>
                    </li>
                </ul>
            <li class="nav-item {{ Request::segment(2) === 'sectors-list' || Request::segment(2) === 'sectorform' || Request::segment(2) === 'editsectorform' ? 'active' : null }}">
                <a class="menu-item" href="/admin/sectors-list"><i class="la la-list"></i>
                    <span>Sectors</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
