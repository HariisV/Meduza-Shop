<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('judul')  - Eren Dashboard</title>
<!-- page css -->
<link href="{{Asset('enlink-assets/vendors/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet">

<!-- page js -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{Asset('enlink-assets/images/logo/favicon.png')}}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{Asset('enlink-assets/css/app.min.css')}}" rel="stylesheet">
<style>
    .isactive{
        background-color: aliceblue
    }
    .buttonsize{
        font-size: 20px;
    }
    .buttons{
        height: 37px;
        width: 75px;
    }
    .active{
        background-color: rgba(63,135,245,0.15);
    }
    .active a span{
        color: #3f87f5
    }
</style>
</head>
@if (Auth()->user()->role != "Admin" )
        @php
            header("Location: /");
            die();
        @endphp
@endif
<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.html">
                        <img src="{{Asset('enlink-assets//images/logo/logo.png')}}" alt="Logo">
                        <img class="logo-fold" src="{{Asset('enlink-assets//images/logo/logo-fold.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="{{Asset('enlink-assets//images/logo/logo-white.png')}}" alt="Logo">
                        <img class="logo-fold" src="{{Asset('enlink-assets//images/logo/logo-fold-white.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                         <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>     
                             
                          
                        {{-- <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li> --}}
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li>
                            <h3 class="header-title mt-2">@yield('judul') </h3>

                        </li>
                        {{-- <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                <i class="anticon anticon-search"></i>
                            </a>
                        </li> --}}
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" data-toggle="dropdown">
                                <i class="anticon anticon-bell notification-badge"></i>
                            </a>
                            <div class="dropdown-menu pop-notification">
                                <div class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
                                    <p class="text-dark font-weight-semibold m-b-0">
                                        <i class="anticon anticon-bell"></i>
                                        <span class="m-l-10">Notification</span>
                                    </p>
                                    <a class="btn-sm btn-default btn" href="javascript:void(0);">
                                        <small>View All</small>
                                    </a>
                                </div>
                                <div class="relative">
                                    <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-blue avatar-icon">
                                                    <i class="anticon anticon-mail"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">You received a new message</p>
                                                    <p class="m-b-0"><small>8 min ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-cyan avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">New user registered</p>
                                                    <p class="m-b-0"><small>7 hours ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="https://cdn2.vectorstock.com/i/thumb-large/20/76/man-avatar-profile-vector-21372076.jpg"  alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="https://cdn2.vectorstock.com/i/thumb-large/20/76/man-avatar-profile-vector-21372076.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">{{Auth()->user()->nama}}</p>
                                            <p class="m-b-0 opacity-07">Administrator</p>
                                        </div>
                                    </div>
                                </div>
                               
                               
                                
                                <a href="{{route('logout')}}" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        {{-- <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                                <i class="anticon anticon-appstore"></i>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown {{ Request::path() == 'Dashboard' ? 'active' : '' }}">
                            <a href="{{route('dashboard')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-home"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown {{ Request::path() == 'daftar-product' ? 'active' : '' }}">
                            <a href="{{route('product')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-appstore"></i>
                                </span>
                                <span class="title">Produk</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown {{ Request::path() == 'Transaksi' ? 'active' : '' }}">
                            <a href="{{Route('Transaksi')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-shopping"></i>
                                </span>
                                <span class="title">Transaksi</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown {{ Request::path() == 'Pesan' ? 'active' : '' }}">
                            <a href="{{Route('pesan')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-message"></i>
                                </span>
                                <span class="title">Pesan</span>
                            </a>
                        </li> 
                      <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-user"></i>
                                </span>
                                <span class="title">User</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                             <ul class="dropdown-menu">
                                <li class="{{ Request::path() == 'daftar-customer' ? 'active' : '' }}">
                                    <a href="{{route('customer')}}">
                                        <span class="icon-holder">
                                            <i class="anticon anticon-usergroup-add"></i>                                        </span>
                                        <span class="title">Customer</span>
                                    </a>
                                </li>
                                <li class="{{ Request::path() == 'daftar-Admin' ? 'active' : '' }}">
                                    <a href="{{route('user')}}">
                                        <span class="icon-holder">
                                            <i class="anticon anticon-robot"></i></span>
                                        <span class="title">Admin</span>
                                    </a>
                                </li>
                                
                             </ul>
                             <li class="nav-item dropdown {{ Request::path() == 'slider' ? 'active' : '' }}">
                                <a href="{{Route('slider')}}">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-switcher"></i>
                                    </span>
                                    <span class="title">Slider</span>
                                </a>
                            </li> 
                           
                            <li class="nav-item dropdown {{ Request::path() == 'Metode-Pembayaran' ? 'active' : '' }}">
                                <a href="{{Route('MetodePembayaran')}}">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-credit-card"></i>
                                    </span>
                                    <span class="title">Metode Pembayaran</span>
                                </a>
                            </li> 
                        {{-- </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-file"></i>
                                </span>
                                <span class="title">Multi Level</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0);">
                                        <span>Level 1</span>
                                        <span class="arrow">
                                            <i class="arrow-icon"></i>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="">Level 2.1</a>
                                        </li>
                                        <li>
                                            <a href="">Level 2.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        @yield('konten')
                    </div>
                    <!-- Content goes Here -->
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2021 Eren By Caraseru.com. </p>
                        {{-- <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span> --}}
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            {{-- <div class="modal modal-left fade search" id="search-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Search</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <!-- Content goes Here -->
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Search End-->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Quick View</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <!-- Content goes Here -->
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->
        </div>
    </div>

    
    <script src="{{Asset('enlink-assets/js/vendors.min.js')}}"></script>

    <script src="{{Asset('enlink-assets/js/app.min.js')}}"></script>
    <script src="{{Asset('enlink-assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{Asset('enlink-assets/vendors/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script>
      $(document).ready(function() {
            $('#data-table').DataTable( {
                // "scrollX": true
            } );
        } );
    </script>
    @yield('script')
</body>

</html>