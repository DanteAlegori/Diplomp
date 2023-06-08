@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">

        <div class="row justify-content-center">

            <div class="col-md-9 justify-content-center">
                <h1 class="mb-3">{{ $Bios->name }} {{ $Bios->surname }} {{ $Bios->patronomic }}</h1>
                <div class="col-md-8 justify-content-center">
                    <img src="{{ asset('/img/' . $Bios->img) }}" alt="Image of person" class="img-fluid" style="max-height: 300px">
                </div>
                <ul class="list-unstyled justify-content-center">
                    <li><strong>Дата рождения:</strong> {{ $Bios->birthday_date }}</li>
                    <li><img src="{{ asset('/img/' . $Bios->birthday_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li><strong>Место рождения:</strong> {{ $Bios->birthday_place }}</li>
                    <li><img src="{{ asset('/img/' . $Bios->death_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li><strong>Дата смерти:</strong> {{ $Bios->death_date }}</li>
                    <li><strong>Место смерти:</strong> {{ $Bios->death_place }}</li>
                    <li><strong>Детсво:</strong></li>
                    <li><img src="{{ asset('/img/' . $Bios->childhood_live_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li>{{ $Bios->childhood_live_content }}</li>
                    <li><strong>Студенческие годы:</strong></li>
                    <li><img src="{{ asset('/img/' . $Bios->stydent_live_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li>{{ $Bios->stydent_live_content }}</li>
                    <li><strong>Основная жизнь:</strong></li>
                    <li><img src="{{ asset('/img/' . $Bios->osnovnaia_live_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li>{{ $Bios->osnovnaia_live_content }}</li>
                    <li><strong>Пенсия:</strong></li>
                    <li><img src="{{ asset('/img/' . $Bios->pensia_live_img) }}" alt="" class="img-fluid my-4"
                            style="max-height: 250px"></li>
                    <li>{{ $Bios->pensia_live_content }}</li>
                    <li><strong>Главная активность в науке:</strong></li>
                    <li>{{ $Bios->opisanie_deitelnosti }}</li>
                    <li><strong>Опыт работы професиональный:</strong></li>
                    <li>{{ $Bios->xp_for_work }}</li>
                    <li><strong>Достижения:</strong></li>
                    <li>{{ $Bios->achivments }}</li>
                    <li><strong>Награды:</strong></li>
                    <li>{{ $Bios->nagradi }}</li>
                </ul>
            </div>
        </div>




    </div>
@endsection
