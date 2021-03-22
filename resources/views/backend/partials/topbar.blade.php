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
                  <img alt="" src="{{ asset('admin_assets/img/avatar1_small.jpg') }}" class=" image img-fluid">
                  <span class="username">Jhon Doue</span>
                  <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended logout dropdown-menu-right">
                  <div class="log-arrow-up"></div>
                  <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                  <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                  <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
              </ul>
          </li>

          <!-- user login dropdown end -->
      </ul>
      <!--search & user info end-->
  </div>
</header>
