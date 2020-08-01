<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard.home')}}" class="brand-link">
        <img src="{{asset('back-design/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('back-design/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('dashboard.home')}}" class="d-block">{{GetNameAdmin()}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                {{--start list--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Doctors
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show-all-doctors')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All-Doctors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add-doctor-form')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-New Doctors</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--end list--}}

                {{--start list--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Department
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show-all-departments')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All-Departments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add-department-form')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-New-Department</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--end list--}}

                {{--Start list--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Gallery

                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('add-gallery-form')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('gallery-show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Gallery</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{--end list--}}

                {{--start list--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('add-post-form')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Post</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('show-all-posts')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Posts</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{--end list--}}

                {{--start list--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            About-Us
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('add-about-information')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Data-About-Us</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('show-information')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Data-About-Us</p>
                            </a>
                        </li>


                    </ul>
                </li>
                {{--end list--}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
