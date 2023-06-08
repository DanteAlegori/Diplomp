@extends('layouts.app')

@section('content')
    <div class="container py-5 biography-section">
        <form method="GET" action="{{ route('bios.index') }}">
            <div class="form-group">
                <label for="category">Категории:</label>
                <select name="category" id="category" class="form-control">
                    <option value="">Все категории</option>
                    @foreach ($categori as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Отфильтровать</button>
        </form>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center g-4">
            @foreach ($Bios as $bio)
                <div class="col-md-4">
                    <div class="card h-100 biography-card">
                        <img src="{{ asset('/img/' . $bio->img) }}" alt="{{ $bio->name }}" class="card-img-top"
                            style="max-height: 300px;" />
                        <div class="card-body">
                            <h3 class="card-title">{{ $bio->name }} {{ $bio->surname }} {{ $bio->patronomic }}</h3>
                        </div>

                        @if ($bio->categori)
                            <span class="badge bg-primary">{{ $bio->categori->name }}</span>
                        @endif
                        <div class="card-footer d-grid gap-2">
                            <a href="{{ route('bio_one', $bio->id) }}"
                                class="btn btn-outline-success btn-hover">{{ __('Читать') }}</a>

                            @unless (Auth::guest())
                                <form
                                    action="{{ route('addFavoriteBio', ['user_id' => Auth::user()->id, 'bio_id' => $bio->id]) }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-success btn-hover">Добавить в избранное
                                    </button>
                                </form>
                            @endunless
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
