@extends('layouts.app')
@section('content')
@foreach ($news as $new)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $new->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $new->created_at->diffForHumans() }}</h6>
            <p class="card-text">{{ $new->body }}</p>
            <a href="{{ route('news_one', $new->id) }}" class="card-link">Подробнее</a>
        </div>
        @if ($new->comments && $new->comments->where('approved', false)->count() > 0)
            @foreach ($new->comments->where('approved', false) as $comment)
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at->diffForHumans() }}</h6>
                    <p class="card-text">{{ $comment->content }}</p>
                    <form method="POST" action="{{ route('comments.update', $comment->id) }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="approved" value="1">
                        <button type="submit" class="btn btn-success">Подтвердить</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
@endforeach 
@endsection