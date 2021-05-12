<aside>
    <div id="sidebar"  class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="{{ request()->is('admin') ? 'active' : ''}}" href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;"   class="{{ request()->is('admin/user/lists') ? 'active' : '' }}">
                    <i class="fa fa-user"></i>
                    <span>Users</span>
                </a>
                <ul class="sub">
                    <li  class="{{ request()->is('admin/user/lists') ? 'active' : '' }}"><a  href="{{ route('admin.user.list') }}">Manage Users</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;"   class="{{ request()->is('admin/booking/list') ? 'active' : '' }}">
                    <i class="fa fa-book"></i>
                    <span>Booking</span>
                </a>
                <ul class="sub">
                    <li  class="{{ request()->is('admin/booking/list') ? 'active' : '' }}"><a  href="{{ route('admin.booking.manage') }}">Manage Booking</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="{{ request()->is('admin/car/lists','admin/car/brand') ? 'active' : '' }}">
                    <i class="fas fa-car"></i>
                    <span>Cars</span>
                </a>
                <ul class="sub">
                    <li  class="{{ request()->is('admin/car/brand') ? 'active' : '' }}"><a  href="{{ route('admin.car.brand.manage') }}">Car Brand</a></li>
                    <li  class="{{ request()->is('admin/car/lists') ? 'active' : '' }}"><a  href="{{ route('admin.car.manage') }}">Car Manage</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="{{ request()->is('admin/driver/lists') ? 'active' : ''}}" >
                    <i class="fa fa-user"></i>
                    <span>Drivers</span>
                </a>
                <ul class="sub">
                    <li class="{{ request()->is('admin/driver/lists') ? 'active' : ''}}"><a  href="{{ route('admin.driver.list') }}">Manage Drivers</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;"class="{{ request()->is('admin/insurance/lists') ? 'active' : ''}}" >
                    <i class="fas fa-car-crash" ></i>
                    <span>Insurance</span>
                </a>
                <ul class="sub">
                    <li class="{{ request()->is('admin/insurance/lists') ? 'active' : ''}}"><a  href="{{ route('admin.insurance.list') }}">Manage Insurance</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;"  class="{{ request()->is('admin/payment/lists') ? 'active' : '' }}">
                    <i class="fab fa-cc-amazon-pay"></i>
                    <span>Payments</span>
                </a>
                <ul class="sub">
                    <li class="{{ request()->is('admin/payment/lists') ? 'active' : '' }}"><a  href="{{ route('admin.payment.list') }}"> Payments History</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="{{ request()->is('admin/customerMessage/lists') ? 'active' : ''}}" >
                    <i class="fas fa-id-card"></i></i>
                    <span>Customer Message</span>
                </a>
                <ul class="sub">
                    <li class="{{ request()->is('admin/customerMessage/lists') ? 'active' : ''}}"><a  href="{{ route('admin.customerMessage.list') }}">Manage Message</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;"  class="{{ request()->is('admin/testimonials/lists') ? 'active' : ''}}">
                    <i class="fas fa-cloud"></i></i>
                    <span>Testimonials</span>
                </a>
                <ul class="sub">
                    <li class="{{ request()->is('admin/testimonials/lists') ? 'active' : ''}}"><a  href="{{ route('admin.testimonials.list') }}">Manage Testimonials</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;"   class="{{ request()->is('admin/report/booking', 'admin/report/payment') ? 'active' : ''}}">
                    <i class="fas fa-atlas"></i>
                    <span>Reports</span>
                </a>
                <ul class="sub">
                    <li  class="{{ request()->is('admin/report/booking') ? 'active' : ''}}"><a  href="{{ route('admin.report.booking') }}">Booking Reports</a></li>
                    <li  class="{{ request()->is('admin/report/payment') ? 'active' : ''}}"><a  href="{{ route('admin.report.payment') }}">Payment Reports</a></li>
                </ul>
            </li>






        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
