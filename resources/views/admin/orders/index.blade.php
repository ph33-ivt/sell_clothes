@extends('admin.layouts.master')

@section('content')
   <main class="app-layout-content">
<!-- Page Content -->
    <div class="table table-striped table-dark">
    <table class="table">
        <h2>THÔNG TIN ĐƠN HÀNG</h2>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <thead >
            <tr class="bg-info">
                <th>ID</th>
                <th>Name</th>
                <th>Telephone</th>
                <th>Address</th>
                <th>Total</th>
                <th>Status</th>
                <th>Order date</th>
                <th style="width:100px"></th>
            </tr>
        </thead> 
        <tbody>
            @foreach($orders as $order)
                <tr class="bg-warning">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->orderInfo->fullname }}</td>
                    <td>{{ $order->orderInfo->phone }}</td>
                    <td>{{ $order->orderInfo->address }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ date_format($order->created_at, 'd-m-Y H:i:s') }}</td>
                    <td>
                        <a href="{{ route('admin.order.detail', ['id' => $order->id ])}}" class="btn btn-xs btn-default" title="Chi tiết"><i class="ion-android-locate"></i>
                        </a>
                        <form method="POST" action="{{ route('admin.order.destroy', ['id' => $order->id ])}}" style="display: inline;" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-xs btn-default"><i class="ion-android-delete"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
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

    <!-- Page JS Code -->
    <script>

        $(document).ready(function () {

            //view order details when click a tr
            $(document).on('click', 'tr.order', function(event) {
                event.preventDefault();
                
                href = $(this).attr('href');
                window.location.replace(href);
            });

            $("table a, table button").on("click", function () {
                $(document).unbind("click");
            });

            $('button#btn-delete').on('click', function(event) {
                event.preventDefault();
                
                if (confirm('Bạn muốn hủy đơn hàng này?')) {
                    $(this).parent().children('form#order-cancelled-form').submit();
                }
            });
        });
        
    </script>

@endsection
