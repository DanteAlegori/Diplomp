@extends('layouts.app')

@section('content')
    <div class="news-section container py-5">
        <div class="row g-3">
            @foreach ($news as $news)
                @if (!empty(trim($news->content)))
                    <div class="col-md-6">
                        <div class="card h-100 news-card shadow-sm">
                            <div class="card-img-top news-img"
                                style="background-image: url('{{ asset('../public/img/' . $news->img) }}')">
                                <a href="{{ route('news_one', $news->id) }}">
                                    <img src="{{ asset('../public/img/' . $news->img) }}" alt="{{ $news->name }}"
                                        class="d-none d-md-block img-fluid news-img" style="min-height: 200px" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title h5 fw-bold mb-0 pb-0">{{ $news->name }}</h3>
                                @if ($news->categori)
                                    <span class="badge bg-primary">{{ $news->categori->name }}</span>
                                @endif
                                <p id="zagolovok" class="card-text mb-5">{!! html_entity_decode($news->zagolovok) !!}</p>
                                <script>
                                    tinymce.get('zagolovok').setContent('{{($news->zagolovok)}}');
                                  </script>
                                <a href="{{ route('news_one', $news->id) }}"
                                    class="btn btn-primary">{{ __('Читать') }}</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
  
@endsection
