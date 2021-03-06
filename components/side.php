
<body class="left-sidebar-fixed">
    <!--header start-->
    <header class="app-header">
        <div class="branding-wrap">
            <!--left nav toggler start-->
            <a class="nav-link mt-2 float-left js_left-nav-toggler pos-fixed" href="javaScript:;">
                <i class=" ti-align-right"></i>
            </a>
            <!--left nav toggler end-->

            <!--brand start-->
            <div class="navbar-brand pos-fixed">
                <a class="" href="index-2.html">
                    <img src="assets/img/logo.png" srcset="assets/img/logo@2x.jpg 2x" alt="CodeLab">
                </a>
            </div>
            <!--brand end-->
        </div>

        <!--header rightside links-->
        <ul class="header-links hide-arrow navbar">
            <li class="nav-item search-bar">
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#searchModal">
                    <i class="vl_search"></i>
                </button>
            </li>
            <li class="nav-item dropdown sm-device-none">
                <a class="nav-link dropdown-toggle mr-lg-3" id="messagesDropdown" href="#" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="vl_chat-bubble"></i>
                    <div class="notification-alarm">
                        <span class="wave wave-danger"></span>
                        <span class="dot"></span>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header weight500 ">Messages</h6>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item border-bottom msg-unread" href="#">
                        <div class="float-left notificaton-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=""/>
                        </div>
                        <span class="weight500">Andrew Flinton</span>
                        <span class="small float-right text-muted">08:30 AM</span>

                        <div class="dropdown-message">
                            I hope that you will be there in time. See you then
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom msg-unread" href="#">
                        <div class="float-left notificaton-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=""/>
                        </div>
                        <span class="weight500">John Doe</span>
                        <span class="small float-right text-muted">10:28 AM</span>

                        <div class="dropdown-message">
                            Hello this is an example message. Just want to show how it looks
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom" href="#">
                        <div class="float-left notificaton-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=""/>
                        </div>
                        <span class="weight500">Dash Don</span>
                        <span class="small float-right text-muted">07:12 PM</span>

                        <div class="dropdown-message">
                            Hi, This is Dash Don form usa. I'm looking for someone who really good at design and frontend like mosaddek
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom" href="#">
                        <div class="float-left notificaton-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                        </div>
                        <span class="weight500">dkmosa</span>
                        <span class="small float-right text-muted">12:10 PM</span>

                        <div class="dropdown-message">
                            We build a beautiful dashboard admin panel for professional
                        </div>
                    </a>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle mr-lg-3" id="alertsDropdown" href="#" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="vl_bell"></i>
                    <div class="notification-alarm">
                        <span class="wave wave-warning"></span>
                        <span class="dot bg-warning"></span>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header weight500">Notification</h6>

                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item border-bottom" href="#">
                                <span class="text-primary">
                                <span class="weight500">
                                    <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                                </span>
                        <span class="small float-right text-muted">03:14 AM</span>

                        <div class="dropdown-message f12">
                            This week project update report generated. All team members are requested to check the updates
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom" href="#">
                                <span class="text-danger">
                                <span class="weight500">
                                    <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                                </span>
                        <span class="small float-right text-muted">10:34 AM</span>

                        <div class="dropdown-message f12">
                            Unexpectedly server response stop. Responsible members are requested to fix it soon
                        </div>
                    </a>

                    <a class="dropdown-item border-bottom" href="#">
                                <span class="text-success">
                                <span class="weight500">
                                    <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                                </span>
                        <span class="small float-right text-muted">12:30 AM</span>

                        <div class="dropdown-message f12">
                            Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                        </div>
                    </a>

                    <a class="dropdown-item small" href="#">View all notification</a>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-thumb">
                        <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=""/>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                    <div class="dropdown-item- px-3 py-2">
                        <img class="rounded-circle mr-2" src="assets/img/avatar/avatar2.jpg" width="35" alt=""/>
                        <span class="text-muted">Jhon Doe</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Account Settings</a>
                    <a class="dropdown-item" href="#">Inbox <span class="badge badge-primary">3</span></a>
                    <a class="dropdown-item" href="#">Message <span class="badge badge-success">5</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Sign Out</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link right_side_toggle">
                    <i class="icon-options-vertical"> </i>
                </a>
            </li>
        </ul>
        <!--/header rightside links-->
    </header>
    <!--search modal start-->
    <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--search modal start-->
    <!--header end-->

    <div class="app-body">
        <!--left sidebar start-->
        <div class="left-nav-wrap">
            <div class="left-sidebar">
                <nav class="sidebar-menu">
                    <ul id="nav-accordion">
                        <li class="sub-menu">
                            <a href="?page=home">
                                <i class=" ti-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

						<li class="sub-menu">
                            <a href="?page=penjualan">
                                <i class=" icon-speech"></i>
                                <span>Penjualan</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="?page=status_pemesanan">
                                <i class=" icon-speech"></i>
                                <span>Status Pemesanan</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="?page=data_penjualan">
                                <i class=" icon-grid"></i>
                                <span>Data Penjualan</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="?page=data_pembelian">
                                <i class=" ti-pie-chart"></i>
                                <span>Data Pembelian</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="?page=data_bahan">
                                <i class=" ti-pencil-alt"></i>
                                <span>Data Bahan</span>
                            </a>
                        </li>
                        
                        <li class="sub-menu">
                            <a href="?page=data_barang">
                                <i class=" ti-layers"></i>
                                <span>Data Barang</span>
                            </a>
                        </li>

                       <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="icon-calendar"></i>
                                <span>Laporan </span>
                            </a>
                            <ul class="sub">
                                <li><a  href="?page=lap_pembelian">Laporan Pembelian</a></li>
                                <li><a  href="?page=lap_penjualan">Laporan Penjualan</a></li>
                                <li><a  href="?page=lap_barang">Laporan Barang</a></li>
                                <li><a  href="?page=lap_bahan">Laporan Bahan</a></li>

                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!--left sidebar end-->
        <!--main content wrapper-->
       