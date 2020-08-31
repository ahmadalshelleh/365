
@section('sidebar')
<div class="white-container">
    <div class="row">
        <img src="/logo.jpg" class="patient-sidebar-image">
    </div><br />
    <div class="row">
        <div class="text-center patient-sidebar-header">
            <h6>ahmad</h6>
            <div class="patient-details">
                <h6 class="mb-0"><i class="fa fa-map-marker"></i></h6>
            </div>
        </div>
    </div><br />
    <div class="row sidebar-line">
        <div class="sidebar-links-div">
            <a href="/Patient/Appointments" class="sidebar-links">
                <i class="fa fa-columns"></i>
                <span>لوحة التحكم</span>
            </a>
        </div>
    </div>
    <div class="row sidebar-line">
        <div class="sidebar-links-div">
            <a href="/Patient/Profile" class="sidebar-links">
                <i class="fa fa-user"></i>
                <span>الملف الشخصي</span>
            </a>
        </div>
    </div>
    <div class="row sidebar-line">
        <div class="sidebar-links-div">
            <a href="/Patient/ChangePassword" class="sidebar-links">
                <i class="fa fa-lock"></i>
                <span>تغيير كلمة المرور</span>
            </a>
        </div>
    </div>
    <div class="row sidebar-line">
        <div class="sidebar-links-div">
            <a href="/Patient/Logout" class="sidebar-links">
                <i class="fa fa-sign-out"></i>
                <span>تسجيل الخروج</span>
            </a>
        </div>
    </div>
</div>

    @section('sidebar')