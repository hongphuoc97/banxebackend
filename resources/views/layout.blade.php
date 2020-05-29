<!DOCTYPE html>
<html>
	@include('elements.head')
<body>
	@include('elements.nav')
	@yield('content')
	@include('elements.loginmodal')
	@include('elements.footer')
</body>
</html>
