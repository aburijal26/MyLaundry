<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('admin/img/profile.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?= $nama_lengkap; ?>
                            <span class="user-level">@<?= $User_Name; ?></span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="/login/logout">
                                    <span class="link-collapse">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?= ($current_uri == "dashboard") ? "active" : "" ?>">
                    <a href="/dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Halaman Utama</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Main</h4>
                </li>
                <li class="nav-item <?= ($current_uri == "profile") ? "active" : "" ?>">
                    <a href="/profile" class="collapsed" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item <?= ($current_uri == "delivery") ? "active" : "" ?>">
                    <a href="/delivery" class="collapsed" aria-expanded="false">
                        <i class="fas fa-truck"></i>
                        <p>Delivery</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->