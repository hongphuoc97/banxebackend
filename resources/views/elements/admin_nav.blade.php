<nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse"
                  data-target="#myNavbar">
               <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                  class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="/admin">ADMIN CONTROL PANEL</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav">
                  <li class=""><a href="${pageContext.request.contextPath}/">DANH MỤC</a></li>
                  <li class=""><a href="${pageContext.request.contextPath}/">SẢN PHẨM</a></li>
                  <li class="active"><a href="${pageContext.request.contextPath}/">CẤU HÌNH</a></li>
                  <!--<c:forEach items="${categories}" var="item">
                     <c:if test="${item.type == 1}">
                        <li><a href="#">${item.name}</a></li>
                     </c:if>
                     </c:forEach> -->
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <!--<li><a href="${pageContext.request.contextPath}/cart" >
                     <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
                     </a>
                     </li>-->
                     @if(isset(Auth::user()->email))
                     <li>
                        <a href="#">
                           <span class="glyphicon glyphicon-user"></span> xin chào: {{Auth::user()->email}}
                        </a>
                     </li>
                     <li >
                       <a href="/logout">
                         <span class="glyphicon glyphicon glyphicon-log-out"></span>
                         Đăng xuât</a></li>
                    @endif
               </ul>
               <form class="navbar-form navbar-left" action="${pageContext.request.contextPath}/">
                  <div class="input-group">
                     <input type="text" class="form-control"
                        placeholder="Nhập từ khóa mà bạn cần tìm kiếm..." name="q">
                     <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </nav>
