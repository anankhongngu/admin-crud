<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Blank Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .content-wrapper, 
        .main-footer {
            background-size: cover !important;
            background: url('assets/admin/default/img-1.jpg') no-repeat;
        }

        .dropdown-menu-lg .dropdown-item {
            padding: 0.25rem 1.5rem !important;
        }
        .brand-link {
            border-bottom: 1px solid #16a2b8 !important;
        }
        .sidebar-dark-primary {
            background: linear-gradient(40deg, #0a0a0a, #505050) !important;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->

        
    
    <div class="wrapper" id = "app">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>

            </ul>



            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-comments-o"></i>
                        <span class="badge badge-danger navbar-badge">Info</span>
                        
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-item">
                            <!-- info Start -->
                            <div class="media">
                                <img src="{{ asset('assets/admin/default/admin.png') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">{{ Auth::user()->name }}
                                      <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">{{ Auth::user()->email }}</p>                                    
                                </div>
                            </div>
                            <!-- info End -->

                            <!-- btn start -->
                           <div> 
                                <div class="btn">
                                    <a type="button" class="btn btn-info"                                            
                                            style = "color: #fff;">
                                        Edit
                                    </a>                                     
                                </div>
                               
                              
                                <div class="btn">
                                    <a type="button" class="btn btn-danger" href="/logout" 
                                        style = "color: #fff;">Log Out</a>         
                                </div>                                
                                
                            </div> 

                            <!-- bnt end -->
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        
    
    
        
    
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
                <img src=" {{ asset ('assets/admin/default/admin.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"> {{ Auth::user()->name }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <router-link to = "/home" class="nav-link">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    Dashboard
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </router-link>                            
                        </li>
                        <li class="nav-item has-treeview">
                            <router-link to = "/category-list" class="nav-link">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    Category
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </router-link>                            
                        </li>
                        

                        <li class="nav-item">
                            <router-link  to = "/post-list" class="nav-link">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    Posts
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </router-link>
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


            <admin-main></admin-main>
            <!-- <admin-home></admin-home> -->



        </div>

        <!-- /.content-wrapper -->



        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2020-2021 <a href="http://fb.com/truongan15" target="_blank">Anankhongngu</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- ./wrapper -->


    <!-- nhung file app.js -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    
    
</body>

</html>