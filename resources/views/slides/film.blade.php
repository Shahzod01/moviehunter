@extends('layouts.app')
@section('content')
    <div class="film_wrapper">
        <div class="main_container">

            <div class="film_img_container">
                <img src="{{ asset('assets/film.jpg') }}">
            </div>

            <div class="main_info_container">
                <p class="rus_name">Судная ночь. Навсегда</p>
                <p class="original_film_name">The forever purge</p>
                <label><b>Премьера:</b><t>3 августа 2021</t></label>
                <label><b>Режиссер:</b><t>Дени Вильнёв</t></label>
                <label><b>Год:</b><t>2021</t></label>
                <label><b>Сценарий:</b><t>Фрэнк Херберт Джон Спэйтс Дени Вильнёв Эрик Рот</t></label>
                <label><b>Бюджет:</b><t>55 млн долларов</t></label>
                <label><b>Операторы и монтажеры:</b><t>Оскар Айзек Дэйв Батиста Стеллан Скарсгард</t></label>
                <label><b>Сбори в мире:</b><t>	83 млн долл. (широкий кинопрокат)</t></label>
                <label><b>Длительность:</b><t>1:35:08</t></label>
            </div>

            <div class="info_container">
                <div class="ratingMark">
                    <h3>Оценка имбд</h3>
                    <h3>Оценка Пользователей</h3>
                </div>
                <div class="film_description">
                    <h3>Описание:</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto corporis autem possimus distinctio ipsum, quo officiis
                    repellat officia dolore sapiente mollitia porro nostrum provident, eum dignissimos ducimus! Sapiente, vitae quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex, nobis magni temporibus consequuntur tempora alias itaque laborum placeat tenetur omnis dolor quas sapiente officia suscipit asperiores adipisci tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quae asperiores eligendi quisquam dolor consequatur consequuntur iste laudantium. Molestiae maxime velit et eaque placeat amet enim iure qui nemo expedita? 
                </div>
            </div>
        </div>
    </div>
@endsection