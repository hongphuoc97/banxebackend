<?php
  use App\Configuration;
  $config = Configuration::find(1);
?>
<nav class="navbar navbar-default">
   <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" name="toggleMenu" class="navbar-toggle" data-toggle="collapse"
            data-target="#myNavbar">
         <span class="icon-bar"></span> <span class="icon-bar"></span> <span
            class="icon-bar"></span>
         </button>
         <a class="navbar-left" href="/"><img src="/images/logo1.png" alt="SDLG logo" style="width: 58px;"/></a>
         <a class="navbar-left" href="/"><img src="/images/logo2.png" alt="Hoang Giai logo"style="width: 58px;"/></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav">
            <li class=""><a href="/">TRANG CHỦ</a></li>
            <li class="dropdown">
               <a class="dropdown-toggle"
                  data-toggle="dropdown" href="#">SẢN PHẨM <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <?php
                   use App\Categories;
                   $categories = Categories::orderBy('order_value', 'ASC')->get();
                 ?>
                 @foreach ($categories as $item)
                      <li><a href="/product?category={{$item->id}}">{{ $item->name }}</a></li>
                 @endforeach
               </ul>
            </li>
            <li class=""><a href="/contact">TƯ VẤN MUA XE</a></li>
            <li class=""><a href="/introduce">GIỚI THIỆU</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
            <li>
               <a href="/admin">
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
         <form class="navbar-form navbar-left" method="get" action="/product">
            <div class="input-group">
               <input type="text" class="form-control" aria-label="search-query"
                  placeholder="Nhập từ khóa mà bạn cần tìm kiếm..." name="q">
               <div class="input-group-btn">
                  <button class="btn btn-default" aria-label="search" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                  </button>
               </div>
            </div>
         </form>
      </div>
   </div>
</nav>
