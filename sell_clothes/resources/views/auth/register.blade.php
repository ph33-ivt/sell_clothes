@extends('layouts.app')

@section('content')

<!-- <div class="ht__bradcaump__area bg-image--5" style="margin:0 auto;padding-top: 50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                  
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="{{ route('home') }}">@lang('labels.home')</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">@lang('labels.login')</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div> 

<section class="my_account_area pt--80 pb--55 bg--white"style="width: 50%;margin:0 auto;margin-top: 100px;margin-bottom: 400px;" >
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="my__account__wrapper">
                    <h3 class="account__title text-center">@lang('labels.account.register')</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="account__form">
                            <div class="input__box">
                                <label>@lang('labels.account.email_address') <span>*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <div class="has-error">
                                    <i>{{ $errors->first('email') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="input__box">
                                <label>@lang('labels.account.last_name')</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}">
                                @if ($errors->has('last_name'))
                                <div class="has-error">
                                    <i>{{ $errors->first('last_name') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="input__box">
                                <label>@lang('labels.account.first_name')</label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}">
                                @if ($errors->has('first_name'))
                                <div class="has-error">
                                    <i>{{ $errors->first('first_name') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="input__box">
                                <label>@lang('labels.account.birthday')</label>
                                <input id="datepicker" type="text" name="birthday" value="{{ old('birthday') }}" autocomplete="off">
                                @if ($errors->has('birthday'))
                                <div class="has-error">
                                    <i>{{ $errors->first('birthday') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="input__box">
                                <label>@lang('labels.account.password')<span>*</span></label>
                                <input type="password" name="password">
                                @if ($errors->has('password'))
                                <div class="has-error">
                                    <i>{{ $errors->first('password') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="input__box">
                                <label>@lang('labels.account.password_confirm')<span>*</span></label>
                                <input type="password" name="password_confirmation">
                                @if ($errors->has('password_confirm'))
                                <div class="has-error">
                                    <i>{{ $errors->first('password_confirm') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="btn">
                                <button class="btn btn-primary">@lang('labels.account.register')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End My Account Area -->
<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Login/Register</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="{{route('register')}}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Login Box Area =================-->
    <section class="login_box_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="img/login.jpg" alt="">
                        <div class="hover">
                            <h4>Mới vào trang web của chúng tôi?</h4>
                        <p>Có những tiến bộ được thực hiện trong khoa học và công nghệ hàng ngày, và một ví dụ điển hình cho điều này là</p>
                        <a class="main_btn" href="{{route('register')}}">Đăng ký tài khoản</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner reg_form">
                        <h3>Tạo tài khoản</h3>
                        <form class="row login_form" method="POST" action="{{ route('register') }}" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" placeholder="Địa chỉ email *" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <div class="has-error">
                                    <i>{{ $errors->first('email') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="last_name" class="form-control" placeholder="Last name" value="{{ old('last_name') }}">
                                @if ($errors->has('last_name'))
                                <div class="has-error">
                                    <i>{{ $errors->first('last_name') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="first_name" class="form-control" placeholder="First name" value="{{ old('first_name') }}">
                                @if ($errors->has('first_name'))
                                <div class="has-error">
                                    <i>{{ $errors->first('first_name') }}</i>
                                </div>
                                @endif
                            </div>

                            <div class="col-md-12 form-group">
                                <input id="datepicker" type="text" class="form-control" name="birthday" value="{{ old('birthday') }}" autocomplete="off"placeholder="Ngày sinh" >
                                @if ($errors->has('birthday'))
                                <div class="has-error">
                                    <i>{{ $errors->first('birthday') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" class="form-control" name="password" placeholder="Mật khẩu">
                                @if ($errors->has('password'))
                                <div class="has-error">
                                    <i>{{ $errors->first('password') }}</i>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                                @if ($errors->has('password_confirm'))
                                <div class="has-error">
                                    <i>{{ $errors->first('password_confirm') }}</i>
                                </div>
                                @endif
                            </div>
                          
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn submit_btn">@lang('labels.account.register')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 
@endsection
