<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin-Blog! | </title>

  <!-- Bootstrap -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('css/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('css/green.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

  <!-- bootstrap-progressbar -->
  <link href="{{asset('css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('css/jqvmap.min.css')}}" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="{{asset('css/daterangepicker.css')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">

  <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
  <!-- Latest compiled and minified CSS & JS -->

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/meo.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Meo Blog</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li><a href="index2.html">Dashboard2</a></li>
                    <li><a href="index3.html">Dashboard3</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form.html">General Form</a></li>
                    <li><a href="form_advanced.html">Advanced Components</a></li>
                    <li><a href="form_validation.html">Form Validation</a></li>
                    <li><a href="form_wizards.html">Form Wizard</a></li>
                    <li><a href="form_upload.html">Form Upload</a></li>
                    <li><a href="form_buttons.html">Form Buttons</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="general_elements.html">General Elements</a></li>
                    <li><a href="media_gallery.html">Media Gallery</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="glyphicons.html">Glyphicons</a></li>
                    <li><a href="widgets.html">Widgets</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="inbox.html">Inbox</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.create') }}">Add list</a></li>
                    <li><a href="{{ route('admin.show') }}">Lists</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="chartjs.html">Chart JS</a></li>
                    <li><a href="chartjs2.html">Chart JS2</a></li>
                    <li><a href="morisjs.html">Moris JS</a></li>
                    <li><a href="echarts.html">ECharts</a></li>
                    <li><a href="other_charts.html">Other Charts</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="e_commerce.html">E-commerce</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="project_detail.html">Project Detail</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="profile.html">Profile</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="page_403.html">403 Error</a></li>
                    <li><a href="page_404.html">404 Error</a></li>
                    <li><a href="page_500.html">500 Error</a></li>
                    <li><a href="plain_page.html">Plain Page</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="#level1_1">Level One</a>
                      <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="level2.html">Level Two</a>
                          </li>
                          <li><a href="#level2_1">Level Two</a>
                          </li>
                          <li><a href="#level2_2">Level Two</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#level1_2">Level One</a>
                      </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/meo.jpg" alt="">MeoMeo
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li>
                      <div>  <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form></div>
                    </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->


        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           <i> Zent Group-Acedemy <a href="https://colorlib.com">Admin</a></i>
         </div>
         <div class="clearfix"></div>
       </footer>
       <!-- /footer content -->
     </div>
   </div>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

   <!-- jQuery -->
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <!-- Bootstrap -->
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <!-- FastClick -->
   <script src="{{asset('js/fastclick.js')}}"></script>
   <!-- NProgress -->
   <script src="{{asset('js/nprogress.js')}}"></script>
   <!-- Chart.js -->
   <script src="{{asset('js/Chart.min.js')}}"></script>
   <!-- gauge.js -->
   <script src="{{asset('js/gauge.min.js')}}"></script>
   <!-- bootstrap-progressbar -->
   <script src="{{asset('js/bootstrap-progressbar.min.js')}}"></script>
   <!-- iCheck -->
   <script src="{{asset('js/icheck.min.js')}}"></script>
   <!-- Skycons -->
   <script src="{{asset('js/skycons.js')}}"></script>
   <!-- Flot -->
   <script src="{{asset('js/jquery.flot.js')}}"></script>
   <script src="{{asset('js/jquery.flot.pie.js')}}"></script>
   <script src="{{asset('js/jquery.flot.time.js')}}"></script>
   <script src="{{asset('js/jquery.flot.stack.js')}}"></script>
   <script src="{{asset('js/jquery.flot.resize.js')}}"></script>
   <!-- Flot plugins -->
   <script src="{{asset('js/jquery.flot.orderBars.js')}}"></script>
   <script src="{{asset('js/jquery.flot.spline.min.js')}}"></script>
   <script src="{{asset('js/curvedLines.js')}}"></script>
   <!-- DateJS -->
   <script src="{{asset('js/date.js')}}"></script>
   <!-- JQVMap -->
   <script src="{{asset('js/jquery.vmap.js')}}"></script>
   <script src="{{asset('js/jquery.vmap.world.js')}}"></script>
   <script src="{{asset('js/jquery.vmap.sampledata.js')}}"></script>
   <!-- bootstrap-daterangepicker -->
   <script src="{{asset('js/moment.min.js')}}"></script>
   <script src="{{asset('js/daterangepicker.js')}}"></script>

   <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
   <script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
   <script src="{{asset('js/buttons.bootstrap.min.js')}}"></script>
   <script src="{{asset('js/buttons.flash.min.js')}}"></script>
   <script src="{{asset('js/buttons.html5.min.js')}}"></script>
   <script src="{{asset('js/buttons.print.min.js')}}"></script>
   <script src="{{asset('js/dataTables.fixedHeader.min.js')}}"></script>
   <script src="{{asset('js/dataTables.keyTable.min.js')}}"></script>
   <script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
   <script src="{{asset('js/responsive.bootstrap.js')}}"></script>
   <script src="{{asset('js/dataTables.scroller.min.js')}}"></script>

   <script src="{{asset('js/jszip.min.js')}}"></script>
   <script src="{{asset('js/pdfmake.min.js')}}"></script>
   <script src="{{asset('js/vfs_fonts.js')}}"></script>
   <!-- Custom Theme Scripts -->
   <script src="{{asset('js/custom.min.js')}}"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   @yield('script')
 </body>
 </html>
