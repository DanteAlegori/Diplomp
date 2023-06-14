@extends('layouts.app')

@section('content')
<div class="page-header">
    <h1>Неподтвержденные биографии</h1>
    <hr>
</div>
<div class="row">
    @foreach($bios as $bio)
    <div class="col-md-4 col-sm-6">
        <div class="card mb-4">
            <img src="{{ asset('/img/' . $bio->img) }}" class="card-img-top" alt="{{ $bio->name }}">
            <div class="card-body">
                <h2 class="card-title">{{ $bio->name }} {{ $bio->surname }} {{ $bio->patronomic }}</h2>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('bio_one', $bio->id) }}" class="btn btn-outline-success btn-hover">{{ __('Подробнее') }}</a>
                <form method="POST" action="{{ route('approve', $bio) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">{{ __('Подтвердить') }}</button>
                </form>
                <form method="GET" action="{{ route('delete', $bio->id) }}">
                    @csrf
                    
                    <button type="submit" class="btn btn-danger">{{ __('Удалить') }}</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection