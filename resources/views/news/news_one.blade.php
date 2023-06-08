@extends('layouts.app')

@section('content')
 
<div class="container py-5">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card mb-5">
        <img src="{{ asset('/img/' . $News->img)}}" class="card-img-top" alt="{{ $News->name }}">
        <div class="card-body">
          <h1 class="card-title display-5 fw-bold text-body-emphasis mb-4">{{$News->name}}</h1>
          <p class="card-text mb-5">{{$News->content}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection