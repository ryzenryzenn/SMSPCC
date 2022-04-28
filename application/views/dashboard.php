<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="SMSPCC Dashboard"">
    <meta name="keywords" content="SMSPCC Dashboard">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="<?php echo base_url();?>public/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>public/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/app-assets/css/pages/app-invoice-list.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/style.css">
    <!-- END: Custom CSS-->

    
</head>
<!-- END: Head-->

<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li>
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">Admin</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="<?php echo base_url();?>public/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="#"><i class="mr-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="<?php echo site_url('My_controller/logout');?>"><i class="mr-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
      
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">SMSPCC</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
      
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>My_controller/year"><i data-feather="cloud"></i><span class="menu-title text-truncate" data-i18n="Email">Year List</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span class="menu-title text-truncate" data-i18n="Chat">Subject List</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>My_controller/section"><i data-feather="clipboard"></i><span class="menu-title text-truncate" data-i18n="Todo">Sections</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>My_controller/faculty"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Todo">Faculty List</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Schedule</span></a>
                </li>
               
            </ul>
        
            
               
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row match-height">
                        <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Dashboards</h4>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-primary mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="briefcase" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">4</h4>
                                                    <p class="card-text font-small-3 mb-0">Teachers Today</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-info mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="users" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0"><?php echo $query;?></h4>
                                                    <p class="card-text font-small-3 mb-0">Faculty Teachers</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->

                    </div>

                    <!-- List DataTable -->
                    <section id="responsive-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Students Report</h4>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Student Name</th>
                                                <th>Faculty</th>
                                                <th>Subject</th>
                                                <th>Time In</th>
                                                <th>Time Out</th>
                                              
                                            </tr>
                                        </thead>
                                     
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Responsive Datatable -->

                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="ml-25" href="" target="_blank">SMSPCC</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span>
            
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url();?>public/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url();?>public/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- <script src="<?php echo base_url();?>public/app-assets/vendors/js/extensions/toastr.min.js"></script>-->
    <script src="<?php echo base_url();?>public/app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="<?php echo base_url();?>public/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>public/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>public/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>public/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>public/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url();?>public/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url();?>public/app-assets/js/core/app.js"></script>
    

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>