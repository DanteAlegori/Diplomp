@extends('layouts.app')

@section('content')
    <section class="container">
        <section class="row justify-content-center">
            <article class="team-info col-md-6 center mb-5">
                <h2>{{ 'Наша команда' }}</h2>
                <p>{{ 'Мы - эксперты в области сельского хозяйства, а также любители этой отрасли. Мы работаем с увлечением, чтобы рассказать о красоте сельской жизни и сохранить ее историю. Наша команда состоит из высококвалифицированных специалистов с многолетним опытом работы в сфере сельского хозяйства.' }}
                </p>
            </article>
            <article class="contact-info col-md-6 center">
                <h2>{{ __('Наши контакты') }}</h2>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-phone mr-2 text-agrobio"></i>+7-950-334-56-65</li>
                    <li class="mb-3"><i class="fas fa-envelope mr-2 text-agrobio"></i>poshta@gmail.com</li>
                </ul>
                <div class="map-display mb-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2287.11704836513!2d73.30900699865637!3d55.02364100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab003bd31df837%3A0x7c75d7c66435e039!2z0JPQvtGA0L3QsNGPINGD0LsuLCA50JAsINCe0LzRgdC6LCDQntC80YHQutCw0Y8g0L7QsdC7LiwgNjQ0MDA4!5e0!3m2!1sru!2sru!4v168069379484

4!5m2!1sru!2sru"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </article>
        </section>
    </section>
@endsection
