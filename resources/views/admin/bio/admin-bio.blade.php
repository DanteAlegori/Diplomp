@extends('layouts.app')

@section('content')
 <div class="container text-center">
        <div class="row">
@foreach ($Bios as $Bio) 
          <div class="col p-2">
            <div class="card " style="width: 18rem;">
          <img src="{{asset('/img/' . $Bio->img)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$Bio->name}} {{$Bio->surname}} {{$Bio->patronomic}}</h5>
            <a href="{{ route('delete', $Bio->id) }}" class="btn btn-primary p-2">Удалить</a>
            <a href="{{ route('upgrate', $Bio->id) }}" class="btn btn-primary">Изменить</a>

          </div>
        </div>
          </div>
          
    
@endforeach
   </div>
      </div>
@endsection