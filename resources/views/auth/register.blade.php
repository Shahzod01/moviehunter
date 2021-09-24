@extends('layouts.app')
@section('content')
    <div class="auth_wrapper">
    <span class="auth_changer">
        <div class="reg_route">
          <b class="reg_route_b">Регистрация</b>
        </div>
    </span>

        <form action="{{ route('register') }}" method="POST" class="reg_bar">
            @csrf
            <label class="reg_lab">
                <p class="reg_p p_name">Имя:</p>
                <input type="text" class="reg_inp reg_name" name="name" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            <label class="reg_lab">
                <p class="reg_p p_pass">Номер телефона:</p>
                <input type="text" class="reg_inp reg_pass" name="phone" value="{{ old('phone') }}">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>


            <label class="reg_lab reg_mail">
                <p class="reg_p p_name">email:</p>
                <input type="email" class="reg_inp reg_mail" name="email" value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </label>



            <label class="reg_lab">
                <p class="reg_p p_pass">Пароль:</p>
                <input type="password" class="reg_inp reg_pass" name="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </label>


            <label class="reg_lab">
                <p class="reg_p p_pass_confirm">Подтвердите пароль:</p>
                <input type="password" class="reg_inp reg_pass_confirm" name="password_confirmation">
            </label>

            <label class="reg_lab">
                <a href="{{ route('login') }}">Есть аккаунт? Войти</a>
            </label>
            <label class="reg_lab btn_lab">
                <button class="ui inverted olive basic button btn_reg" type="submit">Регистрация</button>
            </label>
        </form>
    </div><!--Auth End-->

@endsection
