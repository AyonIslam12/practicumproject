<div class="left-sidebar">
    <!-- left sidebar HEADER -->
    <div class="left-sidebar-header">
        <div class="left-sidebar-title">Driver Pannel</div>
        <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
            <span></span>
        </div>
    </div>
    <!-- NAVIGATION -->
    <!-- ========================================================= -->
    <div id="left-nav" class="nano">
        <div class="nano-content">
            <nav>
                <ul class="nav nav-left-lines" id="main-nav">
                    <!--HOME-->
                    <li class="{{ request()->is('employee')? 'active-item' : '' }}">
                        <a href="{{ route('employee.dashboard') }}">
                            <i class="fas fa-university" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('booking-information')? 'active-item' : '' }}">
                        <a href="{{ route('booking.information') }}">
                            <i class="fas fa-book" aria-hidden="true"></i>
                            <span>Booking Schedule</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>
