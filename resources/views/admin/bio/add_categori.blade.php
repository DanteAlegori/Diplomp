@extends('layouts.app')

@section('content')
    <h1>Add Category to Bio</h1>
    <form method="POST" action="{{ route('add_categori') }}">
        @csrf

        <div class="form-group">
            <label for="categori">Category:</label>
            <select id="categori" name="categori_id" class="form-control">
                @foreach($categori as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
@endsection