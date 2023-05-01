@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-center">Данный проект разработан со вместно с музеем имеет точные научные знания, о людях связанных с сельским хозяйством , проект еще в разработке и будет улудшатся. </div>
<div class="d-flex justify-content-center ">
  <img class="d-block mx-auto mb-4" src="{{ asset('../public/img/dog.jpg') }}" alt="" width="72" height="57">
</div>
</div>
<div class="container">
  <div class="container text-center">
    <div class="row">
      <div class="col">
    Наши контакты
      </div>
    </div>
    <div class="row">
      <div class="col">
        Телефон - +7-950-334-56-65
      </div>
      <div class="col">
        Почта - poshta@gmail.com
      </div>
    </div>
    <div class="row">
      <div class="d-flex justify-content-center ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2287.11704836513!2d73.30900699865637!3d55.02364100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab003bd31df837%3A0x7c75d7c66435e039!2z0JPQvtGA0L3QsNGPINGD0LsuLCA50JAsINCe0LzRgdC6LCDQntC80YHQutCw0Y8g0L7QsdC7LiwgNjQ0MDA4!5e0!3m2!1sru!2sru!4v1680693794844!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
@endsection