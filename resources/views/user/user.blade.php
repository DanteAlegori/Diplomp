@extends('layouts.app')

@section('content')
<div class="container py-8">
    <h1 class="text-3xl text-center font-bold mb-8">Личный кабинет</h1>
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-bold mb-4">Ваши данные:</h2>
        <ul class="list-disc pl-4">
            <li class="mb-1">Ваш логин: {{ auth()->user()->login }}</li>
            <li class="mb-1">Ваше имя: {{ auth()->user()->name }}</li>
            <li class="mb-1">Ваша фамилия: {{ auth()->user()->surname }}</li>
            <li class="mb-1">Ваша почта: {{ auth()->user()->email }}</li>
        </ul>
    </div>
</div>
@endsection
