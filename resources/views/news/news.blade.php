@extends('layouts.app')

@section('content')
<div class="news-section container">
    <div class="row">
        @foreach ($News as $new)
            @if (!empty(trim($new->content)))
                <div class="col-md-6 mb-4">
                    <div class="card h-100 news-card">
                        <div class="card-img-top news-img"  style="background-image: url('{{ asset('/img/' . $new->img) }}')">
                            <img src="{{asset('/img/' . $new->img)}}" class="img-fluid" /> 
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $new->name }}</h3>
                            <p class="card-text">{{ $new->zagolovok }}</p>
                            <a href="{{ route('news_one', $new->id) }}" class="btn btn-primary">{{ __('Read More') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection