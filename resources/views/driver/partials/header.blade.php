<div class="page-header">
    <!-- LEFTSIDE header -->
    <div class="leftside-header">
        <div class="logo">

        </div>
        <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <!-- RIGHTSIDE header -->
    <div class="rightside-header">

        <!--NOCITE HEADERBOX-->

        <!--USER HEADERBOX -->
        <div class="header-section" id="user-headerbox">
            <div class="user-header-wrap">
                <div class="user-photo">
                    <img alt="profile photo" src="{{ asset('uploads/driver/'.auth()->user()->image) }}" />
                </div>
                <div class="user-info">
                    <span class="user-name">{{ Str::ucfirst(auth()->user()->name) }}</span>
                    <span class="user-profile">{{ Str::ucfirst(auth()->user()->role) }}</span>
                </div>
                <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                <i class="fa fa-minus icon-close" aria-hidden="true"></i>
            </div>
            <div class="user-options dropdown-box">
                <div class="drop-content basic">
                    <ul>
                        <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                        <li> <a href="{{ route('employee.logout') }}"><i class="fa fa-sign-out " aria-hidden="true"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
