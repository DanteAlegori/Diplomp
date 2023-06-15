@extends('layouts.app')

@section('content')
<div class="page-header">
    <h1>Заявки в редакторы</h1>
    <hr>
  </div>
  
  <div class="row justify-content-center">
    <div class="col-12 col-sm-8">
      <form method="POST" action="{{ route('createEditorRequest') }}">
        @csrf
        <div class="form-group">
          <label for="content">Напишите почему вы хотите стать редактором и помогать нам создавая биографии</label>
          <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
          @error('content')
          <div class="invalid-feedback">{{ 'Вы не заполнили заявку' }}</div>
          @enderror
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Отправить заявку</button>
        </div>
      </form>
    </div>
  </div>
@endsection