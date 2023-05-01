@extends('layouts.app')

@section('content')
 
@foreach ($News as $New) 
<div class="container ">
  <div class="row gx-5">
    <div class="col-md-6 mb-4">
      <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
        <img src="{{asset('/img/' . $New->img)}}" class="img-fluid" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
    </div>
    <div class="col-md-6 mb-4">
      <h4><strong>{{$New->name}}</strong></h4>
      <p class="text-muted">
        {{$New->zagolovok}}  
      </p>
    <a href="{{ route('news_one', $New->id) }}" class="btn btn-primary">Подробнее</a>
    </div>
  </div>
  </div>
@endforeach
@endsection