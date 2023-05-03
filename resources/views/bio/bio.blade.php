@extends('layouts.app')

@section('content')
<div class="biographies-section container">
    <div class="row">
        @foreach ($Bios as $Bio)
        <div class="col-md-4 mb-4">
            <div class="card h-100 biography-card">
                <img src="{{ asset('/img/' . $Bio->img) }}" alt="{{ $Bio->name }}" class="card-img-top" style="max-height: 300px;" />
                <div class="card-body">
                    <h3 class="card-title">{{ $Bio->name }} {{ $Bio->surname }} {{ $Bio->patronomic }}</h3>
                    <p class="card-text">{{ \Illuminate\Support\Str::words(strip_tags($Bio->summary), 20) }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('bio_one', $Bio->id) }}" class="btn btn-primary">{{ __('Read More') }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection