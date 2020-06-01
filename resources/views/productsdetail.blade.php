@extends('layout')
@section('content')
<div class="container" >
    @include('elements.carousel')
    <div class="row-fluid clearfix">
      <ul class="breadcrumb">
            <li><a href="#">Trang Chủ</a></li>
            <li><a href="#">Sản Phẩm</a></li>
            <li class="active">Máy xúc lật mini</li>
      </ul>
    </div>
    <!-- <c:if test="${msg != null }">
       <div class="alert alert-success" style="margin:10px 0px 0px 0px">
          <strong>Thông báo!</strong> ${msg}.
       </div>
    </c:if> -->
    <div class="row-fluid clearfix" >
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <span style="font-weight:bold; text-transform: uppercase;">
                     <!--${product.name}--> XE MÚC ABXX
                  </span>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 cus-layout">
               <img src="{{ asset('images/p1.jpg') }}"
                  style="width: 100%; height: 250px; object-fit: cover;" class="img-thumbnail" />
            </div>
            <div class="col-xs-12 col-sm-6 cus-layout">
               <h3>Mô tả  ngắn</h3>
               <p>	–         Điều hòa hai chiều–         Khoảng sáng tầm nhìn trước 180 độ
                  –         Hệ thống âm thanh 2 loa cùng đầu đọc USB.
                  –         Vô lăng gật gù
                  –         Khóa điện an toàn khi có số.
                  –         Cần điều khiển hệ thống chiếu sáng tín hiệu mới.
                  –         Ghế mềm,điều chỉnh.
               </p>
               <!-- <p><fmt:formatNumber currencyCode="VND" type="currency" maxFractionDigits="0">${product.price}</fmt:formatNumber></p> -->
               <!-- <div class="cus-action" style="margin-top: 50px;">
                  <a href="tel:0965707022" class="btn btn-success">Mua ngay</a>
                  <a href="${pageContext.request.contextPath}/product/${product.id}/addtocart?quantity=1" class="btn btn btn-warning">Thêm vào giỏ</a>
                  </div> -->
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
                  <tr>
                     <td>1</td>
                     <td>KT tổng thể (DxRxC)</td>
                     <td>mm</td>
                     <td>9213x3200x3665</td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>Cự ly trục</td>
                     <td>mm</td>
                     <td>9213x3200x3665</td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>Chiều cao xả tải lớn nhất</td>
                     <td>mm</td>
                     <td>9213x3200x3665</td>
                  </tr>
                  <tr>
                     <td>4</td>
                     <td>Chiều cao xả tải lớn nhấ</td>
                     <td>mm</td>
                     <td>9213x3200x3665</td>
                  </tr>
                  <tr>
                     <td>5</td>
                     <td>Chiều cao xả tải lớn nhấ</td>
                     <td>mm</td>
                     <td>9213x3200x3665</td>
                  </tr>
                  <tr>
                     <td>6</td>
                     <td>Chiều cao xả tải lớn nhấ</td>
                     <td>mm</td>
                     <td>9213x3200x3665</td>
                  </tr>
                  <tr>
                     <td>7</td>
                     <td>Chiều cao xả tải lớn nhấ</td>
                     <td>mm</td>
                     <td>9213x3200x3665</td>
                  </tr>
                  <tr>
                     <td>8</td>
                     <td>Chiều cao xả tải lớn nhấ</td>
                     <td>mm</td>
                     <td>9213x3200x3665</td>
                  </tr>
                  <tr>
                     <td>9</td>
                     <td>Chiều cao xả tải lớn nhấ</td>
                     <td>mm</td>
                     <td>9213x3200x3665</td>
                  </tr>
               </tbody>
            </table>
         </div>

         <div class="row-fluid clearfix">
            <div class="panel panel-primary" style="margin: 10px 0px 0px 0px">
               <div class="panel-heading">Sản Phẩm liên quan</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
               <div class="img-thumbnail product col-xs-12">
                  <div class="cus-product_imge">
                     <img src="{{ asset('images/p1.jpg') }}"
                        style="width: 100%; height: 190px; object-fit: cover;" />
                  </div>
                  <div class="cus-info" style="margin-top: 10px">
                     <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                     <span>
                     Điện thoại:
                     090 576 912
                     </span>
                  </div>
                  <div class="cus-fullsize">
                     <div class="cus-action">
                        <a href="tel:0965707022" class="btn btn-success">Mua
                        ngay</a>
                        <a href="${pageContext.request.contextPath}/product/${productItem.id}" class="btn btn btn-warning">Xem chi tiết</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
               <div class="img-thumbnail product col-xs-12">
                  <div class="cus-product_imge">
                     <img src="{{ asset('images/p1.jpg') }}"
                        style="width: 100%; height: 190px; object-fit: cover;" />
                  </div>
                  <div class="cus-info" style="margin-top: 10px">
                     <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                     <span>
                     Điện thoại:
                     090 576 912
                     </span>
                  </div>
                  <div class="cus-fullsize">
                     <div class="cus-action">
                        <a href="tel:0965707022" class="btn btn-success">Mua
                        ngay</a>
                        <a href="${pageContext.request.contextPath}/product/${productItem.id}" class="btn btn btn-warning">Xem chi tiết</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
               <div class="img-thumbnail product col-xs-12">
                  <div class="cus-product_imge">
                     <img src="{{ asset('images/p1.jpg') }}"
                        style="width: 100%; height: 190px; object-fit: cover;" />
                  </div>
                  <div class="cus-info" style="margin-top: 10px">
                     <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                     <span>
                     Điện thoại:
                     090 576 912
                     </span>
                  </div>
                  <div class="cus-fullsize">
                     <div class="cus-action">
                        <a href="tel:0965707022" class="btn btn-success">Mua
                        ngay</a>
                        <a href="${pageContext.request.contextPath}/product/${productItem.id}" class="btn btn btn-warning">Xem chi tiết</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
               <div class="img-thumbnail product col-xs-12">
                  <div class="cus-product_imge">
                     <img src="{{ asset('images/p1.jpg') }}"
                        style="width: 100%; height: 190px; object-fit: cover;" />
                  </div>
                  <div class="cus-info" style="margin-top: 10px">
                     <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                     <span>
                     Điện thoại:
                     090 576 912
                     </span>
                  </div>
                  <div class="cus-fullsize">
                     <div class="cus-action">
                        <a href="tel:0965707022" class="btn btn-success">Mua
                        ngay</a>
                        <a href="${pageContext.request.contextPath}/product/${productItem.id}" class="btn btn btn-warning">Xem chi tiết</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
               <div class="img-thumbnail product col-xs-12">
                  <div class="cus-product_imge">
                     <img src="{{ asset('images/p1.jpg') }}"
                        style="width: 100%; height: 190px; object-fit: cover;" />
                  </div>
                  <div class="cus-info" style="margin-top: 10px">
                     <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                     <span>
                     Điện thoại:
                     090 576 912
                     </span>
                  </div>
                  <div class="cus-fullsize">
                     <div class="cus-action">
                        <a href="tel:0965707022" class="btn btn-success">Mua
                        ngay</a>
                        <a href="${pageContext.request.contextPath}/product/${productItem.id}" class="btn btn btn-warning">Xem chi tiết</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
</div>
@endsection
