<!DOCTYPE html>
<html>
    <head>
        @include('Admin.includes.head')
        @yield('mystyles')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            @include('Admin.includes.header')
            <!-- Left side column. contains the logo and sidebar -->
            @include('Admin.includes.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div><!-- /.content-wrapper -->

            @include('Admin.includes.footer')

        </div><!-- ./wrapper -->
        @include('Admin.includes.foot')
          @yield('myscripts')
    </body>
</html>
