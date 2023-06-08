@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center my-4">{{ ('Биографии') }}</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($Bios as $Bio)
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('/img/' . $Bio->img) }}" class="card-img-top" alt="{{ $Bio->name }}">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title">{{ $Bio->name }} {{ $Bio->surname }} {{ $Bio->patronomic }}</h5>
            @if ($Bio->categori)
            <span class="badge bg-primary">{{ $Bio->categori->name }}</span>
            @endif
            <div>
              <a href="{{ route('delete', $Bio->id) }}" class="btn btn-danger me-2">{{ ('Удалить') }}</a>
              <a href="{{ route('upgrate', $Bio->id) }}" class="btn btn-primary me-2">{{ ('Изменить') }}</a>
              <a href="{{ route('viewaddcategoribio', $Bio->id) }}" class="btn btn-primary me-2">{{ ('Добавить категорию') }}</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection