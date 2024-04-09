<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Janine Rosales</title>
    <link rel="stylesheet" href={{asset("dashboard/assets/vendors/mdi/css/materialdesignicons.min.css")}} />
    <link rel="stylesheet" href={{asset("dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css")}} />
    <link rel="stylesheet" href={{asset("dashboard/assets/vendors/css/vendor.bundle.base.css")}} />
    <link rel="stylesheet" href={{asset("dashboard/assets/vendors/font-awesome/css/font-awesome.min.css")}} />
    <link rel="stylesheet" href={{asset("dashboard/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css")}} />
    <link rel="stylesheet" href={{asset("dashboard/assets/css/style.css")}}>
    <style>
    .brand-logo {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh; 
    
    }

    .centered-text {
      font-size: 30px; 
      color: #333;
      
    }
</style>

  </head>
  <body>
    
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <div class="brand-logo d-flex align-items-center justify-content-center">
            <div class="centered-text">
              <span class="styled-text">{{ strtoupper(Auth::User()->role) }}</span>
          </div>
        </div>
      </div>
      
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src={{asset("dashboard/assets/images/faces/prof.jpg")}} alt="profile"/>
                <span class="login-status online"></span>
              
              </div>
              
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">{{ strtoupper(Auth::User()->name) }}</span>
             
              </div>
              <span class="badge badge-danger text-white ml-3 rounded"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href ="{{route('users.index')}}" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
          <li class="nav-item">
            <a class="nav-link" href="{{route('abouts.index')}}" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">About</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('skills.index')}}" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Skills</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('educationals.index')}}" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Educational Attainment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('experiences.index')}}" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Experiences</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('webinars.index')}}" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Webinar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blogs.index')}}" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts.index')}}" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Contact</span>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                  <p class="text-black">Notification</p>
                </div>
                <ul class="mt-4 pl-0">
                  <li>Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>  
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src={{asset("dashboard/assets/images/logo-mini.svg")}} alt="logo" /></a>
             <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize"> 
              <i class="mdi mdi-menu"></i>
            </button>


            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src={{asset("dashboard/assets/images/faces/prof.jpg")}} />
                  <span class="profile-name">{{ strtoupper(Auth::User()->name) }}</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
           <a class="btn btn-outline-primary mx-3 mt-2 d-block" href="{{ route('logout') }}"  onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                    </form>
              
                </div>
              </li>
            </ul>
            
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
      
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              @yield('table')
              
                  
        </div>              
                       
    
      </div>
    </div>
    <script src={{asset("dashboard/assets/vendors/js/vendor.bundle.base.js")}}></script>
    <script src={{asset("dashboard/assets/vendors/chart.js/Chart.min.js")}}></script>
    <script src={{asset("dashboard/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js")}}></script>
    <script src={{asset("dashboard/assets/vendors/flot/jquery.flot.js")}}></script>
    <script src={{asset("dashboard/assets/vendors/flot/jquery.flot.resize.js")}}></script>
    <script src={{asset("dashboard/assets/vendors/flot/jquery.flot.categories.js")}}></script>
    <script src={{asset("dashboard/assets/vendors/flot/jquery.flot.fillbetween.js")}}></script>
    <script src={{asset("dashboard/assets/vendors/flot/jquery.flot.stack.js")}}></script>
    <script src={{asset("dashboard/assets/vendors/flot/jquery.flot.pie.js")}}></script>
    <script src={{asset("dashboard/assets/js/off-canvas.js")}}></script>
    <script src={{asset("dashboard/assets/js/hoverable-collapse.js")}}></script>
    <script src={{asset("dashboard/assets/js/misc.js")}}></script>
    <script src={{asset("dashboard/assets/js/dashboard.js")}}></script>
  </body>
</html>

