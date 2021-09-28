          
       @extends('layouts.app')
@section('content')   
          
<div class="film_wrapper">
        <div class="main_container">

            <div class="user_img_container">
                <img src="{{ asset('assets/user.png') }}">
            </div>

            <div class="user_info_container">
                <p class="user_name">Имя: Исмоилов Шервони</p>
                <p class="user_login">Логин: sherikshaxe@gmail.com</p>                
                <label><b>Зарегистрирован:</b><t>3 августа 2021</t></label>
                <label><b>Количество коментарий:</b><t>173</t></label>               
                <label><b>Количество публикации:</b><t>12</t></label>              
                <label><b>О себе:</b><t>Информации нет</t></label>
            </div>

        </div>
    </div>

            
@endsection