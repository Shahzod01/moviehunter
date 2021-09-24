@extends('layouts.app')
@section('content')
<div class="auth_wrapper">
    <span class="auth_changer">
        <div class="log_route">
            <b class="log_route_b">Войти</b>
        </div>
    </span>

    @if(session('loginError'))
        <div class="alert alert-danger">
            {{ session('loginError') }}
        </div>
    @endif
          <form action="{{ route('login') }}" method="POST" class="log_bar">
              @csrf

              <label class="log_lab">
                  <p class="log_p p_name">Логин:</p>
                  <input type="email" class="log_inp log_mail" name="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                  @enderror
              </label>
              <label class="log_lab">
                  <p class="log_p p_pass">Пароль:</p>
                  <input type="password" class="log_inp log_pass" name="password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                  @enderror
              </label>

              <label class="reg_lab">
                  <a href="{{ route('register') }}">Еще нет аккаунта? Зарегистрироваться</a>
              </label>
              <label class="log_lab btn_lab">
              <button class="ui inverted olive basic button btn_log">Войти</button>
              </label>

          </form>

      </div><!--Auth End-->
@endsection


