@extends('layouts.app')

@section('content')
 <div class="container text-center">
        <div class="row">
@foreach ($Bios as $Bio) 
          <div class="col p-2">
            <div class="card " style="width: 18rem;">
          <img src="{{asset('/img/' . $Bio->img)}}" class="card-img-top" alt="...">
          <h5 class="card-title">{{$Bio->name}} {{$Bio->surname}} {{$Bio->patronomic}}</h5>


          
          <div class="container text-center">
            <div class="row">
              <div class="col  p-2">
                 <a href="{{ route('delete', $Bio->id) }}" class="btn btn-primary p-2">Удалить</a>
              </div>
              <div class="col  p-2">
                <a href="{{ route('upgrate', $Bio->id) }}" class="btn btn-primary">Изменить</a>
              </div>
              <div class="col  p-2">
                <a href="{{ route('add_categori', $Bio->id) }}" class="btn btn-primary">Добавить категорию</a>
              </div>

              <div class="col  p-2">
                <a href="{{ route('upgrate', $Bio->id) }}" class="btn btn-primary">Добавить родителей</a>
              </div>

              <div class="col  p-2">
                 <a href="{{ route('upgrate', $Bio->id) }}" class="btn btn-primary">Добавить детей</a>
              </div>

            </div>
          </div>

        </div>
          </div>
          
    
@endforeach
   </div>
      </div>
@endsection