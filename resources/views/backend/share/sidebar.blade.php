<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Dashboard</li>

                <li>
                    <a href="{{ URL::to('/admin/dashboard') }}">
                        <i class="fal fa-tachometer-alt-fastest"></i>
                        <span class="badge badge-success badge-pill float-right">2</span>
                        <span> Dashboard </span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
            <li><a href="index.html">Dashboard 1</a></li>
            <li> <a href="dashboard-2.html">Dashboard 2</a></li>
          </ul> --}}
                </li>

                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ url('/admin/slider') }}">
                        <i class="fal fa-images"></i>
                        <span> Slider </span>
                        {{-- <span class="menu-arrow"></span> --}}
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fal fa-file-edit"></i>
                        <span> Bài viết </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ URL::to('/admin/category-post/') }}">Danh Mục Bài Viết</a></li>
                        <li><a href="{{ URL::to('/admin/post') }}">Bài Viết </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-tasks"></i>
                        <span> Danh mục </span>
                        {{-- <span class="menu-arrow"></span> --}}
                    </a>

                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fab fa-product-hunt"></i>
                        
                        <span> Sản phẩm </span>
                       
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        @can('product-list')
                        <li><a href="{{ URL::to('/admin/product/') }}">Sản phẩm</a></li>
                        @endcan
                        @can('category-product-list')
                        <li><a href="{{ URL::to('/admin/category-product') }}">Danh Mục  sản phẩm</a></li>
                        @endcan
                        @can('brand-list')
                        <li><a href="{{ URL::to('/admin/brand') }}">Thương hiệu sản phẩm </a></li>
                        @endcan
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fal fa-comment-alt-lines"></i>
                        <span> Bình luận</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fal fa-tachometer-alt-fastest"></i>
                        <span class="badge badge-success badge-pill float-right">6</span>
                        <span> Đơn hàng</span>
                    </a>
                </li>

                <li>
                @can('user-list','roles-list')
                    <a href="javascript: void(0);">
                        <i class="fal fa-users-cog"></i>
                        <span> Thành viên</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @can('user-list')
                        <li><a href="{{ URL::to('/admin/user') }}">Thành Viên </a></li>
                        @endcan
                        @can('roles-list')
                        <li><a href="{{ URL::to('/admin/roles') }}">Quản Trị Viên </a></li>
                        @endcan
                    </ul>
                @endcan
                </li>
                <li>
                @can('permission-list')
                    <a href="javascript: void(0);">
                        <i class="fas fa-database"></i>
                        
                        <span>permission</span>
                       
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ URL::to('/admin/permission/create-permission') }}">Tạo permission </a></li>

                    </ul>
                 @endcan
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
</div>
