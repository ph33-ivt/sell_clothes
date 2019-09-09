<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://salt.tikicdn.com/desktop/img/avatar.png?v=3" height="25" width="25" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->first_name}}</p>
                <a href="/"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
    
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li><a href="{{ route('admin.user.index') }}"><i class="fa fa-user"></i> <span>Tài khoản</span>
                    <span class="pull-right-container"><small class="label pull-right bg-green"></small></span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.categories.index') }}">
                    <i class="fa fa-list-alt"></i> <span>Danh mục</span>
                    <span class="pull-right-container"><small class="label pull-right bg-green"></small></span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.products.index') }}">
                    <i class="fa fa-tablet"></i> <span>Sản phẩm</span>
                    <span class="pull-right-container"><small class="label pull-right bg-green"></small></span>
                </a>
            </li>

            
            <li>
                <a href="{{ route('admin.orders.index') }}">
                    <i class="fa fa-shopping-cart"></i> <span>Đơn hàng</span>
                    <span class="pull-right-container"><small class="label pull-right bg-green"></small></span>
                </a>
            </li>

            <li>
                <a href="admin.comments.index">
                    <i class="fa fa-comments"></i> <span>Comment</span>
                    <span class="pull-right-container"><small class="label pull-right bg-green"></small></span>
                </a>
            </li>
           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
