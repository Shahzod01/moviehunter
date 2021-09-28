<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="csrf-token" content="{{ Session::token() }}"> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('assets/css/ie6.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/Semantic-ui/semantic.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/stile.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/authstil.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/slide.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/uploadpage.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}" type="text/css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/Semantic-ui/semantic.min.js') }}"></script>
        <script src="{{ asset('assets/js/jfunc.js') }}"></script>
        <script src="{{ asset('assets/js/home.js') }}"></script>
    </head>
    <body> 
<!-- START PAGE SOURCE -->
<div id="shell">

    <p id="logo"><a href="http://movhunt/">Moviehunter</a><p>

    <div class="social"> 
      <a href="http://movhunt/auth/regist"><button class="ui inverted grey button main_reg_button">Регистрация</button></a>
      <a href="http://movhunt/auth/login"><button class="ui inverted olive button main_log_button">Войти</button></a>
    </div>

    <div id="sub-navigation">
        <div class="menu">
            <span class="films_list">Список фильмов</span>       
            <span class="search_field">
            <div class="ui search">
  <div class="ui icon input">
    <input class="prompt" type="text" placeholder="Искать">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
            </span>
            <span class="films_cat"><i class="ui icon angle right"></i>Категории фильмов</span>
        </div>
    </div>

<div class="main">

@yield('content')

</div>


<div class="footer">
  <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
  <p class="rf">Design by <a href="http://chocotemplates.com/">ChocoTemplates.com</a></p>
  <div style="clear:both;"></div>
</div>

<!-- END PAGE SOURCE -->
</body>
</html>