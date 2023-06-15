@extends('layouts.app')

@section('content')
<div class="container">
  <form class="mt-4 pt-3 pb-5" action="{{ route('createnews') }}" enctype="multipart/form-data" method="POST" >
    @csrf

    <legend class="mb-3">Создание Новости</legend>

    <div class="form-group mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="string" class="form-control form-control-sm" id="name" name="name" required>
    </div>

    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="form-group mb-3">
          <label for="zagolovok" class="form-label text-left">Заголовок</label>
          <textarea class="form-control form-control-sm" id="zagolovok"  name="zagolovok" rows="6"></textarea>
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <div class="form-group mb-3">
          <label for="content" class="form-label text-left">Контент</label>
          <textarea class="form-control form-control-sm" id="content"  name="content" rows="6"></textarea>
        </div>
      </div>
    </div>

    <div class="form-group mb-3">
      <label for="img" class="form-label">Фото новости</label>  
      <input class="form-control form-control-sm" type="file" id="img" name="img">
    </div>


    <div class="form-group mb-3 d-grid gap-2">
      <button type="submit" class="btn btn-success btn-lg">Создать</button>
    </div>
  </form>
</div>
@endsection