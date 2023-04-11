@extends('layouts.app')

@section('content')
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
