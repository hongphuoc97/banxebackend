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
    <div class="row-fluid clearfix">
               <div class="panel panel-primary" style="margin: 10px 0px 0px 0px">
                  <div class="panel-heading">Máy xúc lật MINI</div>
               </div>
               <c:forEach items="${product}" var="productItem">
                     <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
                        <div class="img-thumbnail product col-xs-12">
                           <div class="cus-product_imge">
                              <img src="./images/p1.jpg"
                                 style="width: 100%; height: 190px; object-fit: cover;" />
                           </div>
                           <div class="cus-info" style="margin-top: 10px">
                              <span class="glyphicon glyphicon-tags"></span> <span>Sản
                              phẩm: ${productItem.name}</span><br /> <span class="glyphicon glyphicon-usd"></span>

                              <span>Giá:<fmt:formatNumber currencyCode="VND" type="currency" maxFractionDigits="0">${productItem.price}</fmt:formatNumber> </span>
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
               </c:forEach>
         </div>


</div>
@endsection
