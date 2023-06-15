@extends('layouts.app')

@section('content')
<div class="container">
  <form class="mt-4 pt-3 pb-5" action="{{ route('updatenewss') }}" enctype="multipart/form-data" method="POST" >
    @csrf

    <legend class="mb-3">Обновление Новостей</legend>
    <input type="hidden" name="news_id" value="{{ $news->id }}">

    <div class="form-group mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="string" class="form-control form-control-sm" id="name" name="name" value="{{ $news->name }}">
    </div>

    <div class="form-group mb-3">
      <label for="zagolovok" class="form-label text-left">Заголовок</label>
      <textarea class="form-control form-control-sm" id="zagolovok"  name="zagolovok" rows="6">{{ $news->zagolovok }}</textarea>
    </div>

    <div class="form-group mb-3">
      <label for="content" class="form-label text-left">Контент</label>
      <textarea class="form-control form-control-sm" id="content"  name="content" rows="6">{{ $news->content }}</textarea>
    </div>

    <div class="form-group mb-3">
      <label for="img" class="form-label">Фото новости</label>  
      <input class="form-control form-control-sm" type="file" id="img" name="img">
    </div>

    <div class="form-group mb-3 d-grid gap-2">
      <button type="submit" class="btn btn-success btn-lg">Обновить</button>
    </div>
  </form>
</div>
@endsection