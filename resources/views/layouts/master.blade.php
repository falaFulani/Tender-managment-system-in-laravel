<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>ICTA | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/css/app.css">
  <script src="https://kit.fontawesome.com/fbc7356c8b.js" crossorigin="anonymous"></script>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id ="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
            
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="./img/ictboardlogo.jpg" alt="Hotel Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ICTA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><b> {{ Auth::user()->name }}</b> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             
               <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
            <i class="fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-folder-open"></i>

              <p>
                Tenders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <router-link to="/tenders" class="nav-link">
                <i class="far fa-circle"></i>
                  <p>All Tenders</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/Awardedtender" class="nav-link">
                <i class="fas fa-list-ol"></i>
                  <p>Awarded Tenders</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="closedTenders" class="nav-link">
                <i class="far fa-folder"></i>
                  <p>Closed Tenders</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/expairedTenders" class="nav-link">
                <i class="far fa-window-close"></i>
                  <p>Expired Tenders</p>
                </router-link>
              </li>
            </ul>
          </li>  
          <li class="nav-item">
                <router-link to="/projects" class="nav-link">
                <i class="fas fa-project-diagram"></i>
                  <p>Projects</p>
                </router-link>
              </li>
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-chart-bar"></i>

              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/Awardedtender" class="nav-link">
                <i class="fas fa-list-ol"></i>
                  <p>Awarded Tenders</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/projects" class="nav-link">
                <i class="fas fa-project-diagram"></i>
                  <p>Projects</p>
                </projects>
              </li>
              <li class="nav-item">
                <router-link to="/suppliers" class="nav-link">
                <i class="far fa-address-card"></i>
                  <p>Suppliers/Contrators</p>
                </router-link>
              </li>
            </ul>
          </li>  
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class="fa fa-cogs" aria-hidden="true"></i>

              <p>
                System Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/userManagement" class="nav-link">
                <i class="fas fa-user-friends"></i>
                  <p>Users Management</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/tenderManagement" class="nav-link">
                <i class="fas fa-briefcase"></i>
                  <p>Tender Management</p>
                </router-link>
              </li>
            </ul>
            <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 
                                           <i class="fas fa-sign-out-alt"></i>
                                       <p> Logout</p>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </a>
           
               
          </li>
          </li>
          
       
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
      <router-view></router-view>
      </div>
    </div>
 
  </div>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    ICTA Dashboard
    </div>
    <!-- Default to the left -->
    <strong>Developed By <a href="http://wanjirualex.co.ke/">Wanjiru Alex</a>. With <i class="fas fa-heart"></i></strong> 
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<script src="/js/app.js"></script>
</body>
</html>