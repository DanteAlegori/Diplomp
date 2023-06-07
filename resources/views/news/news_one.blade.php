@extends('layouts.app')

@section('content')
 
<div class="container py-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <img src="{{ asset('/img/' . $News->img)}}" class="img-fluid rounded mb-4" alt="{{ $News->name }}">
      <h1 class="display-5 fw-bold text-body-emphasis mb-4">{{$News->name}}</h1>
      <p class="mb-5">{{$News->content}}</p>
    </div>
  </div>
</div>
  
@endsection