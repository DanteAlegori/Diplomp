@extends('layouts.app')

@section('content')
    <h1>Add Category to Bio</h1>
    <form method="POST" action="{{ route('addcategoribio', ['id' => $bio->id]) }}">
        @csrf
        <input type="hidden" name="id" value="{{ $bio->id }}">
        <div class="form-group">
            <label for="categori">Category:</label>
            <select id="categori" name="categori_id" class="form-control">
                @foreach($categori as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <input type="hidden" name="bio_id" value="{{ $bio->id }}">

        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
@endsection