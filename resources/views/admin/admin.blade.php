@extends('layouts.app')

@section('content')
<div class="px-4 py-5 my-5 text-center">
  <h1 class="display-5 fw-bold">Административная панель</h1>
  <div class="col-lg-6 mx-auto">
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <ul>
        <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"><a href="{{route('admin_bio')}}">Биографии администратора</a></button>
      
        <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold p-2"><a href="{{route('createview')}}">Добавить Биографию</a></button>
      </ul>
      <ul>
        <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"><a href="{{route('admin_bio')}}">Новости администратора</a></button>
        
        <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold p-2"><a href="{{route('createnewsview')}}">Добавить Новость</a></button>
      </ul>
    </div>
  </div>
</div>





@endsection
