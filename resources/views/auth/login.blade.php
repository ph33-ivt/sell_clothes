@extends('layouts.app')

@section('content')

<section class="my_account_area pt--80 pb--55 bg--white" style="padding-top: 100px;padding-bottom: 100px;margin-left: 25%">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="my__account__wrapper">
                    <h3 class="account__title text-center">@lang('labels.account.login')</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="account__form">
                            <div class="input__box">
                                <label>@lang('labels.account.email_address') <span>*</span></label>
                                <input type="text" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <div class="has-error">
                                    <i>{{ $errors->first('email') }}</i>
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
                            <div class="form__btn">
                                <button type="submit" class="btn btn-primary">@lang('labels.account.login')</button>
                            </div>
                            <a class="forget_pass" href="{{ route('password.request') }}">@lang('labels.account.forgot_password')?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

