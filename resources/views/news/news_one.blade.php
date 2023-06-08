@extends('layouts.app')

@section('content')
 
<div class="container py-5">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card mb-5">
        <img src="{{ asset('/img/' . $News->img)}}" class="card-img-top" alt="{{ $News->name }}">
        <div class="card-body">
          <h1 class="card-title display-5 fw-bold text-body-emphasis mb-4">{{$News->name}}</h1>
          <p class="card-text mb-5">{{$News->content}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div>@foreach ($comments as $comment)
  @if ($comment->approved)
      <div class="card mb-3">
          <div class="card-body">
              <h5 class="card-title">{{ $comment->user->name }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at->diffForHumans() }}</h6>
              <p class="card-text">{{ $comment->content}}</p>
          </div>
      </div>
  @endif
@endforeach</div>
  <div>@if (Auth::check())
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="card-title mb-4">Оставить комментарий</h4>

            <form method="POST" action="{{ route('comments.store', [$News->id, $user_id ?? null]) }}">
                @csrf

                <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" readonly>
                <br>
                <textarea name="content" id="content" class="form-control" rows="5"></textarea>

               
                <button type="submit" class="btn btn-primary">Отправить комментарий</button>
            </form>
        </div>
    </div>
@endif</div>
@endsection