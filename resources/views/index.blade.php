@extends('layout')
@section('content')
    <div class="container-fluid">
        @include('elements.carousel')
        <div class="col-md-3 visible-md visible-lg">
            <ul class="list-group">
                <li class="list-group-item panelactive"><span class="glyphicon glyphicon-menu-hamburger"> </span> DANH
                    MỤC SẢN PHẨM
                </li>
                @foreach($categories as $item)
                    <li class="list-group-item"><a href="/product?category={{$item->id}}">{{$item->name}}</a></li>
                @endforeach
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading"><b>THANH TOÁN NHANH GỌN</b></div>
                <div class="panel-body border border-primary">
                    <img src="./images/thanhtoan.png" alt="thanh toan don gian"/>
                    <hr>
                    <p>Công ty hỗ trợ nhiều hình thức thanh toán nhanh chóng, đảm bảo an toàn và phù hợp với điều kiện
                        của khách hàng.</p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><b>PHỤ TÙNG CHÍNH HÃNG</b></div>
                <div class="panel-body border border-primary">
                    <img src="./images/settings-tools.png" alt="Phu tung chinh hang"/>
                    <hr>
                    <p>Công ty đảm bảo cung cấp đầy đủ phụ tùng chính hãng giá thấp nhất, đảm bảo máy móc vận hành lâu
                        dài ổn định công việc của khách hàng.</p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><b>HỖ TRỢ KỸ THUẬT TRỌN ĐỜI</b></div>
                <div class="panel-body border border-primary">
                    <img src="./images/24-hours-phone-service.png" alt="Ho tro tron doi"/>
                    <hr>
                    <p>Công ty tự hào với đội ngũ kỹ thuật lâu năm cam kết hỗ trợ tư vấn, sửa chữa bảo dưỡng máy tận nơi
                        theo yêu cầu của khách hàng.</p>
                </div>
            </div>
            <div class="panel panel-default"><div class="panel-heading"><b>Video nổi bật</b></div></div>
            @foreach(explode(",",$config->video_ytb) as $item)
                <div class="videoWrapper">
                    <!-- Copy & Pasted from YouTube -->
                    <iframe width="340" height="207" title="video-intro" src="{{$item}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            @endforeach
        </div>
        <!-- <div class="row-fluid clearfix"> -->
        <div class="col-md-9 clearfix">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <?php
            use App\Categories;
            ?>
            @foreach ($categories as $category)
                @if(count($category->product) > 0)
                        <div class="panel panel-primary" style="margin: 10px 0px 0px 0px">
                            <div class="panel-heading"><a href="/product?category={{$category->id}}"><h3>{{$category->name}}</h3></a>
                            </div>
                        </div>
                @endif
                @foreach ($category->product as $itemProduct)
                    @if($itemProduct->categories_id == $category->id)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 cus-layout">
                            <div class="img-thumbnail product col-xs-12">
                                <div class="cus-product_imge">
                                    <img class="lazy" data-src="{{ asset($itemProduct->file_path) }}"
                                         style="width: 100%; height: 190px; object-fit: cover;" name="{{$itemProduct->name}}" alt="{{$itemProduct->name}}"/>

                                </div>
                                <div class="cus-info" style="margin-top: 10px">
                                    <span class="glyphicon glyphicon-tags"></span>
                                    <span>{{$itemProduct->name}}</span><br/> <span
                                            class="glyphicon glyphicon-earphone"></span>
                                    <span>

                               Điện thoại:
                               {{$config->phonenumber}}
                            </span>
                                </div>
                                <div class="cus-fullsize">
                                    <div class="cus-action">
                                        <a href="tel:{{$config->phonenumber}}" class="btn btn-success">Gọi ngay</a>
                                        <a href="/product/{{ $itemProduct->id }}" class="btn btn btn-warning">Xem chi
                                            tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
