<!doctype html>
<html class="no-js" lang="en">
@include('includes.head')
<body>

@include('includes.navbar')
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>
        </div>
    </div>

    @include('includes.header')

    @yield('content')
</div>



@include('includes.footer')
@include('includes.script')
</body>
</html>
