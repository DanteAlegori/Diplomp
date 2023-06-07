@extends('layouts.app')

@section('content')
<div class="container py-5 biography-section">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center g-4">
        @foreach ($Bios as $Bio)
        <div class="col-md-4">
            <div class="card h-100 biography-card">
                <img src="{{ asset('/img/' . $Bio->img) }}" alt="{{ $Bio->name }}" class="card-img-top" style="max-height: 300px;" />
                <div class="card-body">
                    <h3 class="card-title">{{ $Bio->name }} {{ $Bio->surname }} {{ $Bio->patronomic }}</h3>
                    <p class="card-text">{{ \Illuminate\Support\Str::words(strip_tags($Bio->summary), 20) }}</p>
                </div>
                <div class="card-footer d-grid gap-2">
                    <a href="{{ route('bio_one', $Bio->id) }}" class="btn btn-outline-success btn-hover">{{ __('Читать') }}</a>
                  </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection