<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="{{ asset('assets/admin/img/logo.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a href="{{url('admin')}}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt>
                </div>
                <span>Dashboard</span>
            </a>
            
        </li>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Quản lý bài viết</span>
            </a>
            <ul>
                <li><a href="{{url('admin/products')}}">Danh sách bài viết</a></li>
                <li><a href="{{url('admin/products/create')}}">Thêm bài viết</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Quản lý danh mục</span>
            </a>
            <ul>
                <li><a href="{{url('admin/categories')}}">Danh sách danh mục</a></li>
                <li><a href="{{url('admin/categories/create')}}">Thêm danh mục</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Quản lý người dùng</span>
            </a>
            <ul>
                <li><a href="{{url('admin/users')}}">Danh sách người dùng</a></li>
                <li><a href="{{url('admin/users/create')}}">Thêm người dùng</a></li>
            </ul>
        </li>
    </ul>
</nav>
