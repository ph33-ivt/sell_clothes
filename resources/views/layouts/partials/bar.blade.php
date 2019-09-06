<div class="header-top gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 hidden-xs">
                    <div class="header-top-left">
                        <ul class="header-top-style text-capitalize mr-25">
                            <li><a href=""><span>@lang('labels.my_account')</span></a>
                                <ul class="ul-style my-account box-shadow black-bg">
                                    @guest
										<li>
											<span><a href="{{ route('login') }}">@lang('labels.login')</a></span>
										</li>
										<li>
											<span><a href="{{ route('register') }}">@lang('labels.register')</a></span>
										</li>
										<li>
											<span><a href="{{ route('password.request') }}">@lang('labels.forgot_password')</a></span>
										</li>
									@else
										<li>
											@if (Auth::user()->role_id == 1)
												<li>
													<span><a href="{{ route('admin.dashboard') }}">Quản trị viên</a></span>
												</li>
												
											@else
												<li>
													<span><a href="{{ route('users.index') }}">{{ Auth::user()->first_name }}</a></span>
												</li>
												
											@endif
											<li>
												<span>
												<a class="dropdown-item" href="{{ route('logout') }}"
		                                   onclick="event.preventDefault();
		                                                     document.getElementById('logout-form').submit();">
				                                    @lang('labels.logout')
				                                </a>
											</span>
											</li>
												

			                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                    @csrf
			                                </form>
										</li>
									@endguest
                                </ul>

                            </li>
                        </ul>
                       
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="header-top-middle">
                       
                        
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="header-top-right">
                        <span class="mr-20"><a href="#"><img alt="" src="images/header/search-icon.png"></a></span>
                        <span><input type="text" class="pl-10" placeholder="Search..."></span>
                    </div>
                    <div class="topnav">
						<a href="/" class="active">Home</a>
					</div>
                </div>
            </div>
        </div>
    </div>