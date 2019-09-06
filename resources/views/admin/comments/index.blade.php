@extends('admin.layouts.master')
@section('content')

<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="card">
            <div class="card-header">
                <h4> COMMENT</h4>
            </div>
            <h1>Chưa làm ĐƯỢC :D</h1>
        </div>
    </div>
    <!-- End Page Content -->

</main>

@endsection

@section('javascript')

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/app-custom.js') }}"></script>

@endsection
