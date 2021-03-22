<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="{{ request()->is('admin') ? 'active' : ''}}" href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Booking</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Manage Booking</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fas fa-car"></i>
                    <span>Cars</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Manage Cars</a></li>
                    <li><a  href="boxed_page.html">Add Car</a></li>
                </ul>
            </li>
            <li class="sub-menu" >
                <a href="javascript:;"  class="{{ request()->is('admin/customer/lists','admin/customer/create') ? 'active' : ''}}">
                    <i class="fa fa-user"></i>
                    <span>Customers</span>
                </a>
                <ul class="sub">
                    <li class="{{ request()->is('admin/customer/lists') ? 'active' : ''}}"><a   href="{{ route('admin.customer.manage') }}">All Customers</a></li>
                    <li  class="{{ request()->is('admin/customer/create') ? 'active' : ''}}" ><a   href="{{ route('admin.customer.create') }}">Add Customers</a></li>

                </ul>
                    </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-user"></i>
                    <span>Drivers</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Manage Drivers</a></li>
                    <li><a  href="boxed_page.html">Add Driver</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fab fa-discourse"></i>
                    <span>Offers</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Manage Offers</a></li>
                    <li><a  href="boxed_page.html">Add Offers</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fas fa-car-crash"></i>
                    <span>Insurance</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Manage Insurance</a></li>
                    <li><a  href="boxed_page.html">Add Insurance</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fab fa-cc-amazon-pay"></i>
                    <span>Payments</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Manage Payments</a></li>
                    <li><a  href="boxed_page.html">Add Payment</a></li>
                </ul>
            </li>






        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
