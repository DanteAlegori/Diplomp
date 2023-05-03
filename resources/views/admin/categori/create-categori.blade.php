@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавление новой категории</h1>
        <form method="POST" action="{{ route('create_categorii') }}">
            @csrf
            <div class="form-group">
                <label for="name">Название:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Имя категории" autocomplete="тame">
            </div>
            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Описание" autocomplete="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection