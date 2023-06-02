@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
  <form class="mt-10" action="{{ route('update_categori') }}" enctype="multipart/form-data" method="POST" >
    @csrf

    <legend>Обновление Категории</legend>
    <input type="hidden" name="categori_id" value="{{ $categori->id }}">
    <div class="mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="string" class="form-control" id="name" name="name"  value="{{ $categori->name }}">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Заголовок</label>
        <textarea class="form-control" id="description"  name="description" rows="10">{{ $categori->description }}</textarea>
    </div>


      <button type="submit" class="btn btn-success">Обновить</button>
       </div>
   </form>
  </div>
@endsection