@include('admin.layout.style')

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        @include('admin.layout.header')

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        @include('admin.layout.sidebar')

        <!-- =============================================== -->

        @yield('content')

        @include('admin.layout.footer')

        <!-- jQuery 3 -->
        @include('admin.layout.scripts')
</body>

</html>