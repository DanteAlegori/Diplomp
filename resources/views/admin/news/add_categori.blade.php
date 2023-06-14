@extends('layouts.app')

@section('content')
    <h1>Добавить категорию в новости</h1>
    <form method="POST" action="{{ route('addcategorinews', ['id' => $news->id]) }}">
        @csrf
        <input type="hidden" name="id" value="{{ $news->id }}">
        <div class="form-group">
            <label for="categori">Категории:</label>
            <select id="categori" name="categori_id" class="form-control">
                @foreach($categori as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <input type="hidden" name="news_id" value="{{ $news->id }}">

        <button type="submit" class="btn btn-primary">Добавить категорию</button>
    </form>
@endsection