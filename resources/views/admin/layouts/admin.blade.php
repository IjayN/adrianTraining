<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="{{asset('assets/logo.png')}}">

    <title>Adrian ||Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.css')}}">

	<!-- theme style -->
	<link rel="stylesheet" href="{{asset('assets/css/master_style.css')}}">

	<!-- NeoX Admin skins -->
	<link rel="stylesheet" href="{{asset('assets/css/skins/_all-skins.css')}}">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
	<!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
	<![endif]-->


  </head>

<body class="hold-transition skin-purple-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- mini logo -->
		  {{--<b class="logo-mini">--}}
			  {{--<span class="light-logo"><img src="{{asset('assets/logo.png')}}" alt="logo"></span>--}}
			  {{--<span class="dark-logo"><img src="{{asset('assets/logo.png')}}" alt="logo"></span>--}}
		  {{--</b>--}}
		  <!-- logo-->
		  <span class="logo-lg">
			  <img src="{{asset('assets/logo.png')}}" alt="logo" class="light-logo">
			  {{--<img src="{{asset('assets/logo.png')}}" alt="logo" class="dark-logo">--}}
		  </span>
		</a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- Notifications -->
		  <!-- User Account-->
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="iconsmind-Gears-2"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
          <li class="">
          <a href="{{url('admin/dashboard')}}">
              <i class="iconsmind-Dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
          </li>
          <li class="">
          <a href="{{url('facilitator/add')}}">
              <i class="fa fa-users"></i> <span>Add Facilitator</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
          </li>
          <li class="">
          <a href="{{url('facilitator/manage')}}">
              <i class="iconsmind-Building"></i> <span>Manage Facilitator</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
          </li>
          <li class="">
          <a href="{{url('/logout')}}">
              <i class="iconsmind-Building"></i> <span>Logout</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
          </li>



        <li class="nav-devider"></li>

        <li class="header nav-small-cap">USER INTERFACE</li>
  </ul>
    </section>
  </aside>
@yield('content')
  <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Purchase Now</a>
              </li>
            </ul>
        </div>
          &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-light">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                    <p>Will be July 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-user bg-yellow"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                    <p>New Email : jhone_doe@demo.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                    <p>disha@demo.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Code Change</h4>

                    <p>Execution time 15 Days</p>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Web Design
                    <span class="label label-danger pull-right">40%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Update Data
                    <span class="label label-success pull-right">75%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 75%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Order Process
                    <span class="label label-warning pull-right">89%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Development
                    <span class="label label-primary pull-right">72%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

          </div>
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
          <!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">
                <input type="checkbox" id="report_panel" class="chk-col-grey" >
                <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

                <p>
                  general settings information
                </p>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <input type="checkbox" id="allow_mail" class="chk-col-grey" >
                <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

                <p>
                  Other sets of options are available
                </p>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <input type="checkbox" id="expose_author" class="chk-col-grey" >
                <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div>
              <!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <input type="checkbox" id="show_me_online" class="chk-col-grey" >
                <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <input type="checkbox" id="off_notifications" class="chk-col-grey" >
                <label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
                  Delete chat history
                </label>
              </div>
              <!-- /.form-group -->
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
      </aside>
      <!-- /.control-sidebar -->

      <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->



        <!-- jQuery 3 -->
        <script src="{{asset('assets/vendor_components/jquery/dist/jquery.js')}}"></script>

        <!-- popper -->
        <script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

        <!-- Bootstrap 4.0-->
        <script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>

        <!-- Slimscroll -->
        <script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

        <!-- FastClick -->
        <script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
        <script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>

        <!-- FLOT CHARTS -->
        <script src="{{asset('assets/vendor_components/Flot/jquery.flot.js')}}"></script>
        <script src="{{asset('assets/vendor_components/Flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('assets/vendor_components/Flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('assets/vendor_components/Flot/jquery.flot.categories.js')}}"></script>

        <!-- NeoX Admin App -->
        <script src="{{asset('assets/js/template.js')}}"></script>

        <!-- NeoX Admin dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('assets/js/pages/dashboard2.js')}}"></script>

        <!-- NeoX Admin for demo purposes -->
        <script src="{{asset('assets/js/demo.js')}}"></script>

    </body>

    <!-- Mirrored from neox-admin-templates.multipurposethemes.com/src/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 11:33:06 GMT -->
    </html>
