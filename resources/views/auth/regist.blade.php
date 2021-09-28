@extends('layouts.app')
@section('content')
<div class="auth_wrapper">
    <span class="auth_changer">
        <div class="reg_route">
          <b class="reg_route_b">Регистрация</b>
        </div>
    </span>
          
          <div class="reg_bar">
          <label class="reg_lab">
                  <p class="reg_p p_name">Имя:</p>
                  <input type="text" class="reg_inp reg_name">
              </label>

              <label class="reg_lab">
                  <p class="reg_p p_pass">Номер телефона:</p>
                  <input type="number" class="reg_inp reg_pass">
              </label>

              <label class="reg_lab reg_mail">
              <p class="reg_p p_name">email:</p>
                  <input type="mail" class="reg_inp reg_mail">
              </label>
              

              <label class="reg_lab">
                  <p class="reg_p p_pass">Пароль:</p>
                  <input type="password" class="reg_inp reg_pass">
              </label>
              
              <label class="reg_lab">
                  <p class="reg_p p_pass_confirm">Подтвердите пароль:</p>
                  <input type="password" class="reg_inp reg_pass_confirm">
              </label>
              <label class="reg_lab">
                  <a href="http://moviehunter.local/login">Есть аккаунт? Войти</a>
              </label>
              <label class="reg_lab btn_lab">
              <button class="ui inverted olive basic button btn_reg">Регистрация</button>
              </label>
          </div>
      </div><!--Auth End-->
      
@endsection