<!DOCTYPE html>
<html lang="en">
@include('cp.includes.head')
<body>

<div id="wrapper">

    <!-- Navigation -->
    @include('cp.includes.navbar')

    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@include('cp.includes.js')
</body>
</html>
