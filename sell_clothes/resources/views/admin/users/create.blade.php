@extends('admin.layouts.master')
@section('content')

<main class="app-layout-content">
  
  <div class="container-fluid p-y-md">
      <!-- Card Tabs -->
      <h2 class="section-title" style="text-align: center">Quản lý người dùng</h2>
        <div class="row">
          <div class="col-md-12">
          <!-- Card Tabs Default Style -->
            <div class="card">
              <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active">
                  <a href="#btabs-static-home">Tạo mới người dùng</a>
                </li>
              </ul>
              <div class="card-block tab-content">
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
                <div class="tab-pane fade in active" id="profile-tab1">
                  <form class="fieldset" action="{{ route('admin.user.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Xin mời bạn nhập email" />
                        <p class="meserr">{{ $errors->first('email') }}</p>
                      </div>
                      <div class="col-xs-6">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Xin mời bạn nhập mật khẩu" />
                        <p class="meserr">{{ $errors->first('password') }}</p>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>First name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" />
                        <p class="meserr">{{ $errors->first('first_name') }}</p>
                      </div>
                      <div class="col-xs-6">
                        <label>Last name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" />
                        <p class="meserr">{{ $errors->first('last_name') }}</p>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-4">
                        <label>Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" />
                        <p class="meserr">{{ $errors->first('birthday') }}</p>
                      </div>
                      <div class="col-xs-4">
                        <label>Sex</label>
                          <select class="form-control" name="sex">
                          <option>Male</option>
                          <option>Female</option>
                          </select>
                          <p class="meserr">{{ $errors->first('sex') }}</p>
                      </div>    
                      <div class="col-xs-4">
                        <label for="formGroupExampleInput">Role_name</label>
                              <select class="form-control" name="role_id">
                              @foreach ($roles as $key => $value)
                              <option value="{{ $key }}">{{ $value }}</option>
                              @endforeach
                              </select>
                              <p class="meserr">{{ $errors->first('role_id') }}</p>
                      </div>
                    </div>
        
                          <button style="margin-left: 270px" class="btn btn-primary">Thêm mới</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>  

    @if (session('type'))
      <div id="message" type="{{ session('type') }}" message="{{ session('message') }}"></div>
    @endif
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

<!-- Page Plugins -->
<script src="{{ asset('admin/js/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.stack.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.min.js') }}"></script>

<script>
    jQuery(document).ready(function($) {
      if ($('#message').length) {
        type = $('#message').attr('type');
        message = $('#message').attr('message');

        $.notify({
          title: '<strong>' + message + '</strong>',
          message: ''
        }, {
          element: 'body',
          type: type
          });
      }
    });
  </script>
  
@endsection
