@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <h1 class="text-center mt-4">Добавление новой категории</h1>
      <form method="POST" action="{{ route('create_categorii') }}" class="mt-4 pt-3 pb-5">
        @csrf
        <div class="form-group mb-3">
          <label for="name" class="form-label">Название:</label>
          <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Имя категории" autocomplete="тame">
        </div>
        <div class="form-group mb-3">
          <label for="description" class="form-label text-left">Описание:</label>
          <textarea class="form-control form-control-sm" id="description" name="description" placeholder="Описание" autocomplete="description"></textarea>
        </div>
        <div class="form-group mb-3 d-grid gap-2">
          <button type="submit" class="btn btn-primary btn-lg">Создать</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection