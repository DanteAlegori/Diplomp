@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('searchuser') }}" method="GET">
        <div class="form-group">
            <label for="login">Логин:</label>
            <input type="text" name="login" value="{{ old('login') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="surname">Фамилия:</label>
            <input type="text" name="surname" value="{{ old('surname') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="editor">Редактор:</label>
            <select name="editor" class="form-control">
                <option value="">- не выбрано -</option>
                <option value="1" {{ old('editor') === '1' ? 'selected' : '' }}>Да</option>
                <option value="0" {{ old('editor') === '0' ? 'selected' : '' }}>Нет</option>
            </select>
        </div>
        <div class="form-group">
            <label for="moderator">Модератор:</label>
            <select name="moderator" class="form-control">
                <option value="">- не выбрано -</option>
                <option value="1" {{ old('moderator') === '1' ? 'selected' : '' }}>Да</option>
                <option value="0" {{ old('moderator') === '0' ? 'selected' : '' }}>Нет</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Найти пользователей</button>
    </form>
    
    <hr>
    
    @if ($users->isEmpty())
        <p>Пользователи не найдены.</p>
    @else
        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">{{ $user->email }}</p>
                            <p class="card-text">{{ $user->id }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('oneuser', $user->id) }}" class="btn btn-danger me-2">{{ ('Подробнее') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
<div class="container">
    
    <h1 class="text-center mb-4">{{ __('Все пользователи') }}</h1>
    
    <div class="row">
        @foreach ($userss as $user)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">{{ $user->email }}</p>
                    <p class="card-text">{{ $user->id }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('oneuser', $user->id) }}" class="btn btn-danger me-2">{{ ('Подробнее') }}</a>
                  </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection