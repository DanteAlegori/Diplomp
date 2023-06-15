@extends('layouts.app')

@section('content')
<div class="container">
  <form class="mt-4 pt-3 pb-5" action="{{ route('update_categori') }}" enctype="multipart/form-data" method="POST" >
    @csrf

    <legend class="mb-3">Обновление Категории</legend>
    <input type="hidden" name="categori_id" value="{{ $categori->id }}">

    <div class="form-group mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="string" class="form-control form-control-sm" id="name" name="name" value="{{ $categori->name }}">
    </div>

    <div class="form-group mb-3">
        <label for="description" class="form-label text-left">Описание</label>
          <textarea class="form-control form-control-sm" id="description"  name="description" rows="6">{{ $categori->description }}</textarea>
      </div>

    <div class="form-group mb-3 d-grid gap-2">
      <button type="submit" class="btn btn-success btn-lg">Обновить</button>
    </div>
  </form>
</div>
@endsection