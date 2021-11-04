<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.partials.header')
</head>

<body>
    <div class="wrapper">
         <!-- sidebar start -->
        @include('admin.layout.partials.sidebar')
        <!-- sidebar end -->
        <div class="main">
        <!-- top navbar start -->
        @include('admin.layout.partials.navbar')
        <!-- top navbar end -->
        <!-- main conten start-0 -->
        @yield('content')
        <!-- main content end -->
        <!-- footer start-0 -->
        @include('admin.layout.partials.footer')
        <!-- footer end- -->
        </div>
    </div>

    @include('admin.layout.partials.script')
    @yield('script')
    
</body>
</html>