@extends('layouts.app')

@section('content')
 <div class="container text-center">
        <div class="row">
@foreach ($News as $New) 
          <div class="col p-2">
            <div class="card " style="width: 18rem;">
          <img src="{{asset('/img/' . $New->img)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$New->name}}</h5>
            <a href="{{ route('deletenews', $New->id) }}" class="btn btn-primary p-2">Удалить</a>
            <a href="{{ route('upgratenew', $New->id) }}" class="btn btn-primary">Изменить</a>

          </div>
        </div>
          </div>
          
    
@endforeach
   </div>
      </div>
@endsection