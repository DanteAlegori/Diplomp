@extends('layouts.app')

@section('content')
  
<div class="px-4 py-5 my-5 text-center">
    <img src="{{asset('/img/' . $Bios->img)}}" class="img-fluid" alt="...">
    <h1 class="display-5 fw-bold text-body-emphasis">{{$Bios->name}} {{$Bios->surname}} {{$Bios->patronomic}}</h1>
    <div class="col-lg-6 mx-auto">
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
       <div class="p-1"> <h3> {{$Bios->birthday_date}}</h3></div> 
       <div class="p-1"> <h3>-  {{$Bios->death_date}}</h3></div> 
      </div>
    </div>
    <img src="{{asset('/img/' . $Bios->birthday_place)}}" class="img-fluid" alt="...">
  </div>

@endsection
