@extends('layouts.app')

@section('content')
<section class="my_account_area pt--80 pb--55 bg--white" style="padding-top: 100px;padding-bottom: 100px;margin-left: 25%">
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
                            <div class="form__btn">
                                <button type="submit" class="btn btn-primary">@lang('labels.account.register')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
