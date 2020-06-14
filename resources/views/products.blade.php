@extends('layout')
@section('content')
    <?php
    use App\Configuration;
    $config = Configuration::find(1);
    ?>
    <div class="container">
        @include('elements.carousel')
        <div class="row-fluid clearfix">
            <ul class="breadcrumb">
                <li><a href="/">Trang Chủ</a></li>
                <li><a href="/product">Sản Phẩm</a></li>
                <li class="active">{{ $category[0]->name }}</li>
            </ul>
        </div>
        <div class="row-fluid clearfix">
            <div class="panel panel-primary" style="margin: 10px 0px 0px 0px">
                <div class="panel-heading"><h2>{{ $category[0]->name }}</h2></div>
            </div>
            @foreach($products as $itemProduct)
                <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
                    <div class="img-thumbnail product col-xs-12">
                        <div class="cus-product_imge">
                            <img src="{{$itemProduct->file_path}}"
                                 style="width: 100%; height: 190px; object-fit: cover;"/>
                        </div>
                        <div class="cus-info" style="margin-top: 10px">
                            <span class="glyphicon glyphicon-tags"></span> <span>{{$itemProduct->name}}</span><br/>
                            <span class="glyphicon glyphicon-earphone"></span>
                            <span>

                             Điện thoại:
                             {{$config->phonenumber}}
                          </span>
                        </div>
                        <div class="cus-fullsize">
                            <div class="cus-action">
                                <a href="tel:{{$config->phonenumber}}" class="btn btn-success">Gọi ngay</a>
                                <a href="/product/{{ $itemProduct->id }}" class="btn btn btn-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $products->links() !!}
        <script>
            const url_string = window.location.href; //window.location.href
            $("ul.pagination li").on("click", function () {
                var url = new URL(url_string);
                var category = url.searchParams.get("category");
                if (category != null || category != undefined) {
                    let a = $(this).find("a");
                    let ahref = a.attr("href");
                    a.attr("href", ahref + "&category=" + category);
                }
            });
        </script>
    </div>
@endsection
