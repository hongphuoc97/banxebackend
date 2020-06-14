<?php
use App\Configuration;
$config = Configuration::find(1);
?>
<footer class="page-footer font-small blue pt-4"
        style="background-color: #1f8a0c">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-sm-6 col-md-4">
                <!-- Content -->
                <h5 class="text-uppercase">{{$config->title}}</h5>
                <p>Website máy xúc, xe cơ giới hàng đầu Việt Nam</p>
                <p>Di động: {{$config->phonenumber}}</p>
                <p>Địa chỉ : {{$config->address}}</p>
                <p>Email: {{$config->email}}</p>
            </div>
            <div class="col-sm-6 col-md-4">
                <!-- Links -->
                <h5 class="text-uppercase">Truy cập nhanh</h5>
                <ul class="list-unstyled">
                    <li><a href="#!">SẢN PHẨM</a></li>
                    <li><a href="#!">GIỚI THIỆU</a></li>
                    <li><a href="#!">TIN TỨC</a></li>
                    <li><a href="#!">TRANG CHỦ</a></li>
                </ul>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-sm-6 col-md-4">
                <!-- Links -->
                <h5 class="text-uppercase">SỬA CHỮA BẢO DƯỠNG</h5>
                <ul class="list-unstyled">
                    <li><b>Tư vấn kỹ thuật</b></li>
                    <li><span class="glyphicon glyphicon-earphone"></span> {{$config->phonenumber}}</li>
                    <li>----------------------</li>
                    <li><b>Phụ tùng thay thế</b></li>
                    <li><span class="glyphicon glyphicon-earphone"></span> {{$config->phonenumber}}</li>
                </ul>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        © 2020 Copyright: <a href="/" style="color: #fff">{{$config->website}}</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<a href="tel:{{$config->phonenumber}}" class="hotlinemp all" rel="nofollow">
    <div class="mypage-alo-phone" style="">
        <div class="animated infinite zoomIn mypage-alo-ph-circle"></div>
        <div class="animated infinite pulse mypage-alo-ph-circle-fill"></div>
        <div class="animated infinite tada mypage-alo-ph-img-circle"></div>
        <span>{{$config->phonenumber}}</span>
    </div>
</a>
