<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/patients_style.css">
    <link rel="stylesheet" href="/css/doctors_style.css">

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

    <link href="/tagEditor/jquery.tag-editor.css" rel="stylesheet">
    <script src="/tagEditor/jquery.tag-editor.min.js"></script>
    <script src="/tagEditor/jquery.caret.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>


    <script src="/js/jquery.js"></script>
    <script src="/js/auth.js"></script>
    <script src="/js/public.js"></script>

    @yield('header')
    <title>@yield('title')</title>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light navbar-style">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto ul-navbar">
                        <li class="nav-item">
                            <a class="nav-link navbar-link links" href="/doctors/dashboard">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-link links" href="/doctors/appointments">المواعيد</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-link links" href="/doctors/profiles">ملفات المرضى</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-link links" href="/doctors/reviews">التقييم</a>
                        </li>
                        <li class="nav-item">
                            {{--                            <a class="nav-link navbar-link links" href="#"> اعدادات<i class="fa fa-caret-down arrow-options" aria-hidden="true"></i></a>--}}
                            <a class="nav-link dropdown-toggle navbar-link links" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                اعدادات
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"> مرحبا بك دكتور {{$_COOKIE['name']}}</a>
                                <a class="dropdown-item" href="/doctors/diaries"> الملفات المرسلة للمرضى </a>
                                <a class="dropdown-item" href="/doctors/prescriptions"> الوصفات الطبية المرسلة للمرضى </a>
                                <a class="dropdown-item"href="/doctors/profile/add">اضافة مريض جديد</a>
                                <a class="dropdown-item"href="/doctors/resetPassword">تعديل كلمة المرور</a>
                                <a class="dropdown-item"href="/doctors/updateProfile/{{$_COOKIE['idu']}}">تعديل الملف الشخصي</a>
                                <a class="dropdown-item"href="/doctors/updateWorkingHours">تعديل ساعات العمل</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link navbar-link last-link" href="#" id="logoutButton"><i class="fa fa-caret-left arrow-logout" aria-hidden="true"></i>تسجيل الخروج <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="/doctors/dashboard"><img src="/logo.png" alt="" class="img-responsive navbar-image"></a>
            </nav>
        </div>
    </div>
</header>
@yield('content')
<br/>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p class="footer-paragraph footer-text">
                    <a href="https://www.36point6.com" target="_blank">36point6</a> © كل الحقوق محفوظة - من 2018 حتى 2020 -برمج بواسطة
                    <a href="http://www.o-minus.com/"><img src="/company-logo.jpg" class="footer-image"></a>
                </p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</footer>
<br/>
</body>
</html>