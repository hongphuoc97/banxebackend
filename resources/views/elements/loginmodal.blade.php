<div id="loginModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Đăng nhập</h4>
         </div>
         <div class="modal-body ">
            <div class="card">
               <article class="card-body">
                  <form method="post" action="{{ url('/login') }}"  id="formsubmit">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label>Email:</label> <input name="email" type="email"
                           class="form-control" placeholder="email" />
                     </div>
                     <!-- form-group// -->
                     <div class="form-group">
                        <label>Mật khẩu</label> <a class="float-right" href="#">Quên?</a>
                        <input name="password" class="form-control" type="password"
                           placeholder="******" type="password">
                     </div>
                     <!-- form-group// -->
                     <div class="form-group">
                        <div class="checkbox">
                           <label> <input type="checkbox"> Nhớ tài khoản
                           này
                           </label>
                        </div>
                        <!-- checkbox .// -->
                     </div>
                     <!-- form-group// -->
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                        Đăng nhập</button>
                     </div>
                     <!-- form-group// -->
                  </form>
               </article>
            </div>
            <!-- card -->
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
         </div>
      </div>
   </div>
</div>
