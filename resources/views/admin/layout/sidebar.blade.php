<div id="app" class="app">

    <div id="header" class="app-header">

        <div class="desktop-toggler">
            <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>



        <div class="mobile-toggler">
            <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>



        <div class="brand">
            <a href="index.html" class="brand-logo">
                <span class="brand-img">
                    <span class="brand-img-text text-theme">F</span>
                </span>
                <span class="brand-text">Efty
                    <span style="font-size: 9px;
                        letter-spacing: 1px;
                        font-weight: bold;
                        position: absolute;
                        opacity: .5;
                        top: 5px;
                        margin-left: -15px;">
                    </span>
                </span>
            </a>
        </div>



        <div class="menu">
            <div class="menu-item dropdown">
                <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app" class="menu-link">
                    <div class="menu-icon"><i class="bi bi-search nav-icon"></i></div>
                </a>
            </div>
            <div class="menu-item dropdown dropdown-mobile-full">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                    <div class="menu-icon"><i class="bi bi-grid-3x3-gap nav-icon"></i></div>
                </a>
                <div class="dropdown-menu fade dropdown-menu-end w-300px text-center p-0 mt-1">
                    <div class="row row-grid gx-0">
                        <div class="col-4">
                            <a href="email_inbox.html" class="dropdown-item text-decoration-none p-3 bg-none">
                                <div class="position-relative">
                                    <i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
                                    <i class="bi bi-envelope h2 opacity-5 d-block my-1"></i>
                                </div>
                                <div class="fw-500 fs-10px text-inverse">INBOX</div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="pos_customer_order.html" target="_blank" class="dropdown-item text-decoration-none p-3 bg-none">
                                <div><i class="bi bi-hdd-network h2 opacity-5 d-block my-1"></i></div>
                                <div class="fw-500 fs-10px text-inverse">POS SYSTEM</div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="calendar.html" class="dropdown-item text-decoration-none p-3 bg-none">
                                <div><i class="bi bi-calendar4 h2 opacity-5 d-block my-1"></i></div>
                                <div class="fw-500 fs-10px text-inverse">CALENDAR</div>
                            </a>
                        </div>
                    </div>
                    <div class="row row-grid gx-0">
                        <div class="col-4">
                            <a href="helper.html" class="dropdown-item text-decoration-none p-3 bg-none">
                                <div><i class="bi bi-terminal h2 opacity-5 d-block my-1"></i></div>
                                <div class="fw-500 fs-10px text-inverse">HELPER</div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="settings.html" class="dropdown-item text-decoration-none p-3 bg-none">
                                <div class="position-relative">
                                    <i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
                                    <i class="bi bi-sliders h2 opacity-5 d-block my-1"></i>
                                </div>
                                <div class="fw-500 fs-10px text-inverse">SETTINGS</div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="widgets.html" class="dropdown-item text-decoration-none p-3 bg-none">
                                <div><i class="bi bi-collection-play h2 opacity-5 d-block my-1"></i></div>
                                <div class="fw-500 fs-10px text-inverse">WIDGETS</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item dropdown dropdown-mobile-full">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                    <div class="menu-icon"><i class="bi bi-bell nav-icon"></i></div>
                    <div class="menu-badge bg-theme"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end mt-1 w-300px fs-11px pt-1">
                    <h6 class="dropdown-header fs-10px mb-1">NOTIFICATIONS</h6>
                    <div class="dropdown-divider mt-1"></div>
                    <a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
                        <div class="fs-20px">
                            <i class="bi bi-bag text-theme"></i>
                        </div>
                        <div class="flex-1 flex-wrap ps-3">
                            <div class="mb-1 text-inverse">NEW ORDER RECEIVED ($1,299)</div>
                            <div class="small text-inverse text-opacity-50">JUST NOW</div>
                        </div>
                        <div class="ps-2 fs-16px">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
                        <div class="fs-20px w-20px">
                            <i class="bi bi-person-circle text-theme"></i>
                        </div>
                        <div class="flex-1 flex-wrap ps-3">
                            <div class="mb-1 text-inverse">3 NEW ACCOUNT CREATED</div>
                            <div class="small text-inverse text-opacity-50">2 MINUTES AGO</div>
                        </div>
                        <div class="ps-2 fs-16px">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
                        <div class="fs-20px w-20px">
                            <i class="bi bi-gear text-theme"></i>
                        </div>
                        <div class="flex-1 flex-wrap ps-3">
                            <div class="mb-1 text-inverse">SETUP COMPLETED</div>
                            <div class="small text-inverse text-opacity-50">3 MINUTES AGO</div>
                        </div>
                        <div class="ps-2 fs-16px">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
                        <div class="fs-20px w-20px">
                            <i class="bi bi-grid text-theme"></i>
                        </div>
                        <div class="flex-1 flex-wrap ps-3">
                            <div class="mb-1 text-inverse">WIDGET INSTALLATION DONE</div>
                            <div class="small text-inverse text-opacity-50">5 MINUTES AGO</div>
                        </div>
                        <div class="ps-2 fs-16px">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
                        <div class="fs-20px w-20px">
                            <i class="bi bi-credit-card text-theme"></i>
                        </div>
                        <div class="flex-1 flex-wrap ps-3">
                            <div class="mb-1 text-inverse">PAYMENT METHOD ENABLED</div>
                            <div class="small text-inverse text-opacity-50">10 MINUTES AGO</div>
                        </div>
                        <div class="ps-2 fs-16px">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </a>
                    <hr class="my-0">
                    <div class="py-10px mb-n2 text-center">
                        <a href="#" class="text-decoration-none fw-bold">SEE ALL</a>
                    </div>
                </div>
            </div>
            <div class="menu-item dropdown dropdown-mobile-full">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                    <div class="menu-img online">
                        <img src="assets/img/user/profile.jpg" alt="Profile" height="60">
                    </div>
                    <div class="menu-text d-sm-block d-none w-170px"><span class="__cf_email__" data-cfemail="34414751465a555951745557575b415a401a575b59">[email&#160;protected]</span></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                    <a class="dropdown-item d-flex align-items-center" href="profile.html">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
                    <a class="dropdown-item d-flex align-items-center" href="email_inbox.html">INBOX <i class="bi bi-envelope ms-auto text-theme fs-16px my-n1"></i></a>
                    <a class="dropdown-item d-flex align-items-center" href="calendar.html">CALENDAR <i class="bi bi-calendar ms-auto text-theme fs-16px my-n1"></i></a>
                    <a class="dropdown-item d-flex align-items-center" href="settings.html">SETTINGS <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.logout') }}">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
                </div>
            </div>
        </div>



        <form class="menu-search" method="POST" name="header_search_form">
            <div class="menu-search-container">
                <div class="menu-search-icon"><i class="bi bi-search"></i></div>
                <div class="menu-search-input">
                    <input type="text" class="form-control form-control-lg" placeholder="Search menu...">
                </div>
                <div class="menu-search-icon">
                    <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
                </div>
            </div>
        </form>

    </div>



    <div id="sidebar" class="app-sidebar">

        <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

            <div class="menu">
                <div class="menu-header">Navigation</div>
                <div class="menu-item">
                    <a href="{{ route('admin') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </div>

                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="menu-text">Profile</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('profile') }}" class="menu-link">
                                <span class="menu-text">Profile</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('profile.add') }}" class="menu-link">
                                <span class="menu-text">Profile Add </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-address-card"></i>
                        </span>
                        <span class="menu-text">About</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('about') }}" class="menu-link">
                                <span class="menu-text">About</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('about.add') }}" class="menu-link">
                                <span class="menu-text">About Add </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-address-card"></i>
                        </span>
                        <span class="menu-text">Testimonials</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('testimonial') }}" class="menu-link">
                                <span class="menu-text">Testimonial</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('testimonial.add') }}" class="menu-link">
                                <span class="menu-text">Testimonial Add </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-brands fa-servicestack"></i>
                        </span>
                        <span class="menu-text"> Services   </span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('service') }}" class="menu-link">
                                <span class="menu-text">Services</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('service.add') }}" class="menu-link">
                                <span class="menu-text">Service Add </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-mug-hot"></i>
                        </span>
                        <span class="menu-text"> Clients   </span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('client') }}" class="menu-link">
                                <span class="menu-text">Clients</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('client.add') }}" class="menu-link">
                                <span class="menu-text">Client Add </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-face-smile"></i>
                        </span>
                        <span class="menu-text"> Funs   </span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('fun') }}" class="menu-link">
                                <span class="menu-text">Funs</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('fun.add') }}" class="menu-link">
                                <span class="menu-text">Fun Add </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-face-smile"></i>
                        </span>
                        <span class="menu-text"> Categorys   </span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('category') }}" class="menu-link">
                                <span class="menu-text">Categorys</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('category.add') }}" class="menu-link">
                                <span class="menu-text">Category Add </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-file"></i>
                        </span>
                        <span class="menu-text"> Resume   </span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('resume') }}" class="menu-link">
                                <span class="menu-text">Resumes</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('resume.add') }}" class="menu-link">
                                <span class="menu-text">Resume Add </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="menu-text"> Portfolio   </span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('portfolio') }}" class="menu-link">
                                <span class="menu-text">Portfolio</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('portfolio.add') }}" class="menu-link">
                                <span class="menu-text">Portfolio Add </span>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>



    <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


    @yield('content')


    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


    <div class="app-theme-panel">
        <div class="app-theme-panel-container">
            <a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
            <div class="app-theme-panel-content">
                <div class="small fw-bold text-inverse mb-1">Display Mode</div>
                <div class="card mb-3">

                    <div class="card-body p-2">
                        <div class="row gx-2">
                            <div class="col-6">
                                <a href="javascript:;" data-toggle="theme-mode-selector" data-theme-mode="dark" class="app-theme-mode-link active">
                                    <div class="img"><img src="assets/img/mode/dark.jpg" class="object-fit-cover" height="76" width="76" alt="Dark Mode"></div>
                                    <div class="text">Dark</div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:;" data-toggle="theme-mode-selector" data-theme-mode="light" class="app-theme-mode-link">
                                    <div class="img"><img src="assets/img/mode/light.jpg" class="object-fit-cover" height="76" width="76" alt="Light Mode"></div>
                                    <div class="text">Light</div>
                                </a>
                            </div>
                        </div>
                    </div>



                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

                <div class="small fw-bold text-inverse mb-1">Theme Color</div>
                <div class="card mb-3">

                    <div class="card-body p-2">

                        <div class="app-theme-list">
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                            <div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                            <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
                        </div>

                    </div>



                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

                <div class="small fw-bold text-inverse mb-1">Theme Cover</div>
                <div class="card">

                    <div class="card-body p-2">

                        <div class="app-theme-cover">
                            <div class="app-theme-cover-item active">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-1.jpg);" data-theme-cover-class="" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a>
                            </div>
                            <div class="app-theme-cover-item">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-2.jpg);" data-theme-cover-class="bg-cover-2" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 2">&nbsp;</a>
                            </div>
                            <div class="app-theme-cover-item">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-3.jpg);" data-theme-cover-class="bg-cover-3" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 3">&nbsp;</a>
                            </div>
                            <div class="app-theme-cover-item">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-4.jpg);" data-theme-cover-class="bg-cover-4" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 4">&nbsp;</a>
                            </div>
                            <div class="app-theme-cover-item">
                                <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-5.jpg);" data-theme-cover-class="bg-cover-5" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 5">&nbsp;</a>
                            </div>
                        </div>

                    </div>



                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
