<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- Favicons -->
        <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <!-- Favicons -->
        <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="" />
                <span class="d-none d-lg-block">Laravel</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <!-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div> -->
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-success badge-number">3</span> </a
                    ><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle" />
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle" />
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle" />
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>
                    </ul>
                    <!-- End Messages Dropdown Items -->
                </li>
                <!-- End Notification Nav -->

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <x-responsive-nav-link :href="route('profile.edit')" class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-gear"></i>
                                <span>
                                    {{ __('Profile') }}
                                <span>
                            </x-responsive-nav-link>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout')}}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')" class="dropdown-item d-flex align-items-center"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>{{ __('Log Out') }}</span>
                                </x-responsive-nav-link>                               
                            </form>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- End Dashboard Nav -->
            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('postmanager')}}">
                    <i class='bx bx-book' ></i>
                    <span>Publish</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->

        <main id="main" class="main">
            <div class="pagetitle position-relative">
                <h1>Data Tables</h1>
                <button type="button" class="btn btn-warning position-absolute top-0 end-0 mt-3">Go back</button>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Tables</li>
                        <li class="breadcrumb-item active">Data</li>
                    </ol>
                </nav>
                
            </div>
            <!-- End Page Title -->

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Add new post</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="subject" placeholder="Subject" value="{{$post->subject}}"/>
                                <label for="floatingName">Subject</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" name="status" aria-label="State">
                                    <option value="unpublished" selected>Unpublished</option>
                                    <option value="published">published</option>
                                </select>
                                <label for="floatingSelect">Status</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Post" id="floatingTextarea" name="post" style="height: 100px">{{$post->post}}</textarea>
                                <label for="floatingTextarea">Post</label>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                    <!-- End floating Labels Form -->
                </div>
            </div>

        </main>
        <!-- End #main -->

        <!-- Vendor JS Files -->
        <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
        <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
        <script src="{{asset('assets/vendor/quill/quill.js')}}"></script>
        <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>