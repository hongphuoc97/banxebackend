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
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li><a href="{{ url('/product') }}">Sản Phẩm</a></li>
                <li class="active">{{ $product->name}}</li>
            </ul>
        </div>
        <div class="row-fluid clearfix">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h1>{{ $product->name}}</h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 cus-layout">
                <img class="lazy img-thumbnail" data-src="{{ asset($product->file_path) }}"
                                 style="width: 100%; object-fit: cover;" name="{{$product->name}}" alt="{{$product->name}}" />
            </div>
            <div class="col-xs-12 col-sm-6 cus-layout">
                <h3>Mô tả</h3>
                <p>
                    @if($product->description != "")
                        {{ $product->description}}
                    @else
                        <span>Sản phẩm hiện chưa có mô tả, quản trị viên sẽ cập nhật sớm!</span>
                    @endif
                </p>
            </div>
        </div>

        <div class="row-fluid clearfix">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Nội dung kỹ thuật chủ yếu</th>
                    <th>ĐVT</th>
                    <th>Thông số kỹ thuật</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0?>
                @foreach($specifications as $spec)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{ $spec->name }}</td>
                        <td>{{ $spec->unit }}</td>
                        <td>{{ $spec->value}} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="row-fluid clearfix">
            <div class="panel panel-primary" style="margin: 10px 0px 0px 0px">
                <div class="panel-heading"><h1>Sản Phẩm liên quan</h1></div>
            </div>
            @foreach($relativeProducts as $itemProduct)
                <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
                    <div class="img-thumbnail product col-xs-12">
                        <div class="cus-product_imge">
                            <img class="lazy" data-src="{{ asset($itemProduct->file_path) }}"
                                 style="width: 100%; height: 190px; object-fit: cover;" name="{{$itemProduct->name}}" alt="{{$itemProduct->name}}"/>
                        </div>
                        <div class="cus-info" style="margin-top: 10px">
                            <span class="glyphicon glyphicon-tags"></span>
                            <span>Sản phẩm: {{ $itemProduct->name}}</span><br/> <span
                                    class="glyphicon glyphicon-earphone"></span>
                            <span>
                       Điện thoại:
                       {{$config->phonenumber}}
                       </span>
                        </div>
                        <div class="cus-fullsize">
                            <div class="cus-action">
                                <a href="tel:{{$config->phonenumber}}" class="btn btn-success">Gọi ngay</a>
                                <a href="{{ url('/product/'.$itemProduct->id) }}" class="btn btn btn-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
