<!DOCTYPE html>
<html lang="vi">
	@include('elements.head')
<body>
	@include('elements.nav')
	@yield('content')
	<script>
        $(function() {
            $('.lazy').lazy();
        });
    </script>
	@include('elements.loginmodal')
	@include('elements.footer')
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="104021161186467"
  logged_in_greeting="Xin chào! hãy nhắn tin cho tôi nếu bạn cần hỗ trợ bất cứ điều gì"
  logged_out_greeting="Xin chào! hãy nhắn tin cho tôi nếu bạn cần hỗ trợ bất cứ điều gì">
      </div>
</body>
</html>
