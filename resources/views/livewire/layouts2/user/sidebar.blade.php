<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" style="background-color: #1d59d8">
            <a href="/user/{{Auth::user()->username}}/dashboard" class="text-white">
                <img src="/img/logo.png" alt="{{env('APP_NAME')}}" class="header_logo" align="center"/>
                 <span id="title_collapse font_20" > {{env('APP_NAME')}}</span>
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu text-white"></i>
                </span>
            </button>
            <button class="topbar-toggler more text-white"><i class="icon-options-vertical text-white"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar" onclick="title_collapse()">
                    &emsp; <i class="icon-menu text-white"></i>
                </button>
            </div>
            <script type="text/javascript">
                function title_collapse()
                {
                    $("#title_collapse").toggle();
                }
            </script>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" style="background-color: #1d59d8">

            <div class="container-fluid">
                <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                    </form>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class=" dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <i class="fa fa-bell not_cont text-white">

                            </i> <span class="text-white">Notifications </span><i class="fa fa-chevron-down text-white"></i>
                        </a>
                        <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                            <li>
                                <div class="message-notif-scroll scrollbar-outer">
                                    <div class="notif-center">

                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div align="center">
                                    <a href="/notifications"> &nbsp;View all</a>
                                    <br><br>
                                </div>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="img/any.png" alt="image profile" class="avatar-img rounded" style="">

                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg">
                                          <img src="img/any.png" alt="image profile" class="avatar-img rounded" style="">

                                        </div>
                                        <a href="/user/{{Auth::user()->username}}/profile">
                                            <div class="u-text">
                                                <h4>Hi {{Auth::user()->username}}</h4>
                                                <p class="text-muted">{{Auth::user()->email}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/user/{{Auth::user()->username}}/dashboard"><span class="fa fa-desktop"></span> &nbsp;Dashboard</a>
                                    <a class="dropdown-item" href="/user/{{Auth::user()->username}}/deposit"><span class="fa fa-folder"></span>&nbsp; Deposit</a>
                                    <a class="dropdown-item" href="/user/{{Auth::user()->username}}/investments"><span class="fa fa-folder"></span>&nbsp; My Investments</a>
                                    <a class="dropdown-item" href="/user/{{Auth::user()->username}}/withdrawal"><span class="fa fa-download"></span>&nbsp; Withdrawal</a>
                                    <a class="dropdown-item" href="/user/{{Auth::user()->username}}/downlines"><span class="fa fa-users"></span>&nbsp; Downlines</a>
                                    <a class="dropdown-item" href="contact"> <span class="fab fa-folder"></span>&nbsp; Contact Support<i class="fa fa-circle new_not text-danger"></i> </a>

                                    <div class="dropdown-divider"></div>
                                
                                    
                                 <form method="POST" action="/logout">
                            @csrf
                            <button class="dropdown-item btn btn-link" type="submit">
                                <i class="fas fa-arrow-right"></i>
                                Logout
                            </button></form>

                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                                                        <img src="/img/any.png" alt="image profile" class="avatar-img rounded" >

                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="/user/{{Auth::user()->username}}/profile" aria-expanded="true">
                            <span>
                                {{Auth::user()->username}}
                                <span class="user-level">{{Auth::user()->email}}</span>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <ul class="nav nav-primary">

                    <li class="nav-item">
                        <a href="/user/{{Auth::user()->username}}/dashboard">
                            <i class="fas fa-folder"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/user/{{Auth::user()->username}}/profile">
                            <i class="fas fa-user"></i>
                            <p>My Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  href="/user/{{Auth::user()->username}}/deposit">
                            <i class="fas fa-folder"></i>
                            <p>Wallet Deposit</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/user/{{Auth::user()->username}}/investments">
                            <i class="fas fa-folder"></i>
                            <p>My Investments</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/user/{{Auth::user()->username}}/transfer">
                            <i class="fas fa-folder"></i>
                            <p>Transfer fund</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/user/{{Auth::user()->username}}/withdrawal">
                            <i class="fas fa-download"></i>
                            <p>Withdrawal</p>
                        </a>
                        
                        <!--
                    </li>
                    <li class="nav-item">
                        <a href="/user/{{Auth::user()->username}}/downlines">
                            <i class="fas fa-users"></i>
                            <p>Downlines</p>
                        </a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a href="/user/{{Auth::user()->username}}/contact">
                            <i class="fab fa-mobile"></i>
                            <p>Contact Support</p>


                        </a>
                    </li>
                    
                    -->

                    <li class="nav-item">
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="btn btn-link" type="submit">
                                <i class="fas fa-arrow-right"></i>
                                Logout
                            </button></form>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
