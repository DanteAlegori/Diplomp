@extends('layouts.app')

@section('content')
<div class="admin-panel-section container">
    <h1 class="admin-panel-title">{{ __('Admin panel') }}</h1>
        
    <div class="admin-panel-buttons">
        <a href="{{ route('admin_bio') }}" class="btn btn-primary">{{ __('Manage Biographies') }}</a>
        
        <a href="{{ route('createview') }}" class="btn btn-primary">{{ __('Add New Biography') }}</a>
        
        <a href="{{ route('admin-news') }}" class="btn btn-primary">{{ __('Manage News') }}</a>
        
        <a href="{{ route('createnewsview') }}" class="btn btn-primary">{{ __('Add New News') }}</a>
    </div>
</div>
@endsection
