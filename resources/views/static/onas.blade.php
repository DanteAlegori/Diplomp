@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="text-center mb-5">О нас</h1>
        <p class="lead text-center mb-5">Мы - команда, которая любит и ценит традиции сельского хозяйства. Мы сотрудничаем с музеем, чтобы сохранить историю сельской жизни и рассказать об этом миру.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 text-center mb-5">
        <img src="{{ asset('../public/img/dog.jpg') }}" alt="Фото нашей команды" class="img-fluid rounded-circle mb-3" width="300" height="300">
        <h3>Наша команда</h3>
        <p>Мы - эксперты в области сельского хозяйства, а также любители этой отрасли. Мы работаем с увлечением, чтобы рассказать о красоте сельской жизни и сохранить ее историю. Наша команда состоит из высококвалифицированных специалистов с многолетним опытом работы в сфере сельского хозяйства.</p>
      </div>
      <div class="col-md-6 text-center">
        <h3>Наши контакты</h3>
        <ul class="list-unstyled">
          <li class="mb-3"><i class="fa fa-phone mr-2"></i>+7-950-334-56-65</li>
          <li class="mb-3"><i class="fa fa-envelope mr-2"></i>poshta@gmail.com</li>
          <li>
          </li>
        </ul>
        <div class="mb-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2287.11704836513!2d73.30900699865637!3d55.02364100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab003bd31df837%3A0x7c75d7c66435e039!2z0JPQvtGA0L3QsNGPINGD0LsuLCA50JAsINCe0LzRgdC6LCDQntC80YHQutCw0Y8g0L7QsdC7LiwgNjQ0MDA4!5e0!3m2!1sru!2sru!4v1680693794844!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
@endsection

