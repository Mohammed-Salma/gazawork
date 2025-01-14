<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>@yield('title', env('APP_NAME'))</title>

  <!-- Fontfaces CSS-->
  <link href="{{ asset('backcompany/css/font-face.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('backcompany/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('backcompany/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('backcompany/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="{{ asset('backcompany/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="{{ asset('backcompany/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('backcompany/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('backcompany/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('backcompany/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('backcompany/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('backcompany/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('backcompany/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="{{ asset('backcompany/css/theme.css') }}" rel="stylesheet" media="all">

  <style>
    .navbar-sidebar .navbar__list li a .fa-chevron-down{
      transition: all .3s ease;
      font-size: 12px;
    }

    .navbar-sidebar .navbar__list li a.open .fa-chevron-down{
      transform: rotate(180deg);
    }
  </style>

  @yield('css')

</head>

<body class="animsition">
  <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.html">
              <img src="{{ asset('backcompany/images/icon/logo.png') }}" alt="CoolAdmin" />
            </a>
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="index.html">Dashboard 1</a>
                </li>
                <li>
                  <a href="index2.html">Dashboard 2</a>
                </li>
                <li>
                  <a href="index3.html">Dashboard 3</a>
                </li>
                <li>
                  <a href="index4.html">Dashboard 4</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="chart.html">
                <i class="fas fa-chart-bar"></i>Charts</a>
            </li>
            <li>
              <a href="table.html">
                <i class="fas fa-table"></i>Tables</a>
            </li>
            <li>
              <a href="form.html">
                <i class="far fa-check-square"></i>Forms</a>
            </li>
            <li>
              <a href="calendar.html">
                <i class="fas fa-calendar-alt"></i>Calendar</a>
            </li>
            <li>
              <a href="map.html">
                <i class="fas fa-map-marker-alt"></i>Maps</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-copy"></i>Pages</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="login.html">Login</a>
                </li>
                <li>
                  <a href="register.html">Register</a>
                </li>
                <li>
                  <a href="forget-pass.html">Forget Password</a>
                </li>
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-desktop"></i>UI Elements</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="button.html">Button</a>
                </li>
                <li>
                  <a href="badge.html">Badges</a>
                </li>
                <li>
                  <a href="tab.html">Tabs</a>
                </li>
                <li>
                  <a href="card.html">Cards</a>
                </li>
                <li>
                  <a href="alert.html">Alerts</a>
                </li>
                <li>
                  <a href="progress-bar.html">Progress Bars</a>
                </li>
                <li>
                  <a href="modal.html">Modals</a>
                </li>
                <li>
                  <a href="switch.html">Switchs</a>
                </li>
                <li>
                  <a href="grid.html">Grids</a>
                </li>
                <li>
                  <a href="fontawesome.html">Fontawesome Icon</a>
                </li>
                <li>
                  <a href="typo.html">Typography</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- END HEADER MOBILE-->

     @include('company._sidebar')

    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">

              <div class="header-button ml-auto">
                <div class="noti-wrap">

                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <span class="quantity">3</span>
                    <div class="notifi-dropdown js-dropdown">
                      <div class="notifi__title">
                        <p>You have 3 Notifications</p>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c1 img-cir img-40">
                          <i class="zmdi zmdi-email-open"></i>
                        </div>
                        <div class="content">
                          <p>You got a email notification</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c2 img-cir img-40">
                          <i class="zmdi zmdi-account-box"></i>
                        </div>
                        <div class="content">
                          <p>Your account has been blocked</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c3 img-cir img-40">
                          <i class="zmdi zmdi-file-text"></i>
                        </div>
                        <div class="content">
                          <p>You got a new file</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__footer">
                        <a href="#">All notifications</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu">
                    <div class="image">
                      <img src="{{ asset('backcompany/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                    </div>
                    <div class="content">
                      <a class="js-acc-btn" href="#">john doe</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="info clearfix">
                        <div class="image">
                          <a href="#">
                            <img src="{{ asset('backcompany/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                          </a>
                        </div>
                        <div class="content">
                          <h5 class="name">
                            <a href="#">john doe</a>
                          </h5>
                          <span class="email">johndoe@example.com</span>
                        </div>
                      </div>
                      <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-account"></i>Account</a>
                        </div>

                      </div>
                      <div class="account-dropdown__footer">
                        <a href="#">
                          <i class="zmdi zmdi-power"></i>Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- END HEADER DESKTOP-->

      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">


               @yield('content')


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTAINER-->

  </div>

  <!-- Jquery JS-->
  <script src="{{ asset('backcompany/vendor/jquery-3.2.1.min.js') }}"></script>
  <!-- Bootstrap JS-->
  <script src="{{ asset('backcompany/vendor/bootstrap-4.1/popper.min.js') }}"></script>
  <script src="{{ asset('backcompany/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
  <!-- Vendor JS       -->
  <script src="{{ asset('backcompany/vendor/slick/slick.min.js') }}">
  </script>
  <script src="{{ asset('backcompany/vendor/wow/wow.min.js') }}"></script>
  <script src="{{ asset('backcompany/vendor/animsition/animsition.min.js') }}"></script>
  <script src="{{ asset('backcompany/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
  </script>
  <script src="{{ asset('backcompany/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('backcompany/vendor/counter-up/jquery.counterup.min.js') }}">
  </script>
  <script src="{{ asset('backcompany/vendor/circle-progress/circle-progress.min.js') }}"></script>
  <script src="{{ asset('backcompany/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('backcompany/vendor/chartjs/Chart.bundle.min.js') }}"></script>
  <script src="{{ asset('backcompany/vendor/select2/select2.min.js') }}">
  </script>

  <!-- Main JS-->
  <script src="{{ asset('backcompany/js/main.js') }}"></script>
  @yield('js')

</body>

</html>
<!-- end document-->
