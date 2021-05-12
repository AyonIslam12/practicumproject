<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <i class="fa fa-bars"></i>
    </div>
  <!--logo start-->
  <a href="{{ route('admin.dashboard') }}" class="logo">Car<span>Rental</span></a>
  <!--logo end-->

  <div class="top-nav ">
      <!--search & user info start-->
      <ul class="nav pull-right top-menu">
          <li>
              <input type="text" class="form-control search" placeholder="Search">
          </li>
          <!-- user login dropdown start-->
          <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <img width="40px" alt="" src="{{ asset('uploads/users/ayon.jpg') }}" class=" image img-fluid rounded-circle">
                  <span class="username text-success font-weight-bolder">{{ Str::ucfirst(auth()->user()->name) }}</span>
                  <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended logout dropdown-menu-right">
                  <div class="log-arrow-up"></div>

                 <div class="text-center">
                    <li >
                        <a href="{{ route('admin.profile') }}" >
                            <i class=" fa fa-suitcase fa-2x text-info"></i><span class="text-info" style="font-size: 15px;"> Profile</span>
                        </a>
                    </li>
                 </div>
                  <li>
                      <a href="{{ route('admin.logout') }}"><i class="fa fa-key"></i> Log Out</a>
                </li>
              </ul>
          </li>

          <!-- user login dropdown end -->
      </ul>
      <!--search & user info end-->
  </div>
</header>
