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
        <div class="col-md-9 clearfix">
            <div class="panel panel-primary" style="margin: 10px 0 10px 0">
                <div class="panel-heading"><h1>LIÊN HỆ</h1></div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-has-fill">
                <div class="vc_column-inner vc_custom_1584605381593">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;"><span
                                            style="font-family: helvetica, arial, sans-serif; font-size: 14pt; color: #000000;">Vui lòng điền đầy đủ thông tin dưới đây, chúng tôi sẽ liên hệ trong thời gian sớm nhất.</span>
                                </p>
                            </div>
                        </div>
                        <div role="form" class="wpcf7" id="wpcf7-f126-p66-o1" lang="vi" dir="ltr">
                            <form action="#" id="contact_form" method="post">
                                <div class="form-group">
                                    <label for="name">Tên của bạn (bắt buộc)</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Điện thoại:</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                                <div class="form-group">
                                    <label for="message">Lời nhắn:</label>
                                    <textarea class="form-control" id="message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;"><span
                                            style="font-size: 14pt; font-family: helvetica, arial, sans-serif;">{{$config->admin_name}}</span>
                                </p>
                                <p style="text-align: center;"><span
                                            style="font-family: helvetica, arial, sans-serif; font-size: 14pt;">{{$config->role}} {{$config->company_name}}</span>
                                </p>
                                <p style="text-align: center;"><span
                                            style="font-family: helvetica, arial, sans-serif; font-size: 14pt;">Chi Nhánh Đà Nẵng</span>
                                </p>
                                <p style="text-align: center;"><span
                                            style="font-family: helvetica, arial, sans-serif; font-size: 14pt;">Hotline : {{$config->phonenumber}} </span>
                                </p>
                                <p style="text-align: center;"><span
                                            style="font-family: helvetica, arial, sans-serif; font-size: 14pt;">Email: {{$config->email}}</span>
                                </p>
                                <p style="text-align: center;"><span
                                            style="font-family: helvetica, arial, sans-serif; font-size: 14pt;">Website : {{$config->website}}</span>
                                </p>
                                <p style="text-align: center;"><span
                                            style="font-family: helvetica, arial, sans-serif; font-size: 14pt;">Địa chỉ : </span><span
                                            style="font-family: helvetica, arial, sans-serif; font-size: 14pt;">{{$config->address}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
