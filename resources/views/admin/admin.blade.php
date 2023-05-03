@extends('layouts.app')

@section('content')
<div class="admin-panel-section container">
    <h1 class="admin-panel-title">{{ __('Admin panel') }}</h1>
        
    <div class="admin-panel-buttons">

        <table class="table">
            <tbody>
              <tr>
                <h2>Биографии</h2>
                <td><a href="{{ route('admin_bio') }}" class="btn btn-primary">{{ __('Редактировать биографии') }}</a></td>
                <td><a href="{{ route('createview') }}" class="btn btn-primary">{{ __('Добавить биографии') }}</a></td>
              </tr>
            </tbody>
          </table>

          <table class="table">
            <tbody>
              <tr>
                <h2>Новости</h2>
                <td><a href="{{ route('admin-news') }}" class="btn btn-primary">{{ __('Редактировать новости') }}</a></td>
                <td><a href="{{ route('createnewsview') }}" class="btn btn-primary">{{ __('Добавить новость') }}</a></td>
              </tr>
            </tbody>
          </table>

          <table class="table">
            <tbody>
              <tr>
                <h2>Категории</h2>
                <td><a href="{{ route('all_categori') }}" class="btn btn-primary">{{ __('Редактировать категории') }}</a></td>
                <td><a href="{{ route('create_categori') }}" class="btn btn-primary">{{ __('Добавить категорию') }}</a></td>
              </tr>
            </tbody>
          </table>








        
    </div>
</div>
@endsection
