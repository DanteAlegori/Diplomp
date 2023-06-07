@extends('layouts.app')
@section('content')
    <div class="bg-image d-flex justify-content-center align-items-center"
        style="
    background-image: url('../public/img/pol.jpg');
    height: 100vh;  
  ">
        <div class="px-4 py-5 my-5 text-center" style="backdrop-filter: blur(4px);">
            <h1 class="display-5 fw-bold">Агробио</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Наш сайт позволяет узнать о исторических личностях связанных с сельским хозяйством и не
                    только.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('news') }}"> <button type="button" class="btn btn-primary btn-lg px-4 gap-3"> Узнать
                            больше</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
