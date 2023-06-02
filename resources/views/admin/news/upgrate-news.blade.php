@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
  <form class="mt-10" action="{{ route('updatenewss') }}" enctype="multipart/form-data" method="POST" >
    @csrf

    <legend>Обновление Новостей</legend>
    <input type="hidden" name="news_id" value="{{ $news->id }}">
    <div class="mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="string" class="form-control" id="name" name="name"  value="{{ $news->name }}">
    </div>

    <div class="mb-3">
      <label for="zagolovok" class="form-label">Заголовок</label>
        <textarea class="form-control" id="zagolovok"  name="zagolovok" rows="10">{{ $news->zagolovok }}</textarea>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Контенд</label>
          <textarea class="form-control" id="content"  name="content" rows="10">{{ $news->content }}</textarea>
      </div>

      <div class="mb-3">
      <label for="img" class="form-label">Фото новости</label>  
      <input class="form-control" type="file" id="img" name="img">
      </div>

     

      <button type="submit" class="btn btn-success">Обновить</button>
       </div>
   </form>
  </div>
@endsection