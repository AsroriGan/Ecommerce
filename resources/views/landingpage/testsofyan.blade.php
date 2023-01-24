<!DOCTYPE html>
<html lang="en">

@include('layoutsadmin.head')

<body>

    <div class="main-wrapper">

        <div class="header header-one">

            <div class="header-left header-left-one">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.html" class="white-logo">
                    <img src="assets/img/logo-white.png" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>


            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-bars"></i>
            </a>


            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav nav-tabs user-menu">

                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                        <img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="assets/img/flags/us.png" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="assets/img/flags/fr.png" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="assets/img/flags/es.png" alt="" height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="assets/img/flags/de.png" alt="" height="16"> German
                        </a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i data-feather="bell"></i> <span class="badge rounded-pill">5</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Brian Johnson</span>
                                                    paid the invoice <span class="noti-title">#DF65485</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="assets/img/profiles/avatar-03.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Marie Canales</span>
                                                    has accepted your estimate <span
                                                        class="noti-title">#GTR458789</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <div class="avatar avatar-sm">
                                                <span class="avatar-title rounded-circle bg-primary-light"><i
                                                        class="far fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">New user
                                                        registered</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="assets/img/profiles/avatar-04.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Barbara Moore</span>
                                                    declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins
                                                        ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <div class="avatar avatar-sm">
                                                <span class="avatar-title rounded-circle bg-info-light"><i
                                                        class="far fa-comment"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">You have received a
                                                        new
                                                        message</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img src="assets/img/profiles/avatar-01.jpg" alt="">
                            <span class="status online"></span>
                        </span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="me-1"></i>
                            Settings</a>
                        <a class="dropdown-item" href="login.html"><i data-feather="log-out" class="me-1"></i>
                            Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"><span>Main</span></li>
                        <li>
                            <a href="index.html"><i data-feather="home"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="customers.html"><i data-feather="users"></i> <span>Customers</span></a>
                        </li>
                        <li>
                            <a href="estimates.html"><i data-feather="file-text"></i> <span>Estimates</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoices.html">Invoices List</a></li>
                                <li><a href="invoice-grid.html">Invoices Grid</a></li>
                                <li><a href="invoice-grid-two.html">Invoices Grid 2</a></li>
                                <li><a href="add-invoice.html">Add Invoices</a></li>
                                <li><a href="edit-invoice.html">Edit Invoices</a></li>
                                <li><a href="view-invoice.html">Invoices Details</a></li>
                                <li><a href="view-invoice-two.html">Invoices Details 2</a></li>
                                <li><a href="invoices-settings.html">Invoices Settings</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="invoice-items.html"><i data-feather="star"></i> <span>Items</span></a>
                        </li>
                        <li>
                            <a href="payments.html"><i data-feather="credit-card"></i> <span>Payments</span></a>
                        </li>
                        <li>
                            <a href="expenses.html"><i data-feather="package"></i> <span>Expenses</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="sales-report.html">Sales Report</a></li>
                                <li><a href="expenses-report.html">Expenses Report</a></li>
                                <li><a href="profit-loss-report.html">Profit & Loss Report</a></li>
                                <li><a href="taxs-report.html">Taxs Report</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="grid"></i> <span> Blogs</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="blog.html">All Blogs</a></li>
                                <li><a href="add-blog.html">Add Blog</a></li>
                                <li><a href="edit-blog.html">Edit Blog</a></li>
                                <li><a href="blog-categories.html">Categories</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.html"><i data-feather="settings"></i> <span>Settings</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="grid"></i> <span> Application</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="inbox.html">Email</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li>
                            <a href="profile.html"><i data-feather="user-plus"></i> <span>Profile</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="lock"></i> <span> Authentication </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.html"> Login </a></li>
                                <li><a href="register.html"> Register </a></li>
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                                <li><a href="lock-screen.html"> Lock Screen </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="users.html"><i data-feather="user"></i> <span>Users</span></a>
                        </li>
                        <li>
                            <a href="blank-page.html"><i data-feather="file"></i> <span>Blank Page</span></a>
                        </li>
                        <li>
                            <a href="maps-vector.html"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
                        </li>
                        <li class="menu-title">
                            <span>UI Interface</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="accordions.html">Accordions</a></li>
                                <li><a href="avatar.html">Avatar</a></li>
                                <li><a href="badges.html">Badges</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="buttongroup.html">Button Group</a></li>
                                <li><a href="breadcrumbs.html">Breadcrumb</a></li>
                                <li><a href="cards.html">Cards</a></li>
                                <li><a href="carousel.html">Carousel</a></li>
                                <li><a href="dropdowns.html">Dropdowns</a></li>
                                <li><a href="grid.html">Grid</a></li>
                                <li><a href="images.html">Images</a></li>
                                <li><a href="lightbox.html">Lightbox</a></li>
                                <li><a href="media.html">Media</a></li>
                                <li><a href="modal.html" class="active">Modals</a></li>
                                <li><a href="offcanvas.html">Offcanvas</a></li>
                                <li><a href="pagination.html">Pagination</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="progress.html">Progress Bars</a></li>
                                <li><a href="placeholders.html">Placeholders</a></li>
                                <li><a href="rangeslider.html">Range Slider</a></li>
                                <li><a href="spinners.html">Spinner</a></li>
                                <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                                <li><a href="tab.html">Tabs</a></li>
                                <li><a href="toastr.html">Toasts</a></li>
                                <li><a href="tooltip.html">Tooltip</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="video.html">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="box"></i> <span>Elements </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="ribbon.html">Ribbon</a></li>
                                <li><a href="clipboard.html">Clipboard</a></li>
                                <li><a href="drag-drop.html">Drag & Drop</a></li>
                                <li><a href="rating.html">Rating</a></li>
                                <li><a href="text-editor.html">Text Editor</a></li>
                                <li><a href="counter.html">Counter</a></li>
                                <li><a href="scrollbar.html">Scrollbar</a></li>
                                <li><a href="notification.html">Notification</a></li>
                                <li><a href="stickynote.html">Sticky Note</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chart-apex.html">Apex Charts</a></li>
                                <li><a href="chart-js.html">Chart Js</a></li>
                                <li><a href="chart-morris.html">Morris Charts</a></li>
                                <li><a href="chart-flot.html">Flot Charts</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                                <li><a href="chart-c3.html">C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="award"></i> <span> Icons </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.html">Feather Icons</a></li>
                                <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-typicon.html">Typicon Icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="columns"></i> <span> Forms </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                                <li><a href="form-input-groups.html">Input Groups </a></li>
                                <li><a href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a href="form-vertical.html"> Vertical Form </a></li>
                                <li><a href="form-mask.html">Form Mask </a></li>
                                <li><a href="form-validation.html">Form Validation </a></li>
                                <li><a href="form-select2.html">Form Select2 </a></li>
                                <li><a href="form-fileupload.html">File Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="layout"></i> <span> Tables </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Modal</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Components</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Bootstrap Modals</h4>
                                <p>
                                    A rendered modal with header, body, and set of actions in the footer.
                                </p>

                                <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="standard-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>Text in a modal</h6>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                <hr>
                                                <h6>Overflowing text to show scroll behavior</h6>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                                    dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog"
                                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-full-width">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>Text in a modal</h6>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                <hr>
                                                <h6>Overflowing text to show scroll behavior</h6>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                                    dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-list">

                                    <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                                        data-bs-target="#standard-modal">Standard Modal</button>

                                    <button type="button" class="btn btn-info mt-1" data-bs-toggle="modal"
                                        data-bs-target="#bs-example-modal-lg">Large Modal</button>

                                    <button type="button" class="btn btn-success mt-1" data-bs-toggle="modal"
                                        data-bs-target="#bs-example-modal-sm">Small Modal</button>

                                    <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                                        data-bs-target="#full-width-modal">Full width Modal</button>

                                    <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                                        data-bs-target="#scrollable-modal">Scrollable Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Modal with Pages</h4>
                                <p>Examples of custom modals.</p>

                                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="text-center mt-2 mb-4">
                                                    <div class="auth-logo">
                                                        <a href="index.html" class="logo logo-dark">
                                                            <span class="logo-lg">
                                                                <img src="assets/img/logo.png" alt=""
                                                                    height="42">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <form class="px-3" action="#">
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Name</label>
                                                        <input class="form-control" type="email" id="username"
                                                            required="" placeholder="Michael Zenaty">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="emailaddress" class="form-label">Email
                                                            address</label>
                                                        <input class="form-control" type="email" id="emailaddress"
                                                            required="" placeholder="john@deo.com">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input class="form-control" type="password" required=""
                                                            id="password" placeholder="Enter your password">
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1">I
                                                                accept
                                                                <a href="#">Terms and Conditions</a></label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 text-center">
                                                        <button class="btn btn-primary" type="submit">Sign Up
                                                            Free</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="login-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="text-center mt-2 mb-4">
                                                    <div class="auth-logo">
                                                        <a href="index.html" class="logo logo-dark">
                                                            <span class="logo-lg">
                                                                <img src="assets/img/logo.png" alt=""
                                                                    height="42">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <form action="#" class="px-3">
                                                    <div class="mb-3">
                                                        <label for="emailaddress1" class="form-label">Email
                                                            address</label>
                                                        <input class="form-control" type="email" id="emailaddress1"
                                                            required="" placeholder="john@deo.com">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password1" class="form-label">Password</label>
                                                        <input class="form-control" type="password" required=""
                                                            id="password1" placeholder="Enter your password">
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customCheck2">
                                                            <label class="form-check-label"
                                                                for="customCheck2">Remember
                                                                me</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 text-center">
                                                        <button class="btn rounded-pill btn-primary"
                                                            type="submit">Sign
                                                            In</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-list">

                                    <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                                        data-bs-target="#signup-modal">Sign Up Modal</button>

                                    <button type="button" class="btn btn-info mt-1" data-bs-toggle="modal"
                                        data-bs-target="#login-modal">Log In Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Modal Position</h4>
                                <p>Specify the position for the modal. You can display modal at top, bottom, center or
                                    right of page by specifying
                                    classes <code>modal-top</code>, <code>modal-bottom</code>,
                                    <code>modal-dialog-centered</code> and <code>modal-right
                                    </code> respectively.
                                </p>

                                <div id="top-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-top">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="topModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Text in a modal</h5>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="right-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-right">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <h4 class="mt-0">Text in a modal</h4>
                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                                                    </p>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="bottom-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-bottom">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="bottomModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Text in a modal</h5>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="centermodal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Overflowing text to show scroll behavior</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-list">

                                    <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                                        data-bs-target="#top-modal">Top Modal</button>

                                    <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                                        data-bs-target="#bottom-modal">Bottom Modal</button>

                                    <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                                        data-bs-target="#centermodal">Center modal</button>

                                    <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                                        data-bs-target="#right-modal">Rightbar Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Modal based Alerts</h4>
                                <p>Show different contexual alert messages using modal component</p>

                                <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content modal-filled bg-success">
                                            <div class="modal-body p-4">
                                                <div class="text-center">
                                                    <i class="dripicons-checkmark h1 text-white"></i>
                                                    <h4 class="mt-2 text-white">Well Done!</h4>
                                                    <p class="mt-3 text-white">Cras mattis consectetur purus sit amet
                                                        fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                        eget quam.</p>
                                                    <button type="button" class="btn btn-light my-2"
                                                        data-bs-dismiss="modal">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body p-4">
                                                <div class="text-center">
                                                    <i class="dripicons-information h1 text-info"></i>
                                                    <h4 class="mt-2">Heads up!</h4>
                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum.
                                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                    <button type="button" class="btn btn-info my-2"
                                                        data-bs-dismiss="modal">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body p-4">
                                                <div class="text-center">
                                                    <i class="dripicons-warning h1 text-warning"></i>
                                                    <h4 class="mt-2">Incorrect Information</h4>
                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum.
                                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                    <button type="button" class="btn btn-warning my-2"
                                                        data-bs-dismiss="modal">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content modal-filled bg-danger">
                                            <div class="modal-body p-4">
                                                <div class="text-center">
                                                    <i class="dripicons-wrong h1 text-white"></i>
                                                    <h4 class="mt-2 text-white">Oh snap!</h4>
                                                    <p class="mt-3 text-white">Cras mattis consectetur purus sit amet
                                                        fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                        eget quam.</p>
                                                    <button type="button" class="btn btn-light my-2"
                                                        data-bs-dismiss="modal">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-list">

                                    <button type="button" class="btn btn-success mt-1" data-bs-toggle="modal"
                                        data-bs-target="#success-alert-modal">Success Alert</button>

                                    <button type="button" class="btn btn-info mt-1" data-bs-toggle="modal"
                                        data-bs-target="#info-alert-modal">Info Alert</button>

                                    <button type="button" class="btn btn-warning mt-1" data-bs-toggle="modal"
                                        data-bs-target="#warning-alert-modal">Warning Alert</button>

                                    <button type="button" class="btn btn-danger mt-1" data-bs-toggle="modal"
                                        data-bs-target="#danger-alert-modal">Danger Alert</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Multiple Modal</h4>
                                <p>Display a series of modals one by one to guide your users on multiple aspects or take
                                    step wise input.</p>

                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalToggleLabel">Modal 1</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Show a second modal and hide this one with the button below.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                                                    data-bs-toggle="modal" data-bs-dismiss="modal">Open second
                                                    modal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Hide this modal and show the first with the button below.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                                                    data-bs-toggle="modal" data-bs-dismiss="modal">Back to
                                                    first</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-secondary" data-bs-toggle="modal" href="#exampleModalToggle"
                                    role="button">Open first modal</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Custom Modals</h4>
                                <p>Examples of custom modals.</p>

                                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal Content is Responsive</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-1" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="field-1"
                                                                placeholder="John">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-2" class="form-label">Surname</label>
                                                            <input type="text" class="form-control" id="field-2"
                                                                placeholder="Doe">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="field-3"
                                                                placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="field-4" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="field-4"
                                                                placeholder="Boston">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="field-5" class="form-label">Country</label>
                                                            <input type="text" class="form-control" id="field-5"
                                                                placeholder="United States">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="field-6" class="form-label">Zip</label>
                                                            <input type="text" class="form-control" id="field-6"
                                                                placeholder="123456">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <label for="field-7" class="form-label">Personal
                                                                Info</label>
                                                            <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn btn-info waves-effect waves-light">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-0">
                                            <div id="accordion">
                                                <div class="card mb-0">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="m-0">
                                                            <a href="#collapseOne" class="text-dark"
                                                                data-bs-toggle="collapse" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Collapsible Group Item #1
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa
                                                            nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                            tempor, sunt aliqua put a bird on it squid single-origin
                                                            coffee nulla assumenda shoreditch et. Nihil
                                                            anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                            nesciunt sapiente ea proident. Ad vegan
                                                            excepteur butcher vice lomo. Leggings occaecat craft beer
                                                            farm-to-table, raw denim aesthetic synth nesciunt
                                                            you probably haven't heard of them accusamus labore
                                                            sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-0">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="m-0">
                                                            <a href="#collapseTwo" class="collapsed text-dark"
                                                                data-bs-toggle="collapse" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Collapsible Group Item #2
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa
                                                            nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                            tempor, sunt aliqua put a bird on it squid single-origin
                                                            coffee nulla assumenda shoreditch et. Nihil
                                                            anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                            nesciunt sapiente ea proident. Ad vegan
                                                            excepteur butcher vice lomo. Leggings occaecat craft beer
                                                            farm-to-table, raw denim aesthetic synth nesciunt
                                                            you probably haven't heard of them accusamus labore
                                                            sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-0">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="m-0">
                                                            <a href="#collapseThree" class="collapsed text-dark"
                                                                data-bs-toggle="collapse" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Collapsible Group Item #3
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute,
                                                            non cupidatat skateboard dolor brunch. Food truck quinoa
                                                            nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                            tempor, sunt aliqua put a bird on it squid single-origin
                                                            coffee nulla assumenda shoreditch et. Nihil
                                                            anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                            nesciunt sapiente ea proident. Ad vegan
                                                            excepteur butcher vice lomo. Leggings occaecat craft beer
                                                            farm-to-table, raw denim aesthetic synth nesciunt
                                                            you probably haven't heard of them accusamus labore
                                                            sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-list">

                                    <button type="button" class="btn btn-success waves-effect waves-light mt-1"
                                        data-bs-toggle="modal" data-bs-target="#con-close-modal">Responsive
                                        Modal</button>

                                    <button type="button" class="btn btn-secondary waves-effect waves-light mt-1"
                                        data-bs-toggle="modal" data-bs-target="#accordion-modal">Accordion in
                                        Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Static backdrop</h4>
                                <p>
                                    When backdrop is set to static, the modal will not close when clicking outside it.
                                    Click the button below to try it.
                                </p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Launch static backdrop modal
                                </button>

                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>
