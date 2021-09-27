@extends('layouts.app')
@section('content')
<div class="auth_wrapper">
    <span class="auth_changer">
        <div class="log_route">
            <b class="log_route_b">Войти</b>
        </div>
    </span>
          
          <div class="log_bar">

              <label class="log_lab">
                  <p class="log_p p_name">Логин:</p>
                  <input type="mail" class="log_inp log_mail">
              </label>
              <label class="log_lab">
                  <p class="log_p p_pass">Пароль:</p>
                  <input type="password" class="log_inp log_pass">
              </label>  

              <label class="reg_lab">
                  <a href="http://moviehunter.local/regist">Еще нет аккаунта? Зарегистрироваться</a>
              </label>
              <label class="log_lab btn_lab">
              <button class="ui inverted olive basic button btn_log">Войти</button>
              </label>
              
          </div>

      </div><!--Auth End-->
@endsection