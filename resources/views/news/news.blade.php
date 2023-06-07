@extends('layouts.app')

@section('content')
<div class="news-section container py-5">
    <div class="row g-3">
        @foreach ($News as $new)
            @if (!empty(trim($new->content)))
                <div class="col-md-6">
                    <div class="card h-100 news-card shadow-sm">
                        <div class="card-img-top news-img"  style="background-image: url('{{ asset('/img/' . $new->img) }}')">
                            <a href="{{ route('news_one', $new->id) }}">
                                <img src="{{ asset('/img/' . $new->img) }}" alt="{{ $new->name }}" class="d-none d-md-block img-fluid news-img" style="min-height: 200px" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title h5 fw-bold mb-0 pb-0">{{ $new->name }}</h3>
                            <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($new->zagolovok, 120) }}</p>
                            <a href="{{ route('news_one', $new->id) }}" class="btn btn-primary">{{ __('Read More') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection