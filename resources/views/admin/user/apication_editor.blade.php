@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Заявки в редакторы</h1>
  <div class="row">
    @foreach($editorRequests as $editorRequest)
    <div class="col-md-4">
      <div class="card mb-4">
        <div class="card-header">Имя - {{ $editorRequest->user->name }}</div>
        <div class="card-header">Логин - {{ $editorRequest->user->login }}</div>
        <div class="card-header">Id - {{ $editorRequest->user->id }}</div>
        <div class="card-body">
          <p id="content_{{ $editorRequest->id }}" class="card-text mb-5">Заявка - {!! html_entity_decode($editorRequest->content) !!}</p>
          <p class="card-text">Дата подачи заявки - <small class="text-muted">{{ $editorRequest->created_at->format('d.m.Y H:i') }}</small></p>
          <form action="{{ route('approve1', $editorRequest->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Подтвердить</button>
          </form>
          <form method="POST" class="d-inline" action="{{ route('editor-requests.destroy', $editorRequest->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        </div>
      </div>
      <script>
        tinymce.get('content_{{ $editorRequest->id }}').setContent('{{ $editorRequest->content }}');
      </script>
    </div>
    @endforeach
  </div>
</div>
@endsection