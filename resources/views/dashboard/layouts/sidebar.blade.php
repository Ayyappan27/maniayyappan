<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item {{ Request::segment(2) === 'dashboard' ? 'active' : null }}">
            	<a href="/admin/dashboard"><i class="la la-home"></i>
                	<span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            	</a>
            </li>

            <li class="nav-item {{ Request::segment(2) === 'users' ? 'active' : null }}">
            	<a href="/admin/users"><i class="la la-user"></i>
                	<span class="menu-title" data-i18n="Userlist">Users</span>
            	</a>
            </li>
            
            <li class="nav-item">
            <a href=javascript:void(0);><i class="la la-file-text"></i><span class="menu-title" data-i18n="Dashboard">Help and  Info</span> </a>
                <ul class="menu-content">
                    <li class="nav-item {{ Request::segment(2) === 'aboutus' ? 'active' : null }}"  >
                        <a class="menu-item" href="/admin/aboutus"><i></i>
                            <span>About us</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::segment(2) === 'contactus' ? 'active' : null }}">
                        <a class="menu-item" href="/admin/contactus"><i></i>
                            <span>Contact us</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::segment(2) === 'termsandcondition' ? 'active' : null }}">
                        <a class="menu-item" href="/admin/termsandcondition"><i></i>
                            <span>Terms and Condition</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::segment(2) === 'appinfo' ? 'active' : null }}">
                        <a class="menu-item" href="/admin/appinfo"><i></i>
                            <span>App info</span>
                        </a>
                    </li>
                </ul>
                <li class="nav-item {{ Request::segment(2) === 'sectors' || Request::segment(2) === 'sectorform' || Request::segment(2) === 'editsectorform' ? 'active' : null }}">
                    <a class="menu-item" href="/admin/sectors"><i class="la la-list"></i>
                        <span>Sectors</span>
                    </a>
                </li>  
            </li>  
        </ul>
    </div>
</div>

<!-- END: Main Menu-->
