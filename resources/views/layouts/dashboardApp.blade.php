<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/dashboard_style.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/pages-style.css">
    <link rel="stylesheet" href="/calendar/simple-calendar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput-jquery.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <link href="/tagEditor/jquery.tag-editor.css" rel="stylesheet">
    <script src="/tagEditor/jquery.tag-editor.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <link href="/tagEditor/jquery.tag-editor.css" rel="stylesheet" type="text/css" />
    <script src="/tagEditor/jquery.caret.min.js"></script>
    <script scr="/tagEditor/jquery.tag-editor.min.js"></script>

    <script src="/calendar/jquery.simple-calendar.js"></script>
    <script src="/js/dashboard_jquery.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="/js/pages.js"></script>
    <script src="/js/auth.js"></script>
    @yield('header')
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-style">
        <a class="navbar-brand" href="/admin/dashboard">
            <img src="/white_logo.png"  class="navbar-image"/>
        </a>

        <div id="navbarSupportedContent">
            <div class="navbar-nav mr-auto">
                <a href="#menu-toggle" class="float-right" id="menu-toggle"><img src="/open-menu.png" class="menu-toggle"/></a>
            </div>
            <div class="btn-group">
                <div class="dropdown-user-navbar dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="dropdown-user-navbar_image" src="/uploads/images/{{$_COOKIE['image']}}" /><span class="dropdown-user-navbar-name">{{$_COOKIE['name']}}</span>
                </div>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button" id="logoutButton">Logout</button>
                </div>
            </div>
        </div>
    </nav>
</header>
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li>
                <div class="wrapper wrapper1"  id="wrapper_1">
                    <p class="click-text">
                        Orders <span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/orders">Orders</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_2">
                    <p class="click-text">
                        Specialization<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/specialization/add">Add Specialization</a></li>
                        <li><a href="/admin/specialization">Specializations</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_3">
                    <p class="click-text">
                        Doctors<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/doctors/add">Add Doctor</a></li>
                        <li><a href="/admin/doctors">Doctors</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_4">
                    <p class="click-text">
                        Patients<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/patients/add">Add Patient</a></li>
                        <li><a href="/admin/patients">Patients</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_5">
                    <p class="click-text">
                        Clinic<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/clinic/add">Add Clinic</a></li>
                        <li><a href="/admin/clinic">Clinic</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_6">
                    <p class="click-text">
                        Insurance<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/insurance/add">Add Insurance</a></li>
                        <li><a href="/admin/insurance">Insurance</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_7">
                    <p class="click-text">
                        Duration<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/duration/add">Add Duration</a></li>
                        <li><a href="/admin/duration">Appointment Duration</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_8">
                    <p class="click-text">
                        Countries<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/country/add">Add Country</a></li>
                        <li><a href="/admin/country">Countries</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_9">
                    <p class="click-text">
                        Cities<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/city/add">Add City</a></li>
                        <li><a href="/admin/city">Cities</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_10">
                    <p class="click-text">
                        Areas<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/area/add">Add Area</a></li>
                        <li><a href="/admin/area">Areas</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_11">
                    <p class="click-text">
                        Drugs<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/drug/add">Add Drug</a></li>
                        <li><a href="/admin/drug">Drugs</a></li>
                        <li><a href="/admin/drug/ingredient/add">Add Drug INGREDIENT</a></li>
                        <li><a href="/admin/drug/ingredient">Drugs INGREDIENT</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_12">
                    <p class="click-text">
                        Pharmacies<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/pharmacy/add">Add Pharmacy</a></li>
                        <li><a href="/admin/pharmacy">Pharmacies</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="wrapper wrapper1"  id="wrapper_13">
                    <p class="click-text">
                        Users<span class="arrow"></span>
                    </p>
                    <ul>
                        <li><a href="/admin/user/add">Add User</a></li>
                        <li><a href="/admin/users">Users</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->




    <!-- Page Content -->
    <div class="body-footer-scroll">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    <br/>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <p class="footer-paragraph footer-text text-center">
                        2018 - DateTime.Now.Year © 36point6 admin.
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </footer>
    </div>
</div>


<br/>
</body>
</html>