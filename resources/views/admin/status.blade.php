@extends('admin.layouts.master')

@section('content')
<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
    	<div style="margin-bottom: 20px;">
    		
    	</div>
        @switch($status)
            @case('pending')
            	<div class="card">
            		<div class="card-header bg-orange bg-inverse">
                        <h4>Đang chờ xử lý</h4>
                    </div>
                    <div class="card-block">
                    	<div class="table-responsive">
                    		<table class="table table-hover table-striped table-order">
        			        	<thead>
        			        		<tr>
        			        			<th>#</th>
        			        			<th>Ngày</th>
        			        			<th>Khách hàng</th>
        			        			<th>Địa chỉ</th>
        			        			<th class="text-right">Tổng tiền</th>
        			        			<th></th>
        			        		</tr>
        			        	</thead>
        				        <tbody>
        				        </tbody>
        			        </table>
        			        <div class="text-center">
        			        	
        			        </div>
                    	</div>
                    </div>
            	</div>
                @break
            @case('approved')
                <div class="card">
                    <div class="card-header bg-cyan bg-inverse">
                        <h4>Đã duyệt</h4>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-order">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ngày</th>
                                        <th>Khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th class="text-right">Tổng tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
                            <div class="text-center">
                              
                            </div>
                        </div>
                    </div>
                </div>
                @break
            @case('complete')
                <div class="card">
                    <div class="card-header bg-green bg-inverse">
                        <h4>Hoàn tất</h4>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-order">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ngày</th>
                                        <th>Khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th class="text-right">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                            <div class="text-center">
                              
                            </div>
                        </div>
                    </div>
                </div>
                @break
            @case('cancelled')
                <div class="card">
                    <div class="card-header bg-red bg-inverse">
                        <h4>Đã hủy</h4>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-order">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ngày</th>
                                        <th>Khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th class="text-right">Tổng tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                            <div class="text-center">
                             
                            </div>
                        </div>
                    </div>
                </div>
                @break
        @endswitch
    </div>
    <!-- End Page Content -->

</main>

@endsection

