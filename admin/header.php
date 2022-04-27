<?php
session_start();
if (!isset($_SESSION["username"])) {
    header('Location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Dashboard | Madok</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="madok classes" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Bootstrap Css -->
        <!-- DataTables -->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="assets/libs/%40chenfengyuan/datepicker/datepicker.min.css">

        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body data-topbar="dark" data-layout="horizontal">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.svg" alt="" height="60">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="60">
                                </span>
                            </a>
                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light1.svg" alt="" height="60">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light1.png" alt="" height="60">
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search input">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>s
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Admin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="index.php" id="topnav-dashboard" role="button">
                                        <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Dashboards</span> <div class="arrow-down"></div>
                                    </a>
                                    <!-- <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                        <a href="index.php" class="dropdown-item" key="t-default">Default</a>
                                        <a href="dashboard-saas.html" class="dropdown-item" key="t-saas">Saas</a>
                                        <a href="dashboard-crypto.html" class="dropdown-item" key="t-crypto">Crypto</a>
                                        <a href="dashboard-blog.html" class="dropdown-item" key="t-blog">Blog</a>
                                    </div> -->
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button">
                                        <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">About</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                        <a href="about.php" class="dropdown-item" key="t-default">About</a>
                                        <a href="directormessage.php" class="dropdown-item" key="t-saas">Director Message</a>
                                        <a href="mission.php" class="dropdown-item" key="t-crypto">Mission & Vision</a>
                                        <!-- <a href="vision.php" class="dropdown-item" key="t-blog">Vision</a> -->
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                        <i class="bx bx-customize me-2"></i><span key="t-apps">Courses</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                        <a href="course_category.php" class="dropdown-item" key="t-calendar">Course Category</a>
                                        <a href="course.php" class="dropdown-item" key="t-chat">Course</a>
                                         <a href="scholarship.php" class="dropdown-item" key="t-chat">Scholarship</a>
                                         <a href="enquiry.php" class="dropdown-item" key="t-chat">Enquiry</a>
                                        <!-- <a href="apps-filemanager.html" class="dropdown-item" key="t-file-manager">File Manager</a> -->
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="teacher.php" id="topnav-components" role="button">
                                        <i class="bx bx-collection me-2"></i><span key="t-components">Faculty</span> <div class="arrow-down"></div>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="notice.php" id="topnav-more" role="button">
                                        <i class="bx bx-file me-2"></i><span key="t-extra-pages">Notice</span> <div class="arrow-down"></div>
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="gallery.php" id="topnav-layout" role="button">
                                        <i class="bx bx-layout me-2"></i><span key="t-layouts">Gallery</span> <div class="arrow-down"></div>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                                        <i class="bx bx-layout me-2"></i><span key="t-layouts">Payment</span> <div class="arrow-down"></div>
                                    </a>
                                     <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                        <a href="course_payment.php" class="dropdown-item" key="t-calendar">Course Payment</a>
                                        <a href="admission_payment.php" class="dropdown-item" key="t-chat">Admission Payment</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                                        <i class="bx bx-layout me-2"></i><span key="t-layouts">Pages</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                        <a href="testimonial.php" class="dropdown-item" key="t-calendar">Testimonial</a>
                                        <a href="faq.php" class="dropdown-item" key="t-chat">Faq</a>
                                         <a href="contact.php" class="dropdown-item" key="t-chat">Contact</a>
                                          
                                        <!-- <a href="apps-filemanager.html" class="dropdown-item" key="t-file-manager">File Manager</a> -->
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
