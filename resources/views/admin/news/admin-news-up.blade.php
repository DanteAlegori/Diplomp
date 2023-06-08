@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center my-4">{{ ('Новости') }}</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($News as $news)
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('/img/' . $news->img) }}" class="card-img-top" alt="{{ $news->name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $news->name }}</h5>
            <div class="d-flex justify-content-between">
              <a href="{{ route('deletenews', $news->id) }}" class="btn btn-danger me-2">{{ ('Удалить') }}</a>
              <a href="{{ route('upgratenew', $news->id) }}" class="btn btn-primary">{{ ('Изменить') }}</a>
              <a href="{{ route('viewaddcategorinews', $news->id) }}" class="btn btn-primary me-2">{{ ('Добавить категорию') }}</a>
              

            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection