<ul class="nav">
    <li class="nav-item profile">
        <div class="profile-desc">
            <div class="profile-pic">
                <div class="count-indicator">
                    <img class="img-xs rounded-circle "
                        src="/admin/images/faces/face15.jpg" alt="">
                    <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                    <h5 class="mb-0 font-weight-normal">Admin</h5>
                    {{-- <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="39585d545057795e54585055175a5654">[email&#160;protected]</a></span> --}}
                </div>
            </div>
            <a href="#" id="profile-dropdown" data-toggle="dropdown"><i
                    class="mdi mdi-dots-vertical"></i></a>

        </div>
    </li>
    <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" href="/admin/index">
            <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#introduce" aria-expanded="false"
            aria-controls="page">
            <span class="menu-icon">
                <i class="mdi mdi-history"></i>
            </span>
            <span class="menu-title">Quản lý giới thiệu</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="introduce">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link"
                        href="/admin/introduce">Giới thiệu</a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#menu" aria-expanded="false"
            aria-controls="page">
            <span class="menu-icon">
                <i class="mdi mdi-history"></i>
            </span>
            <span class="menu-title">Quản lý thực đơn</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link"
                        href="/admin/menu">Thực đơn</a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#event" aria-expanded="false"
            aria-controls="page">
            <span class="menu-icon">
                <i class="mdi mdi-history"></i>
            </span>
            <span class="menu-title">Quản lý sự kiện</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="event">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link"
                        href="/admin/event">Sự kiện</a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#catalogImage" aria-expanded="false"
            aria-controls="page">
            <span class="menu-icon">
                <i class="mdi mdi-history"></i>
            </span>
            <span class="menu-title">Quản lý hình ảnh</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="catalogImage">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/catalog-image">Danh mục hình ảnh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/image">Danh sách hình ảnh</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#news" aria-expanded="false"
            aria-controls="page">
            <span class="menu-icon">
                <i class="mdi mdi-history"></i>
            </span>
            <span class="menu-title">Quản lý tin tức</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="news">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/news">Danh sách tin tức</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false"
            aria-controls="page">
            <span class="menu-icon">
                <i class="mdi mdi-history"></i>
            </span>
            <span class="menu-title">Quản lý liên hệ</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="contact">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/contact/edit">Cập nhập liên hệ</a>
                </li>
            </ul>
        </div>
    </li>


</ul>
