@extends('layout')
@section('content')
    <?php
    use App\Categories;
    use App\Configuration;
    $config = Configuration::find(1);
    $categories = Categories::orderBy('order_value', 'ASC')->get();
    ?>
    <div class="container-fluid">
        @include('elements.carousel')
        <div class="col-md-3 visible-md visible-lg">
            <ul class="list-group">
                <li class="list-group-item panelactive"><span class="glyphicon glyphicon-menu-hamburger"> </span>DANH MỤC SẢN PHẨM
                </li>
                @foreach($categories as $item)
                    <li class="list-group-item"><a href="/product?category={{$item->id}}">{{$item->name}}</a></li>
                @endforeach
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading"><b>THANH TOÁN NHANH GỌN</b></div>
                <div class="panel-body border border-primary">
                    <img src="./images/thanhtoan.png"/>
                    <hr>
                    <p>Công ty hỗ trợ nhiều hình thức thanh toán nhanh chóng, đảm bảo an toàn và phù hợp với điều kiện
                        của khách hàng.</p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><b>PHỤ TÙNG CHÍNH HÃNG</b></div>
                <div class="panel-body border border-primary">
                    <img src="./images/settings-tools.png"/>
                    <hr>
                    <p>Công ty đảm bảo cung cấp đầy đủ phụ tùng chính hãng giá thấp nhất, đảm bảo máy móc vận hành lâu
                        dài ổn định công việc của khách hàng.</p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><b>HỖ TRỢ KỸ THUẬT TRỌN ĐỜI</b></div>
                <div class="panel-body border border-primary">
                    <img src="./images/24-hours-phone-service.png"/>
                    <hr>
                    <p>Công ty tự hào với đội ngũ kỹ thuật lâu năm cam kết hỗ trợ tư vấn, sửa chữa bảo dưỡng máy tận nơi
                        theo yêu cầu của khách hàng.</p>
                </div>
            </div>
        </div>
        <!-- <div class="row-fluid clearfix"> -->
        <div class="col-md-9 clearfix">
            <div class="panel panel-primary" style="margin: 10px 0px 0px 0px">
                <div class="panel-heading"><h1>GIỚI THIỆU</h1></div>
            </div>
            <h4><b>Chúng tôi, công ty máy công trình SDLG liên doanh VOLVO<b></h4>
            <p>
                Là nhà nhập khẩu chuyên nghiệp các sản phẩm máy xúc lật SDLG, máy xúc lật nhỏ, máy xúc lật chui hầm,
                máy nâng đá, máy xúc đào…
                Xuất phát từ một doanh nghiệp trẻ năng động nhưng chúng tôi đủ niềm tin đã xây dựng được hệ thống cơ
                sở vật chất tốt nhất dành cho khách hàng,
                chúng tôi có kho bãi khang trang và showroom hiện đại. Bên cạnh đó, chúng tôi tự hào có đội ngũ
                kinh doanh giỏi, quản lý xuất sắc, đội ngũ kỹ thuật và dịch vụ chuyên nghiệp,
                tận tâm, chu đáo, luôn cố gắng để đáp ứng tốt nhất mọi nhu cầu của Quý khách hàng.
            </p>
            <img src="{{ asset('images/sdlg.jpg')}}" class="introduce-img"/>
            <p style="text-align: center;"><span
                        style="font-family: helvetica, arial, sans-serif; font-size: 12pt;"><em>&nbsp; Máy xúc lật SDLG</em></span>
            </p>
            <p style="text-align: justify;"><span style="font-family: helvetica, arial, sans-serif; font-size: 12pt;">Với chiến lược đầu tư mạnh mẽ,
        chúng tôi là đơn vị tiên phong trong dịch vụ cung cấp&nbsp;máy công trình nhập nhẩu&nbsp;uy tín hiện nay.
        Lấy khách hàng làm trung tâm của chiến lược kinh doanh dài hạn. Hơn ai hết chúng tôi hiểu những mong muốn từ phía khách hàng.
        Đây là động lực cũng là thách thức để&nbsp;SDLG&nbsp;phấn đấu là đơn vị đi đầu trong việc cung cấp một dịch vụ tốt nhất hiện nay.</span>
            </p>
            <img src="{{ asset('images/dd.jpg')}}" class="introduce-img"/>
            <p style="text-align: center;"><span
                        style="font-family: helvetica, arial, sans-serif; font-size: 12pt;"><em>Xe nâng Lonking</em></span>
            </p>
            <p style="text-align: justify;"><span style="font-family: helvetica, arial, sans-serif; font-size: 12pt;">Công ty chúng tôi gửi lời cảm ơn sâu sắc nhất đến Quý khách hàng đã luôn tin tưởng,
        ủng hộ chúng tôi trong thời gian qua cũng như thời gian sắp tới. Luôn luôn tin tưởng và đánh giá cao chất lượng cũng như bảo hành bảo trì sau bán hàng.</span>
            </p>
            <img src="{{ asset('images/phutung.jpg')}}" class="introduce-img"/>
            <p style="text-align: center;"><span
                        style="font-family: helvetica, arial, sans-serif; font-size: 12pt;"><em>Kho phụ tùng</em></span>
            </p>
            <p style="text-align: justify;"><strong><span
                            style="font-family: helvetica, arial, sans-serif; font-size: 12pt;">Mọi ý kiến đóng góp hãy gửi về:</span></strong>
            </p>
            <p style="text-align: justify;"><strong><span
                            style="font-family: helvetica, arial, sans-serif; font-size: 12pt;">{{$config->admin_name}} – {{$config->company_name}}</span></strong>
            </p>
            <p style="text-align: justify;"><strong><span
                            style="font-family: helvetica, arial, sans-serif; font-size: 12pt;">Hotline : {{$config->phonenumber}}</span></strong>
            </p>
            <p style="text-align: justify;"><strong><span
                            style="font-family: helvetica, arial, sans-serif; font-size: 12pt;">Email : {{$config->email}}</span></strong>
            </p>
        </div>
    </div>
@endsection
