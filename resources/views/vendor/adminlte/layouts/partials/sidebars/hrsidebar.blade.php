<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Auth::user()->photo ? $user->photo->file:'/img/avatar.png'}}" class="img-circle" alt="User Image" />

                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
    @endif

    <!-- search form (Optional)
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <!-- Optionally, you can add icons to the links -->
            <li class="active">
                <a href="{{ url('home') }}"><i class='fa fa-home text-red'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a>
            </li>
            <li class="header text-center"><span>Human Resources</span></li>
            <li class="treeview">
                <a href=""><i class="fa fa-user text-purple"></i><span>Employees</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/employees"><i class="fa fa-users text-blue"></i><span>All Employees</span></a></li>
                    <li><a href="/employees/create"><i class="fa fa-user-plus text-success"></i><span>New Employee</span></a></li>
                </ul>

            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

