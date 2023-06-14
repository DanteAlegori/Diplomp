@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center my-4">{{ ('Категории') }}</h1>
  <div class="accordion accordion-flush" id="accordionFlushExample">
    @foreach ($categori as $item)
    <div class="accordion-item border border-dark mb-4">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#categori{{ $item->id }}" aria-expanded="false" aria-controls="categori{{ $item->id }}">
          {{ $item->name }}
        </button>
      </h2>
      <div id="categori{{ $item->id }}" class="accordion-collapse collapse"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          <p id="description_{{ $item->id }}" class="card-text mb-5">{!! html_entity_decode($item->description) !!}</p>
          <div class="d-flex justify-content-between">
            <a href="{{ route('upgratecategori', $item->id) }}" class="btn btn-primary">{{ ('Изменить') }}</a>
            <form action="{{ route('deletecategori', $item->id) }}" method="GET">
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
<script>
       @foreach ($categori as $categori)      
        tinymce.get('description_{{ $categori->id }}').setContent("{!! addslashes(html_entity_decode($categori->description)) !!}");
    @endforeach
</script>
@endsection


