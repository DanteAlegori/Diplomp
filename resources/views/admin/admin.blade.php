@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Административная панель</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Здесь преставлены все иструменты администратора</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
<ul>
  <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"><a href="{{route('admin_bio')}}">Биографии администратора</a></button>

  <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold p-2"><a href="{{route('createview')}}">Добавить Биографию</a></button>
</ul>
        </div>
      </div>
    </div>
  </div>
  </div>

@endsection
