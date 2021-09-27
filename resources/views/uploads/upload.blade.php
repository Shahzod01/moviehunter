          
       @extends('layouts.app')
@section('content')   
          
          
          <div class="upload_wrapper">
            <form class="" action="{{ route('uploading')}}" enctype="multipart/form-data" method="post">
            @csrf
                    <div class="upload_form">
                        <label class="upload_lab">
                            <p class="">Имя фильма:</p>
                            <input type="text" class="upload_film_name" name="film_name">
                        </label>

                        <label class="upload_lab">
                            <p>Загрузите файл:</p>
                            <input type="file" class="upload_file_name" name="film_file">
                        </label>
                        <br>
                        <label class="upload_lab">
                              <button class="ui inverted olive basic button btn_upload">Регистрация</button>
                        </label>
                    </div>
            </form>
            </div>

                <?php
            
            foreach ($f as $film) {
                echo '<video width="320" height="240" controls>
                        <source src="http://movieHunter.local/storage/app/'.$film.'"  type="video/mp4">
                      </video>';
            }
            //$film->film_file_name
            ?>

            
@endsection