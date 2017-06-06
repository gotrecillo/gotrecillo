@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}"
                         class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('admin.sidebar.online') }}</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">{{ trans('admin.sidebar.contents') }}</li>
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/page') }}">
                        <i class="fa fa-file-o"></i> <span>{{ trans('admin.sidebar.pages') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/menu-item') }}">
                        <i class="fa fa-list"></i> <span>{{ trans('admin.sidebar.menu') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/setting') }}">
                        <i class="fa fa-cog"></i> <span>{{ trans('admin.sidebar.settings') }}</span>
                    </a>
                </li>

                <li class="header">{{ trans('backpack::base.administration') }}</li>
                <!-- ================================================ -->
                <!-- ==== Recommended place for admin menu items ==== -->
                <!-- ================================================ -->
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}">
                        <i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}">
                        <i class="fa fa-files-o"></i> <span>{{ trans('admin.sidebar.file-mamager') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language') }}">
                        <i class="fa fa-flag-o"></i> <span>{{ trans('admin.sidebar.languages') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/backup') }}">
                        <i class="fa fa-hdd-o"></i> <span>{{ trans('admin.sidebar.backups') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logs') }}">
                        <i class="fa fa-terminal"></i> <span>{{ trans('admin.sidebar.logs') }}</span>
                    </a>
                </li>

                <!-- ======================================= -->
                <li class="header">{{ trans('backpack::base.user') }}</li>
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}">
                        <i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
@endif
