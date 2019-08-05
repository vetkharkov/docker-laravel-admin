<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('fab-admin/images/favicon.ico') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('fab-admin/assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('fab-admin/main/css/bootstrap-extend.css') }}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('fab-admin/main/css/master_style.css') }}">

    <!-- Fab Admin skins -->
    <link rel="stylesheet" href="{{ asset('fab-admin/main/css/skins/_all-skins.css') }}">

    <!-- Vector CSS -->
    <link href="{{ asset('fab-admin/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />

    <!-- Morris charts -->
    <link rel="stylesheet" href="{{ asset('fab-admin/assets/vendor_components/morris.js/morris.css') }}">

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="logo">
            <!-- mini logo -->
            <b class="logo-mini">
                <span class="light-logo"><img src="{{ asset('fab-admin/images/logo-light.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('fab-admin/images/logo-dark.png') }}" alt="logo"></span>
            </b>
            <!-- logo-->
            <span class="logo-lg">
		  <img src="{{ asset('fab-admin/images/logo-light-text.png') }}" alt="logo" class="light-logo">
	  	  <img src="{{ asset('fab-admin/images/logo-dark-text.png') }}" alt="logo" class="dark-logo">
	  </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="search-box">
                        <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
                        <form class="app-search" style="display: none;">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>

                    <!-- Messages -->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-email"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <li class="header">You have 5 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu inner-content-div">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ asset('fab-admin/images/user2-160x160.jpg') }}" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Lorem Ipsum
                                                    <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                                </h4>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ asset('fab-admin/images/user3-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Nullam tempor
                                                    <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                                </h4>
                                                <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ asset('fab-admin/images/user4-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Proin venenatis
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ asset('fab-admin/images/user3-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Praesent suscipit
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ asset('fab-admin/images/user4-128x128.jpg') }}" class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Donec tempor
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See all e-Mails</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <li class="header">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu inner-content-div">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks-->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-message"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <li class="header">You have 6 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu inner-content-div">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                                <small class="pull-right">30%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 30%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">30% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Vestibulum nec ligula
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Donec id leo ut ipsum
                                                <small class="pull-right">70%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-light-blue" style="width: 70%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Praesent vitae tellus
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 40%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Nam varius sapien
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Nunc fringilla
                                                <small class="pull-right">90%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-primary" style="width: 90%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ '/uploads/avatars/' . Auth::user()->avatar }}" class="user-image rounded-circle" alt="User Image">
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ '/uploads/avatars/' . Auth::user()->avatar }}" class="float-left rounded-circle" alt="User Image">
                                <p>
                                    {{ Auth::user()->name }}
                                    <small class="mb-5">{{ Auth::user()->email }}</small>
                                    <a href="{{ route('user.show', Auth::user()->id) }}" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row no-gutters">
                                    <div class="col-12 text-left">
                                        <a href="{{ route('user.show', Auth::user()->id) }}"><i class="ion ion-person"></i> My Profile</a>
                                    </div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                                    </div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-settings"></i> Setting</a>
                                    </div>
                                    <div role="separator" class="divider col-12"></div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ti-settings"></i> Account Setting</a>
                                    </div>
                                    <div role="separator" class="divider col-12"></div>
                                    <div class="col-12 text-left">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
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
                <li class="user-profile treeview">
                    <a href="{{ route('home') }}">
                        <img src="{{ '/uploads/avatars/' . Auth::user()->avatar }}" alt="user">
                        <span>{{ Auth::user()->name }}</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('user.show', Auth::user()->id) }}"><i class="fa fa-user mr-5"></i>My Profile </a></li>
                        <li><a href="javascript:void()"><i class="fa fa-photo mr-5"></i>Photo</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off mr-5"></i> Logout
                        </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li>
                <li class="header nav-small-cap">PERSONAL</li>
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>App</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/app/app-chat.html"><i class="fa fa-circle-thin"></i>Chat app</a></li>
                        <li><a href="pages/app/app-contact.html"><i class="fa fa-circle-thin"></i>Contact / Employee</a></li>
                        <li><a href="pages/app/app-ticket.html"><i class="fa fa-circle-thin"></i>Support Ticket</a></li>
                        <li><a href="pages/app/calendar.html"><i class="fa fa-circle-thin"></i>Calendar</a></li>
                        <li><a href="pages/app/profile.html"><i class="fa fa-circle-thin"></i>Profile</a></li>
                        <li><a href="pages/app/userlist-grid.html"><i class="fa fa-circle-thin"></i>Userlist Grid</a></li>
                        <li><a href="pages/app/userlist.html"><i class="fa fa-circle-thin"></i>Userlist</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/mailbox/mailbox.html"><i class="fa fa-circle-thin"></i>Inbox</a></li>
                        <li><a href="pages/mailbox/compose.html"><i class="fa fa-circle-thin"></i>Compose</a></li>
                        <li><a href="pages/mailbox/read-mail.html"><i class="fa fa-circle-thin"></i>Read</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/UI/badges.html"><i class="fa fa-circle-thin"></i>Badges</a></li>
                        <li><a href="pages/UI/border-utilities.html"><i class="fa fa-circle-thin"></i>Border</a></li>
                        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-thin"></i>Buttons</a></li>
                        <li><a href="pages/UI/bootstrap-switch.html"><i class="fa fa-circle-thin"></i>Bootstrap Switch</a></li>
                        <li><a href="pages/UI/cards.html"><i class="fa fa-circle-thin"></i>User Card</a></li>
                        <li><a href="pages/UI/color-utilities.html"><i class="fa fa-circle-thin"></i>Color</a></li>
                        <li><a href="pages/UI/date-paginator.html"><i class="fa fa-circle-thin"></i>Date Paginator</a></li>
                        <li><a href="pages/UI/dropdown.html"><i class="fa fa-circle-thin"></i>Dropdown</a></li>
                        <li><a href="pages/UI/dropdown-grid.html"><i class="fa fa-circle-thin"></i>Dropdown Grid</a></li>
                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-thin"></i>General</a></li>
                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-thin"></i>Icons</a></li>
                        <li><a href="pages/UI/media-advanced.html"><i class="fa fa-circle-thin"></i>Advanced Medias</a></li>
                        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-thin"></i>Modals</a></li>
                        <li><a href="pages/UI/nestable.html"><i class="fa fa-circle-thin"></i>Nestable</a></li>
                        <li><a href="pages/UI/notification.html"><i class="fa fa-circle-thin"></i>Notification</a></li>
                        <li><a href="pages/UI/portlet-draggable.html"><i class="fa fa-circle-thin"></i>Draggable Portlets</a></li>
                        <li><a href="pages/UI/ribbons.html"><i class="fa fa-circle-thin"></i>Ribbons</a></li>
                        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-thin"></i>Sliders</a></li>
                        <li><a href="pages/UI/sweatalert.html"><i class="fa fa-circle-thin"></i>Sweet Alert</a></li>
                        <li><a href="pages/UI/tab.html"><i class="fa fa-circle-thin"></i>Tabs</a></li>
                        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-thin"></i>Timeline</a></li>
                        <li><a href="pages/UI/timeline-horizontal.html"><i class="fa fa-circle-thin"></i>Horizontal Timeline</a></li>
                    </ul>
                </li>
                <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                        <span>Widgets</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/widgets/blog.html"><i class="fa fa-circle-thin"></i>Blog</a></li>
                        <li><a href="pages/widgets/chart.html"><i class="fa fa-circle-thin"></i>Chart</a></li>
                        <li><a href="pages/widgets/list.html"><i class="fa fa-circle-thin"></i>List</a></li>
                        <li><a href="pages/widgets/social.html"><i class="fa fa-circle-thin"></i>Social</a></li>
                        <li><a href="pages/widgets/statistic.html"><i class="fa fa-circle-thin"></i>Statistic</a></li>
                        <li><a href="pages/widgets/weather.html"><i class="fa fa-circle-thin"></i>Weather</a></li>
                        <li><a href="pages/widgets/widgets.html"><i class="fa fa-circle-thin"></i>Widgets</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Layout Options</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-thin"></i>Boxed</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-thin"></i>Fixed</a></li>
                        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-thin"></i>Collapsed Sidebar</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-square-o"></i>
                        <span>Box</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/box/advanced.html"><i class="fa fa-circle-thin"></i>Advanced</a></li>
                        <li><a href="pages/box/basic.html"><i class="fa fa-circle-thin"></i>Basic</a></li>
                        <li><a href="pages/box/color.html"><i class="fa fa-circle-thin"></i>Color</a></li>
                        <li><a href="pages/box/group.html"><i class="fa fa-circle-thin"></i>Group</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Charts</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-thin"></i>ChartJS</a></li>
                        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-thin"></i>Flot</a></li>
                        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-thin"></i>Inline charts</a></li>
                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-thin"></i>Morris</a></li>
                        <li><a href="pages/charts/peity.html"><i class="fa fa-circle-thin"></i>Peity</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-thin"></i>Advanced Elements</a></li>
                        <li><a href="pages/forms/code-editor.html"><i class="fa fa-circle-thin"></i>Code Editor</a></li>
                        <li><a href="pages/forms/editor-markdown.html"><i class="fa fa-circle-thin"></i>Markdown</a></li>
                        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-thin"></i>Editors</a></li>
                        <li><a href="pages/forms/form-validation.html"><i class="fa fa-circle-thin"></i>Form Validation</a></li>
                        <li><a href="pages/forms/form-wizard.html"><i class="fa fa-circle-thin"></i>Form Wizard</a></li>
                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-thin"></i>General Elements</a></li>
                        <li><a href="pages/forms/mask.html"><i class="fa fa-circle-thin"></i>Formatter</a></li>
                        <li><a href="pages/forms/xeditable.html"><i class="fa fa-circle-thin"></i>Xeditable Editor</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-thin"></i>Simple tables</a></li>
                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-thin"></i>Data tables</a></li>
                        <li><a href="pages/tables/editable-tables.html"><i class="fa fa-circle-thin"></i>Editable Tables</a></li>
                        <li><a href="pages/tables/table-color.html"><i class="fa fa-circle-thin"></i>Table Color</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pages/email/index.html">
                        <i class="fa fa-envelope-open-o"></i> <span>Emails</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                </li>
                <li class="header nav-small-cap">EXTRA COMPONENTS</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-map"></i> <span>Map</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/map/map-google.html"><i class="fa fa-circle-thin"></i>Google Map</a></li>
                        <li><a href="pages/map/map-vector.html"><i class="fa fa-circle-thin"></i>Vector Map</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-plug"></i> <span>Extension</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/extension/fullscreen.html"><i class="fa fa-circle-thin"></i>Fullscreen</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file"></i> <span>Sample Pages</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/samplepage/blank.html"><i class="fa fa-circle-thin"></i>Blank</a></li>
                        <li><a href="pages/samplepage/coming-soon.html"><i class="fa fa-circle-thin"></i>Coming Soon</a></li>
                        <li><a href="pages/samplepage/custom-scroll.html"><i class="fa fa-circle-thin"></i>Custom Scrolls</a></li>
                        <li><a href="pages/samplepage/faq.html"><i class="fa fa-circle-thin"></i>FAQ</a></li>
                        <li><a href="pages/samplepage/gallery.html"><i class="fa fa-circle-thin"></i>Gallery</a></li>
                        <li><a href="pages/samplepage/invoice.html"><i class="fa fa-circle-thin"></i>Invoice</a></li>
                        <li><a href="pages/samplepage/lightbox.html"><i class="fa fa-circle-thin"></i>Lightbox Popup</a></li>
                        <li><a href="pages/samplepage/pace.html"><i class="fa fa-circle-thin"></i>Pace</a></li>
                        <li><a href="pages/samplepage/pricing.html"><i class="fa fa-circle-thin"></i>Pricing</a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-circle-thin"></i>Authentication
                                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/samplepage/login.html"><i class="fa fa-circle"></i>Login</a></li>
                                <li><a href="pages/samplepage/register.html"><i class="fa fa-circle"></i>Register</a></li>
                                <li><a href="pages/samplepage/lockscreen.html"><i class="fa fa-circle"></i>Lockscreen</a></li>
                                <li><a href="pages/samplepage/user-pass.html"><i class="fa fa-circle"></i>Recover password</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-circle-thin"></i>Error Pages
                                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/samplepage/404.html"><i class="fa fa-circle"></i>404</a></li>
                                <li><a href="pages/samplepage/500.html"><i class="fa fa-circle"></i>500</a></li>
                                <li><a href="pages/samplepage/maintenance.html"><i class="fa fa-circle"></i>Maintenance</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Level One</a></li>
                        <li class="treeview">
                            <a href="#">Level One
                                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Level Two</a></li>
                                <li class="treeview">
                                    <a href="#">Level Two
                                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#">Level Three</a></li>
                                        <li><a href="#">Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Level One</a></li>
                    </ul>
                </li>

            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        @yield('content-header')

        <!-- Main content -->
        @yield('dashboard')
        <!-- /.content -->

        @yield('content')

    </div>
    <!-- /.content-wrapper -->

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
        &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
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
                            <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                                <p>Will be July 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-warning"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                                <p>New Email : jhone_doe@demo.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-info"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                                <p>disha@demo.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-success"></i>

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

{{--<main class="py-4">--}}
    {{--@yield('content')--}}
{{--</main>--}}

<!-- jQuery 3 -->
<script src="{{ asset('fab-admin/assets/vendor_components/jquery/dist/jquery.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('fab-admin/assets/vendor_components/jquery-ui/jquery-ui.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="{{ asset('fab-admin/assets/vendor_components/popper/dist/popper.min.js') }}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ asset('fab-admin/assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

<!-- ChartJS -->
<script src="{{ asset('fab-admin/assets/vendor_components/chart.js-master/Chart.min.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ asset('fab-admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- FastClick -->
<script src="{{ asset('fab-admin/assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>

<!-- peity -->
<script src="{{ asset('fab-admin/assets/vendor_components/jquery.peity/jquery.peity.js') }}"></script>

<!-- Morris.js charts -->
<script src="{{ asset('fab-admin/assets/vendor_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('fab-admin/assets/vendor_components/morris.js/morris.min.js') }}"></script>

<!-- Fab Admin App -->
<script src="{{ asset('fab-admin/main/js/template.js') }}"></script>

<!-- Fab Admin dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('fab-admin/main/js/pages/dashboard.js') }}"></script>

<!-- Fab Admin for demo purposes -->
<script src="{{ asset('fab-admin/main/js/demo.js') }}"></script>

<!-- Vector map JavaScript -->
<script src="{{ asset('fab-admin/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('fab-admin/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('fab-admin/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-us-aea-en.js') }}"></script>

@yield('js')

</body>
</html>
