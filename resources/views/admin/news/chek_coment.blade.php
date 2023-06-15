@extends('layouts.app')
@section('content')
@foreach ($news as $new)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $new->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $new->created_at->diffForHumans() }}</h6>
            <p class="card-text">{{ $new->body }}</p>

            <a href="{{ route('news_one', $new->id) }}" class="card-link">Подробнее</a>

            <!-- Вывод комментариев -->
            @if ($new->comments && $new->comments->where('approved', false)->count() > 0)
                <div class="mt-4">
                    <h6 class="text-muted mb-3">Комментарии</h6>
                    @foreach ($new->comments->where('approved', false) as $comment)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at->diffForHumans() }}</h6>
                                <p class="card-text">{{ $comment->content }}</p>

                                <!-- Вывод имени комментатора и его ID -->
                                <div class="small text-muted">
                                    Комментатор:{{ $comment->user->name }} (ID: {{ $comment->user_id }})
                                </div>

                                <form method="POST" action="{{ route('comments.update', $comment->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="approved" value="1">
                                    <button type="submit" class="btn btn-success">Подтвердить</button>
                                </form>
                                <form action="{{ route('comments.delete', $comment->id) }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endforeach 
@endsection