@extends('layouts.app')

@section('content')
 
<div class="px-4 py-5 my-5 text-center">
    <img src="{{asset('/img/' . $News->img)}}" class="img-fluid" alt="...">
    <h1 class="display-5 fw-bold text-body-emphasis">{{$News->name}}</h1>
    <div class="col-lg-6 mx-auto">
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <h2>{{$News->content}}</h2>
        <div>
</div>
</div>

  
@endsection