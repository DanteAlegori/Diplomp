@extends('layouts.app')

@section('content')
    <div class="container  ">
        <h1 class="text-center mb-4">{{ __('Пользователь') }}</h1>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Имя -{{ $user->name }}</p>
                        <p class="card-text">Фамилия -{{ $user->surname }}</p>
                        <p class="card-text">Логин -{{ $user->login }}</p>
                        <p class="card-text">Почта -{{ $user->email }}</p>
                        <p class="card-text">id пользователя -{{ $user->id }}</p>
                        <p class="card-text">Редактор - {{ $user->editor ? 'Да' : 'Нет' }}</p>
                        <p class="card-text">Модератор - {{ $user->moderator ? 'Да' : 'Нет' }}</p>

                    </div>
                    <div class="card-footer">
                        <small
                            class="text-muted">{{ __('Дата регистрации: :date', ['date' => $user->created_at->format('d.m.Y H:i:s')]) }}</small>
                    </div>
                    <div>
                        <a href="{{ route('admin_remove_user', ['id' => $user->id]) }}"
                            class="btn btn-danger">{{ __('Удалить') }}</a>

                        @if ($user->moderator)
                            <a href="{{ route('makeEditor', ['id' => $user->id]) }}"
                                class="btn btn-danger">{{ __('Сделать редактором') }}</a>
                        @endif


                        @if ($user->editor)
                            <a href="{{ route('makeModerator', ['id' => $user->id]) }}"
                                class="btn btn-danger">{{ __('Сделать модератором') }}</a>
                        @endif



                    </div>
                </div>
            </div>

        </div>
    @endsection
