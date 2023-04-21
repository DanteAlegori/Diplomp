@extends('layouts.app')

@section('content')
 
@foreach ($News as $New) 
         
<div class="col p-2">
    <div class="card " style="width: 18rem;">
  <img src="{{asset('/img/' . $New->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">{{$New->name}} </h4>
    <h5 class="card-title">{{$New->zagolovok}} </h5>
    <a href="{{ route('news_one', $New->id) }}" class="btn btn-primary">Подробнее</a>
  </div>
</div>
  </div>
    
@endforeach
  
@endsection