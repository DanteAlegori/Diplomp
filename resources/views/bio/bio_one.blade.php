@extends('layouts.app')

@section('content')
  <div class="container">
<div class="px-4 py-5 my-5 text-center">
    <img src="{{asset('/img/' . $Bios->img)}}" class="img-thumbnail " alt="..." style="wight:50vw; height:50vw">
    <h1 class="display-5 fw-bold text-body-emphasis">{{$Bios->name}} {{$Bios->surname}} {{$Bios->patronomic}}</h1>
    <div class="col-lg-6 mx-auto">
      <div class=" d-sm-flex justify-content-sm-center">
         <div class="p"> <p> {{$Bios->birthday_date}}  -  {{$Bios->death_date}}</p></div> 
      <div>
</div>
</div>


<div class=" text-center " >
  <div class="row">
    <div class="col">
<div class="px-4 py-5 my-5 text-center">
  <img src="{{asset('/img/' . $Bios->birthday_img)}}" class="img-scale-down" alt="..." style="  width: 100%; height: 15vw;">
  <p class="">{{$Bios->birthday_place}}</p>
  <div class="col-lg-6 mx-auto">
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    </div>
  </div>
</div>
    </div>
    <div class="col">
<div class="px-4 py-5 my-5 text-center">
  <img src="{{asset('/img/' . $Bios->death_img)}}" class="img-scale-down" alt="..." style=" width: 100%; height: 15vw;">
  <p class="">{{$Bios->death_place}}</p>
  <div class="col-lg-6 mx-auto">
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    </div>
  </div>
</div>
    </div>
  </div>


<div class="px-4 py-5 my-5 text-center">
  <img src="{{asset('/img/' . $Bios->childhood_live_img)}}" class="img-thumbnail" alt="...">
  <h1 class="display-5 fw-bold text-body-emphasis"></h1>
  <div class="col-lg-6 mx-auto">
    <p>{{$Bios->childhood_live_content}}</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    </div>
  </div>
</div>

<div class="px-4 py-5 my-5 text-center">
  <img src="{{asset('/img/' . $Bios->stydent_live_img)}}" class="img-thumbnail" alt="...">
  <h1 class="display-5 fw-bold text-body-emphasis"></h1>
  <div class="col-lg-6 mx-auto">
    <p>{{$Bios->stydent_live_content}}</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    </div>
  </div>
</div>

<div class="px-4 py-5 my-5 text-center">
  <img src="{{asset('/img/' . $Bios->osnovnaia_live_img)}}" class="img-thumbnail" alt="...">
  <h1 class="display-5 fw-bold text-body-emphasis"></h1>
  <div class="col-lg-6 mx-auto">
    <p>{{$Bios->osnovnaia_live_content}}</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    </div>
  </div>
</div>

<div class="px-4 py-5 my-5 text-center">
  <img src="{{asset('/img/' . $Bios->pensia_live_img)}}" class="img-thumbnail" alt="...">
  <h1 class="display-5 fw-bold text-body-emphasis"></h1>
  <div class="col-lg-6 mx-auto">
    <p>{{$Bios->pensia_live_content}}</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    </div>
  </div>
</div>
 
</div>


@endsection
