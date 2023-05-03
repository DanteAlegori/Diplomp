@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Категории</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Дата создания</th>
                    <th>Дата обновления</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categori as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name}}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection