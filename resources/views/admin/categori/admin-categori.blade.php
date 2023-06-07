@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center my-4">{{ ('Категории') }}</h1>
  <div class="accordion accordion-flush" id="accordionFlushExample">
    @foreach ($categori as $categori)
      <div class="accordion-item border border-dark mb-4">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#categori{{ $categori->id }}" aria-expanded="false" aria-controls="categori{{ $categori->id }}">
            {{ $categori->name }}
          </button>
        </h2>
        <div id="categori{{ $categori->id }}" class="accordion-collapse collapse"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <p class="card-text mb-3">{{ $categori->description }}</p>
            <div class="d-flex justify-content-between">
              <a href="{{ route('upgratecategori', $categori->id) }}"
                class="btn btn-primary">{{ ('Изменить') }}</a>
              <form action="{{ route('deletecategori', $categori->id) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">{{ ('Удалить') }}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection


