@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">

        <div class="row justify-content-center">

            <div class="col-md-9 justify-content-center">
                <h1 class="mb-3">{{ $Bios->name }} {{ $Bios->surname }} {{ $Bios->patronomic }}</h1>
                <div class="col-md-8 justify-content-center">
                    <img src="{{ asset('../public/img/' . $Bios->img) }}" alt="Image of person" class="img-fluid" style="max-height: 300px">
                </div>
                <ul class="list-unstyled justify-content-center">
                    <li><strong>Дата рождения:</strong> {{ $Bios->birthday_date }}</li>
                    <li><img src="{{ asset('../public/img/' . $Bios->birthday_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li><strong>Место рождения:</strong> {{ $Bios->birthday_place }}</li>
                    <li><img src="{{ asset('../public/img/' . $Bios->death_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li><strong>Дата смерти:</strong> {{ $Bios->death_date }}</li>
                    <li><strong>Место смерти:</strong> {{ $Bios->death_place }}</li>
                    <li><strong>Детсво:</strong></li>
                    <li><img src="{{ asset('../public/img/' . $Bios->childhood_live_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li>  <p id="childhood_live_content" class="card-text mb-5">{!! html_entity_decode($Bios->childhood_live_content) !!}</p></li>
                    <li><strong>Студенческие годы:</strong></li>
                    <li><img src="{{ asset('../public/img/' . $Bios->stydent_live_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li><p id="stydent_live_content" class="card-text mb-5">{!! html_entity_decode($Bios->stydent_live_content) !!}</p></li>
                    <li><strong>Основная жизнь:</strong></li>
                    <li><img src="{{ asset('../public/img/' . $Bios->osnovnaia_live_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li><p id="osnovnaia_live_content" class="card-text mb-5">{!! html_entity_decode($Bios->osnovnaia_live_content) !!}</p></li>
                    <li><strong>Пенсия:</strong></li>
                    <li><img src="{{ asset('../public/img/' . $Bios->pensia_live_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li><p id="pensia_live_content" class="card-text mb-5">{!! html_entity_decode($Bios->pensia_live_content) !!}</p></li>
                    <li><strong>Главная активность в науке:</strong></li>
                    <li><p id="opisanie_deitelnosti" class="card-text mb-5">{!! html_entity_decode($Bios->opisanie_deitelnosti) !!}</p></li>
                    <li><strong>Опыт работы професиональный:</strong></li>
                    <li><p id="xp_for_work" class="card-text mb-5">{!! html_entity_decode($Bios->xp_for_work) !!}</p></li>
                    <li><strong>Достижения:</strong></li>
                    <li><p id="achivments" class="card-text mb-5">{!! html_entity_decode($Bios->achivments) !!}</p></li>
                    <li><strong>Награды:</strong></li>
                    <li><p id="nagradi" class="card-text mb-5">{!! html_entity_decode($Bios->nagradi) !!}</p></li>
                    <li><strong>Источник:</strong></li>
                    <li><li><p id="sourse" class="card-text mb-5">{!! html_entity_decode($Bios->sourse) !!}</p></li></li>
                </ul>
            </div>
        </div>




    </div>
    <script>
        tinymce.get('childhood_live_content').setContent('{{ $Bios->childhood_live_content }}');
        tinymce.get('stydent_live_content').setContent('{{ $Bios->stydent_live_content }}');
        tinymce.get('osnovnaia_live_content').setContent('{{ $Bios->osnovnaia_live_content }}');
        tinymce.get('pensia_live_content').setContent('{{ $Bios->pensia_live_content }}');
        tinymce.get('opisanie_deitelnosti').setContent('{{ $Bios->opisanie_deitelnosti }}');
        tinymce.get('xp_for_work').setContent('{{ $Bios->xp_for_work }}');
        tinymce.get('achivments').setContent('{{ $Bios->achivments }}');
        tinymce.get('nagradi').setContent('{{ $Bios->nagradi }}');
        tinymce.get('sourse').setContent('{{ $Bios->sourse }}');
     </script>
@endsection
