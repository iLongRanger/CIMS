    <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-purple sidebar-mini">
<div id="app" v-cloak>
    <div class="wrapper">


        @include('adminlte::layouts.partials.mainheader')

        @if (Auth::user()->department->name == "Human Resources")
            @include('adminlte::layouts.partials.sidebars.hrsidebar')
        @elseif (Auth::user()->department->name  == "Head Office")
            @include('adminlte::layouts.partials.sidebars.sidebar')
        @elseif (Auth::user()->department->name  == "Legal")
            @include('adminlte::layouts.partials.sidebars.legal-sidebar')
        @elseif (Auth::user()->department->name  == "Spa")
            @include('adminlte::layouts.partials.sidebars.spa-sidebar')
        @elseif (Auth::user()->department->name  == "Auditing")
            @include('adminlte::layouts.partials.sidebars.auditing-sidebar')
        @elseif (Auth::user()->department->name  == "Accounting")
            @include('adminlte::layouts.partials.sidebars.accounting-sidebar')
        @elseif (Auth::user()->department->name  == "Handyman Repairs")
            @include('adminlte::layouts.partials.sidebars.handyman-sidebar')
        @elseif (Auth::user()->department->name  == "Marketing")
            @include('adminlte::layouts.partials.sidebars.marketing-sidebar')
        @endif


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @include('adminlte::layouts.partials.contentheader')
                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->
                    @yield('main-content')
                </section><!-- /.content -->
               
            </div><!-- /.content-wrapper -->

        @include('adminlte::layouts.partials.footer')
        @include('adminlte::layouts.partials.controlsidebar')
    </div>
     
</div>


@section('scripts')
    @include('adminlte::layouts.partials.scripts')
    <script src="/js/datatable.js" type="text/javascript"></script>
    @stack('scripts')
    <link href='/css/datatable.css' rel='stylesheet' type='text/css'>
@show

</body>
</html>
