@extends('layouts.app')
@section('content')
     <div class="ht__bradcaump__area bg-image--6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Thông tin</h2>
                        <nav class="bradcaump-content">
                            <a class="breadcrumb_item" href="{{ route('home') }}">@lang('labels.home')</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb_item active">Thông tin</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <section id="content">
        <div class="content-wrap">
            <div class="container">
                <div class="accountSidebar bg_w" style="margin-top:10px;">
                    <div class="feature_user">
                        <div class="icon">
                            <img src="{{ asset('admin/img/avatars/icon_avatar.png') }}" alt="Nguyen Hung">
                        </div>
                        <div class="user">
                            <span>Tài khoản của:</span>
                        <h3> </h3>
                        </div>
                    </div>
                    <div class="link_account">
                        <ul>
                            <li class="active"><a href="">Thông tin chung</a></li>
                            <li class="active"><a href="">Sổ địa chỉ</a></li>
                        </ul>
                    </div>

                </div>
                <div class="ctAccount">
                    <div class="detailAccount bg_w">
                        <div class="accountInfo relative">
                            <h3>Bảng thông tin của tôi</h3>
                            <div class="user_info">
                                <h3>Thông tin tài khoản</h3>
                                <div class="main">
                                    <ul>
                                        <li>
                                            <span class="first">Họ và tên:</span>
                                            <span class="last"></span>
                                        </li>
                                        <li>
                                            <span class="first">Email: </span>
                                            <span class="last"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accountNewoder">
                            <div class="fancy-title title-bottom-border">
                                <h3 style="font-size: 16px;
                                margin-bottom: 10px;
                                color: #333;">Các đơn hàng bạn đã đặt</h3>
                            </div>
                            <div class="table-responsive account-table">
                                    <table class="js-table-sections table table-bordered table-striped table-header-bg table-vcenter">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="text-center">Ngày đặt hàng</th>
                                                    <th class="text-center">Tổng tiền</th>
                                                    <th class="text-center">Trạng thái</th>
                                                </tr>
                                            </thead>
                                            
                                                <tbody class="js-table-sections-header">
                                                    
                                                </tbody>
                                                
                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection