@extends('layouts.app')

@section('content')
    <h1>Избранные биографии</h1>
    @if ($favorites->count() > 0)
        <ul>
            @foreach ($favorites as $favorite)
            <div class="col-md-4">
                <div class="card h-100 biography-card">
                    <img src="{{ asset('/img/' .$favorite ->bio->img) }}" alt="{{ $favorite ->bio->name }}" class="card-img-top" style="max-height: 300px;" />
                    <div class="card-body">
                        <h3 class="card-title">{{ $favorite ->bio->name }} {{ $favorite ->bio->surname }} {{ $favorite ->bio->patronomic }}</h3>
                    </div>
                    @if ($favorite ->bio->categori)
                    <span class="badge bg-primary">{{ $favorite ->bio->categori->name }}</span>
                    @endif
                    <div class="card-footer d-grid gap-2">
                        <a href="{{ route('bio_one', $favorite ->bio->id) }}" class="btn btn-outline-success btn-hover">{{ __('Читать') }}</a>
                        <form action="{{ route('removeFavorite', ['bio_id' => $favorite->bio->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}" />
                            <button type="submit" class="btn btn-outline-success btn-hover">Удалить из избранного</button>
                        </form>
                      </div>
                </div>
            </div>
            @endforeach
        </ul>
    @else
        <p>Нет избранных биографий</p>
    @endif
@endsection