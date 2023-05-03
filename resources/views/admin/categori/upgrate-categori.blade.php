@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактирование категории</h1>
        <form method="post" action="{{ route('categories.update', $category->id) }}">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group">
                <label for="name">Название:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea class="form-control" id="description" name="description" required>{{ $category->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
@endsection