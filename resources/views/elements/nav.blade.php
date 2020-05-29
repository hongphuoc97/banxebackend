<nav class="navbar navbar-default">
   <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target="#myNavbar">
         <span class="icon-bar"></span> <span class="icon-bar"></span> <span
            class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="/">HAI HOANG</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav">
            <li class="active"><a href="/">TRANG CHỦ</a></li>
            <li class="dropdown">
               <a class="dropdown-toggle"
                  data-toggle="dropdown" href="#">SẢN PHẨM <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="${pageContext.request.contextPath}/category/${item.id}/product">MÁY XÚC LẬT SDLG</a></li>
                  <li><a href="${pageContext.request.contextPath}/category/${item.id}/product">MÁY XÚC LẬT MINI</a></li>
                  <li><a href="${pageContext.request.contextPath}/category/${item.id}/product">MÁY NÂNG</a></li>
                  <li><a href="${pageContext.request.contextPath}/category/${item.id}/product">MÁY MÚC</a></li>
                  <li><a href="${pageContext.request.contextPath}/category/${item.id}/product">XE CHUYÊN DỤNG</a></li>
                  <li><a href="${pageContext.request.contextPath}/category/${item.id}/product">XE BEN CHẠY MỎ</a></li>
                  <li><a href="${pageContext.request.contextPath}/category/${item.id}/product">PHỤ TÙNG</a></li>
               </ul>
            </li>
            <li class=""><a href="/contact">TƯ VẤN MUA XE</a></li>
            <li class=""><a href="/introduce">GIỚI THIỆU</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
            <li>
               <a href="#">
               <span class="glyphicon glyphicon-user"></span> xin chào: {{Auth::user()->email}}
               </a>
            </li>
            <li >
               <a href="/logout">
               <span class="glyphicon glyphicon glyphicon-log-out"></span>
               Đăng xuất</a>
            </li>
            @else
            <li>
               <a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a>
            </li>
            @endif
         </ul>
         <form class="navbar-form navbar-left" action="${pageContext.request.contextPath}/">
            <div class="input-group">
               <input type="text" class="form-control"
                  placeholder="Nhập từ khóa mà bạn cần tìm kiếm..." name="q">
               <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                  </button>
               </div>
            </div>
         </form>
      </div>
   </div>
</nav>