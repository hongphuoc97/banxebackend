<?php
  use App\Configuration;
  $config = Configuration::find(1);
?>
<head>
   <title>{{$config->title}}</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"
      charset="utf-8">
   <meta name="_csrf" content="${_csrf.token}">
   <meta name="_csrf_header" content="${_csrf.headerName}">
   <meta name="description" content="Bán máy xúc lật mini, xúc đất, máy cơ giới Hoằng Giai-SDLG-VOLVO giá tốt, chất lượng cao, cam kết bảo hành, hỗ trợ kỹ thuật - phụ tùng chính hãng: Địa chỉ Quốc lộ 1A, Thôn Nam Phong, Xã Hoà Châu, Huyện Hoà Vang, TP Đà Nẵng">
   <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
   <script src="{{ asset('js/jquery.lazy.min.js') }}"></script>
   <script src="{{ asset('js/style.js') }}"></script>
   <link href="{{ asset('css/style.css') }}" rel="stylesheet" style="text/css" />
   <link href="{{ asset('css/animate.css') }}" rel="stylesheet" style="text/css" />
   <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152-precomposed.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
