<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myNavbar">
                <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/admin/') }}">ADMIN CONTROL PANEL</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class=""><a href="{{ url('/') }}">TRANG CHỦ</a></li>
                <li class=""><a href="{{ url('/admin/category/') }}">DANH MỤC</a></li>
                <li class=""><a href="{{ url('/admin/product/') }}">SẢN PHẨM</a></li>
                <li class=""><a href="{{ url('/admin/config/') }}">CẤU HÌNH</a></li>
                <ul class="nav navbar-nav navbar-right">

                    @if(isset(Auth::user()->email))
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-user"></span> xin chào: {{Auth::user()->email}}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}">
                                <span class="glyphicon glyphicon glyphicon-log-out"></span>
                                Đăng xuât</a></li>
                    @endif
                </ul>
                <form class="navbar-form navbar-left" method="get" action="{{ url('/admin/product') }}">
                    <div class="input-group">
                        <input type="text" class="form-control"
                               placeholder="Nhập từ khóa mà bạn cần tìm kiếm..." name="q"/>
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </ul>
        </div>
    </div>
</nav>
