@extends('layout')
@section('content')
<div class="container-fluid" >
    @include('elements.carousel')
    <!-- <c:if test="${msg != null }">
       <div class="alert alert-success" style="margin:10px 0px 0px 0px">
          <strong>Thông báo!</strong> ${msg}.
       </div>
    </c:if> -->

    <div class="col-md-3 visible-md visible-lg">
       <ul class="list-group">
          <li class="list-group-item panelactive"><span class="glyphicon glyphicon-menu-hamburger"> </span> DANH MUC SAN PHAM</li>
          <li class="list-group-item"><a>MÁY XÚC LẬT SDLG</a></li>
          <li class="list-group-item"><a>MÁY XÚC LẬT MINI</a></li>
          <li class="list-group-item"><a>MÁY NÂNG</a></li>
          <li class="list-group-item"><a>MÁY MÚC</a></li>
        </ul>
        <div class="panel panel-default">
          <div class="panel-heading"><b>THANH TOÁN NHANH GỌN</b></div>
          <div class="panel-body border border-primary">
             <img src="./images/thanhtoan.png"/>
          <hr>
             <p>Công ty hỗ trợ nhiều hình thức thanh toán nhanh chóng, đảm bảo an toàn và phù hợp với điều kiện của khách hàng.</p>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading"><b>PHỤ TÙNG CHÍNH HÃNG</b></div>
          <div class="panel-body border border-primary">
             <img src="./images/settings-tools.png"/>
          <hr>
             <p>Công ty đảm bảo cung cấp đầy đủ phụ tùng chính hãng giá thấp nhất, đảm bảo máy móc vận hành lâu dài ổn định công việc của khách hàng.</p>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading"><b>HỖ TRỢ KỸ THUẬT TRỌN ĐỜI</b></div>
          <div class="panel-body border border-primary">
             <img src="./images/24-hours-phone-service.png"/>
          <hr>
             <p>Công ty tự hào với đội ngũ kỹ thuật lâu năm cam kết hỗ trợ tư vấn, sửa chữa bảo dưỡng máy tận nơi theo yêu cầu của khách hàng.</p>
          </div>
        </div>
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
       <c:forEach items="${categories}" var="item">
          <c:if test="${fn:length(item.products) gt 0}">
             <div class="panel panel-primary" style="margin: 10px 0px 0px 0px">
                <div class="panel-heading">MÁY XÚC LẬT SDLG</div>
             </div>
             <c:forEach items="${products}" var="productItem">
                <c:if test="${productItem.category.id == item.id }">
                   <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
                      <div class="img-thumbnail product col-xs-12">
                         <div class="cus-product_imge">
                            <img src="./images/p1.jpg"
                               style="width: 100%; height: 190px; object-fit: cover;" />
                         </div>
                         <div class="cus-info" style="margin-top: 10px">
                            <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                            <span>
                               Điện thoại:
                               096.5707.022
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
                            <img src="./images/p2.jpg"
                               style="width: 100%; height: 190px; object-fit: cover;" />
                         </div>
                         <div class="cus-info" style="margin-top: 10px">
                            <span class="glyphicon glyphicon-tags"></span> <span>Sản
                            phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                            <span>
                               Điện thoại:
                               096.5707.022
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
                            <img src="./images/p2.jpg"
                               style="width: 100%; height: 190px; object-fit: cover;" />
                         </div>
                         <div class="cus-info" style="margin-top: 10px">
                            <span class="glyphicon glyphicon-tags"></span> <span>Sản
                            phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                            <span>
                               Điện thoại:
                               096.5707.022
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
                            <img src="./images/p2.jpg"
                               style="width: 100%; height: 190px; object-fit: cover;" />
                         </div>
                         <div class="cus-info" style="margin-top: 10px">
                            <span class="glyphicon glyphicon-tags"></span> <span>Sản
                            phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                            <span>
                               Điện thoại:
                               096.5707.022
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
                            <img src="./images/p2.jpg"
                               style="width: 100%; height: 190px; object-fit: cover;" />
                         </div>
                         <div class="cus-info" style="margin-top: 10px">
                            <span class="glyphicon glyphicon-tags"></span> <span>Sản
                            phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                            <span>
                               Điện thoại:
                               096.5707.022
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
                </c:if>
             </c:forEach>
          </c:if>

          <!--MOI-->
          <div class="panel panel-primary" style="margin: 10px 0px 0px 0px">
             <div class="panel-heading">MÁY XÚC LẬT MINI</div>
          </div>
                <div class="col-xs-12 col-sm-6 col-md-3 cus-layout">
                   <div class="img-thumbnail product col-xs-12">
                      <div class="cus-product_imge">
                         <img src="./images/p1.jpg"
                            style="width: 100%; height: 190px; object-fit: cover;" />
                      </div>
                      <div class="cus-info" style="margin-top: 10px">
                         <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                         <span>
                            Điện thoại:
                            096.5707.022
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
                         <img src="./images/p1.jpg"
                            style="width: 100%; height: 190px; object-fit: cover;" />
                      </div>
                      <div class="cus-info" style="margin-top: 10px">
                         <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                         <span>
                            Điện thoại:
                            096.5707.022
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
                         <img src="./images/p1.jpg"
                            style="width: 100%; height: 190px; object-fit: cover;" />
                      </div>
                      <div class="cus-info" style="margin-top: 10px">
                         <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                         <span>
                            Điện thoại:
                            096.5707.022
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
                         <img src="./images/p1.jpg"
                            style="width: 100%; height: 190px; object-fit: cover;" />
                      </div>
                      <div class="cus-info" style="margin-top: 10px">
                         <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                         <span>
                            Điện thoại:
                            096.5707.022
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
                         <img src="./images/p1.jpg"
                            style="width: 100%; height: 190px; object-fit: cover;" />
                      </div>
                      <div class="cus-info" style="margin-top: 10px">
                         <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                         <span>
                            Điện thoại:
                            096.5707.022
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
                         <img src="./images/p1.jpg"
                            style="width: 100%; height: 190px; object-fit: cover;" />
                      </div>
                      <div class="cus-info" style="margin-top: 10px">
                         <span class="glyphicon glyphicon-tags"></span> <span>Sản phẩm: L975F (5÷6,5m3)</span><br /> <span class="glyphicon glyphicon-earphone"></span>
                         <span>
                            Điện thoại:
                            096.5707.022
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
       </c:forEach>
    </div>
 </div>
@endsection
