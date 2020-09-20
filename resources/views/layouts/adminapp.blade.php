<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/admin/fontawesome-free/css/all.min.css">
    <link href="/assets/admin/main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">

                <h3><strong>Insta<span class="text-danger">Apps</span></strong></h3>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>  
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="/assets/admin/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <!-- <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>        
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="mt-3 mb-3">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                    <img width="42" class="rounded-circle" src="/assets/admin/images/avatars/1.jpg" alt="">
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                    <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left  ml-3 header-user-info">
                                            <div class="widget-heading">
                                                Alina Mclourd
                                            </div>
                                            <div class="widget-subheading">
                                                VP People Manager
                                            </div>
                                        </div>
                                        <div class="widget-content-right header-user-info ml-3">
                                            <!-- <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                                <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                            </button> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="app-sidebar__heading">Beranda</li>
                            <li>
                                <a href="index.html" class="mm-active">
                                    <i class="metismenu-icon fas fa-newspaper"></i>
                                    Beranda
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Notifikasi</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fas fa-comments"></i>
                                    Pesan
                                    <i class="metismenu-state-icon" style="margin-top: -25px;opacity: 100%"><span class="badge badge-danger" style="font-size: 10px">9</span></i>
                                </a>
                                <a href="#">
                                    <i class="metismenu-icon far fa-newspaper"></i>
                                    Postingan
                                    <i class="metismenu-state-icon" style="margin-top: -25px;opacity: 100%"><span class="badge badge-danger" style="font-size: 10px">19</span></i>
                                </a>
                            </li>

                            <li class="app-sidebar__heading">Teman</li>
                            <li>
                                <a href="dashboard-boxes.html">
                                    <i class="metismenu-icon" style="opacity: 100%">
                                        <img width="32" class="rounded-circle" src="/assets/admin/images/avatars/1.jpg" alt="">
                                    </i>
                                    <span><b>Joko Riyadi </b><i> (online)</i></span>

                                </a>
                                <a href="dashboard-boxes.html">
                                    <i class="metismenu-icon" style="opacity: 100%">
                                        <img width="32" class="rounded-circle" src="/assets/admin/images/avatars/1.jpg" alt="">
                                    </i>
                                    <span><b>Joko Riyadi </b><i> (online)</i></span>
                                </a>
                                <a href="dashboard-boxes.html">
                                    <i class="metismenu-icon" style="opacity: 100%">
                                        <img width="32" class="rounded-circle" src="/assets/admin/images/avatars/1.jpg" alt="">
                                    </i>
                                    <span><b>Joko Riyadi </b><i> (online)</i></span>
                                </a>
                                <a href="dashboard-boxes.html">
                                    <i class="metismenu-icon" style="opacity: 100%">
                                        <img width="32" class="rounded-circle" src="/assets/admin/images/avatars/1.jpg" alt="">
                                    </i>
                                    <span><b>Joko Riyadi </b><i> (online)</i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="form-row ml-0">
                        <div class="col-lg-8">                            
                            @yield('content')
                        </div>
                        <div class="col-lg-4">
                            <img src="/assets/images/3.png" class="img-fluid p-2">
                            <!-- <img src="/assets/images/2.png" class="img-fluid p-2"> -->
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 1
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 2
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 3
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <div class="badge badge-success mr-1 ml-0">
                                                <small>NEW</small>
                                            </div>
                                            Footer Link 4
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="/assets/admin/scripts/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="/Assets/proyekbaru/js/jquery-migrate-3.0.1.min.js"></script>

</body>
</html>