@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center my-4">{{ ('Новости') }}</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($News as $New)
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('/img/' . $New->img) }}" class="card-img-top" alt="{{ $New->name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $New->name }}</h5>
            <div class="d-flex justify-content-between">
              <a href="{{ route('deletenews', $New->id) }}" class="btn btn-danger me-2">{{ ('Удалить') }}</a>
              <a href="{{ route('upgratenew', $New->id) }}" class="btn btn-primary">{{ ('Изменить') }}</a>
              <a href="" class="btn btn-primary me-2">{{ ('Добавить категорию') }}</a>

            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection