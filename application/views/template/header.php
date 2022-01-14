<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>assests/style.css">
  <link rel="shortcut icon" type="image/jpj" href="<?php echo base_url() ?>assests/images/Dha.jpg">
  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assests/file/style.css">

<script>/*** add active class and stay opened when selected ***/
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    if (this.href) {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }
}).addClass('active');

// for the treeview
$('ul.nav-treeview a').filter(function() {
    if (this.href) {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');</script>

 
<link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
<title><?php echo $page_title ?></title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="<?php echo base_url() ?>assests/#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>logout" class="nav-link">Logout</a>
      </li>
      
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>assests/index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assests/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PHP Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- SidebarSearch Form -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          
          <li class="nav-item menu-open">
            <a href="<?php echo base_url()."Home";?>" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
     
          </li>
        
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Definition
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Product
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()."add-product";?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                      <p>AddProduct</p>
                    </a> 
                  </li>
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url()."add-subproduct";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add subProduct</p>
                    </a>
                  </li> -->
                  <li class="nav-item">
                    <a href="<?php echo base_url()."add-designation";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add designation</p>
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
        
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Branch
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()."add-branch";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Branch</p>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url()."add-rank";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Rank</p>
                    </a>
                  </li> -->
                  <li class="nav-item">
                    <a href="<?php echo base_url()."employee/add";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Employee</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."search-employee";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Search Employee</p>
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Rates
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url()."daily-rate";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daily Rates</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."fixed-rate";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Rates</p>
                    </a>
                  </li>
                  
                </ul>
             
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Order
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()."generalteabar";?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Tea Bar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()."generalforofficer";?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General for Officers</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Billing
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()."post-bill";?>" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>Post Bill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()."order-cancellation";?>" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>Order Cancellation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()."monthly-bill";?>" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>Monthly Bill</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                    <a href="<?php echo base_url()."print-monthlybill";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Print Monthly Bill</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."monthly-billsummary";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Monthly Bill Summary</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."product-consumption";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>product Consumption</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."employee-detailreport";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>employee detail Report</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."branchwise-report";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Branchwise Report</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."recieve-payment";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recieve Payment</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."outstanding-payment";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Outstanding Payment</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url()."daily-payment";?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Daily Recieve</p>
                    </a>
                  </li>
                  
            
                  
                </ul>
           </li> -->
   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
