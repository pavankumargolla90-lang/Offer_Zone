<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Gallery - Bootstrap Admin Templates</title>

    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">

    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.svg') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/toastify/toastify.css') }}" />
</head>

<body>
    <div class="page-wrapper">

        <div class="main-container">

            <nav id="sidebar" class="sidebar-wrapper">

                <div class="app-brand px-3 py-2 d-flex align-items-center">
                    <a href="#">
                        <img src="{{ asset('admin/assets/images/logo.svg') }}" class="logo" alt="Bootstrap Gallery" />
                    </a>
                </div>
                <div class="sidebarMenuScroll">
                    <ul class="sidebar-menu">
                        <li class="active current-page">
                            <a href="#">
                                <i class="icon-home"></i>
                                <span class="menu-text">Analytics</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-pie-chart"></i>
                                <span class="menu-text">Statistics</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-book-open"></i>
                                <span class="menu-text">Pages</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="contacts.html">Contacts</a></li>
                                <!-- <li><a href="faq.html">FAQ's</a></li>
                                <li><a href="invoice-list.html">Invoice List</a></li>
                                <li><a href="invoice.html">Invoice Details</a></li>
                                <li><a href="create-invoice.html">Create Invoice</a></li>
                                <li><a href="notifications.html">Notifications</a></li>
                                <li><a href="subscribers.html">Subscribers</a></li>
                                <li><a href="profile.html">User Profile</a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-grid_on"></i>
                                <span class="menu-text">DataTables</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-edit"></i>
                                <span class="menu-text">Editor</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-align-left"></i>
                                <span class="menu-text">Placeholder</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-calendar"></i>
                                <span class="menu-text">Calendars</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Daygrid View</a></li>
                                <!-- <li><a href="#">External Draggable</a></li>
                                <li><a href="#">Google #</a></li>
                                <li><a href="#">List View</a></li>
                                <li><a href="#">Selectable</a></li> -->
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-layers"></i>
                                <span class="menu-text">Components</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Accordions</a></li>
                                <!-- <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="avatars.html">Avatars</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="badges.html">Badges</a></li>
                                <li><a href="cards.html">Cards</a></li>
                                <li><a href="custom-cards.html">Custom Cards</a></li>
                                <li><a href="carousel.html">Carousel</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="list-items.html">List Items</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="progress.html">Progress Bars</a></li>
                                <li><a href="popovers.html">Popovers</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="tooltips.html">Tooltips</a></li>
                                <li><a href="spinners.html">Spinners</a></li>
                                <li><a href="typography.html">Typography</a></li> -->
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-layout"></i>
                                <span class="menu-text">Forms</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Basic Form Inputs</a></li>
                                <!-- <li><a href="form-checkbox-radio.html">Checkbox &amp; Radio</a></li>
                                <li><a href="form-file-input.html">File Input</a></li>
                                <li><a href="form-validations.html">Validations</a></li>
                                <li><a href="date-time-pickers.html">Date Time Pickers</a></li>
                                <li><a href="form-layouts.html">Form Layouts</a></li>
                                <li><a href="input-tags.html">Input Tags</a></li>
                                <li><a href="input-masks.html">Input Masks</a></li> -->
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="starter-page.html">
                                <i class="icon-padding"></i>
                                <span class="menu-text">Starter Page</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables.html">
                                <i class="icon-grid"></i>
                                <span class="menu-text">Tables</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#!">
                                <i class="icon-map"></i>
                                <span class="menu-text">Graphs & Maps</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="apex.html">Apex</a></li>
                                <li><a href="morris.html">Morris</a></li>
                                <li><a href="maps.html">Maps</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#!">
                                <i class="icon-lock"></i>
                                <span class="menu-text">Authentication</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="page-not-found.html">Page Not Found</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="treeview">
                            <a href="#!">
                                <i class="icon-notes"></i>
                                <span class="menu-text">Multi Level</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#!">Level One Link</a></li>
                                <li>
                                    <a href="#!">Level One Menu <i class="icon-arrow_forward_ios"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="#!">Level Two Link</a></li>
                                        <li>
                                            <a href="#!">Level Two Menu <i class="icon-arrow_forward_ios"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#!">Level Three Link</a></li>
                                                <li><a href="#!">Level Three Link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#!">Level One Link</a></li>
                            </ul> -->
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="app-container">

                <div class="app-header d-flex align-items-center">

                    <div class="d-flex">
                        <button class="btn btn-outline-success toggle-sidebar" id="toggle-sidebar">
                            <i class="icon-menu"></i>
                        </button>
                        <button class="btn btn-outline-success pin-sidebar" id="pin-sidebar">
                            <i class="icon-menu"></i>
                        </button>
                    </div>
                    <div class="app-brand-sm d-md-none d-sm-block">
                        <a href="#">
                            <img src="{{ asset('admin/assets/images/logo.svg') }}" class="logo"
                                alt="Bootstrap Gallery" />
                        </a>
                    </div>
                    <div class="search-container d-lg-block d-none mx-3">
                        <input type="text" class="form-control" placeholder="Search" />
                        <i class="icon-search"></i>
                    </div>
                    <div class="header-actions">
                        <!-- <div class="d-md-flex d-none">
                            <div class="dropdown">
                                <a class="dropdown-toggle d-flex p-3 position-relative" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('admin/assets/images/flags/1x1/gb.svg') }}" class="flag-img"
                                        alt="Great Britain" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end shadow-sm dropdown-menu-mini">
                                    <div class="country-container">
                                        <a href="#" class="py-2"><img
                                                src="{{ asset('admin/assets/images/flags/1x1/us.svg') }}"
                                                alt="USA" /></a>
                                        <a href="#" class="py-2"><img
                                                src="{{ asset('admin/assets/images/flags/1x1/in.svg') }}"
                                                alt="India" /></a>
                                        <a href="#" class="py-2"><img
                                                src="{{ asset('admin/assets/images/flags/1x1/br.svg') }}"
                                                alt="Brazil" /></a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-shopping-cart fs-4 lh-1 text-secondary"></i>
                                    <span class="count rounded-circle bg-danger">9</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
                                    <h5 class="fw-semibold px-3 py-2 m-0">Orders</h5>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-start py-2">
                                            <div class="p-3 bg-danger-light border border-danger rounded-circle me-3">MS
                                            </div>
                                            <div class="m-0">
                                                <h6 class="mb-1 fw-semibold">Moory Sammy</h6>
                                                <p class="mb-1 text-secondary">Ordered an iPhone.</p>
                                                <p class="small m-0 text-secondary">3 Mins Ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-grid p-3 border-top">
                                        <a href="javascript:void(0)" class="btn btn-outline-primary">View all</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-twitch fs-4 lh-1 text-secondary"></i>
                                    <span class="count rounded-circle bg-danger">5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
                                    <h5 class="fw-semibold px-3 py-2 m-0">Notifications</h5>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-start py-2">
                                            <img src="{{ asset('admin/assets/images/user.png') }}"
                                                class="img-3x me-3 rounded-3" alt="User" />
                                            <div class="m-0">
                                                <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                                                <p class="mb-1 text-secondary">Membership has been ended.</p>
                                                <p class="small m-0 text-secondary opacity-50">Today, 07:30pm</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-grid p-3 border-top">
                                        <a href="javascript:void(0)" class="btn btn-outline-primary">View all</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="dropdown ms-2">
                            <a class="dropdown-toggle d-flex align-items-center user-settings" href="#!" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Offer_Zone</span>
                                <img src="{{ asset('admin/assets/images/user3.png') }}"
                                    class="img-3x m-2 me-0 rounded-3" alt="User Avatar" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3">
                                <a class="dropdown-item d-flex align-items-center py-2" href="#"><i
                                        class="icon-gitlab fs-4 me-3"></i>User Profile</a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="#"><i
                                        class="icon-settings fs-4 me-3"></i>Account Settings</a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="#"><i
                                        class="icon-log-out fs-4 me-3"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/toastify/toastify.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>

</html>