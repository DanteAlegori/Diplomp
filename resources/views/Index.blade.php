@extends('layouts.app')
@section('content')
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{ asset('../public/img/rostok.jpg') }}" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">Храним историю</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Здесь преставленны множество биографий людей связанных с сельскийм хозяйством</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Посмотреть</button>
      </div>
    </div>
  </div>
@endsection
