<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item {{ Request::segment(2) === 'dashboard' ? 'active' : null }}">
            	<a href="/admin/dashboard"><i class="la la-home"></i>
                	<span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            	</a>
            </li>

            <li class="nav-item {{ Request::segment(2) === 'userlist' ? 'active' : null }}">
            	<a href="/admin/userlist"><i class="la la-user"></i>
                	<span class="menu-title" data-i18n="Userlist">User List</span>
            	</a>
            </li>
            
            <li class="nav-item {{ Request::segment(2) === 'helpandinfo' || Request::segment(2) === 'aboutus' || Request::segment(2) === 'contactus' || Request::segment(2) === 'termsandcondition' ? 'active' : null }}">
                <a href=javascript:void(0);><i class="la la-file-text"></i><span class="menu-title" data-i18n="Dashboard">Help and  Info</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="/admin/aboutus"><i></i><span data-i18n="eCommerce">About us</span></a>
                        </li>
                        <li><a class="menu-item" href="/admin/contactus"><i></i><span data-i18n="Crypto">Contact us</span></a>
                        </li>
                        <li><a class="menu-item" href="/admin/termsandcondition"><i></i><span data-i18n="Sales">Terms and Condition</span></a>
                        </li>
                    </ul>
                </li>

            
            
            
        </ul>
    </div>
</div>

<!-- END: Main Menu-->
