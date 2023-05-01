@extends('layouts.app')

@section('content')

<div class="px-4 py-5 my-5 text-center">
  <h1 class="display-5 fw-bold">Личный кабинет</h1>
  <div class="col-lg-6 mx-auto">
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <ul>
        
      </ul>
      <ul>

      </ul>
    </div>
  </div>
</div>

<div class="container">
<div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Ваши данные: <br>
            <ul>
                <li>Ваш логин-{{ auth()->user()->login }}</li> <br>
                <li>Ваше имя-{{ auth()->user()->name }}</li> <br>
                <li>Ваше фамилия-{{ auth()->user()->surname }}</li> <br>
                <li>Ваша почта-{{ auth()->user()->email }}</li>
            </ul>
        </h1> <br>
        <button class="btn btn-primary">Мои избранные</button>
      </div>
    </div>
  </div>
  <!-- Content here -->
</div>
@endsection
