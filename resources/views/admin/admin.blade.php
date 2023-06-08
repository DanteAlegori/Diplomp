@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">{{ __('Административная панель') }}</h1>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="accordion" id="bioAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="bioHeader">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bioCollapse" aria-expanded="true" aria-controls="bioCollapse">
                                <h2>{{ __('Биографии') }}</h2>
                            </button>
                        </h2>
                        <div id="bioCollapse" class="accordion-collapse collapse show" aria-labelledby="bioHeader"
                            data-bs-parent="#bioAccordion">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="{{ route('admin_bio') }}" class="btn btn-primary">{{ __('Редактировать') }}</a>
                                    <a href="{{ route('createview') }}" class="btn btn-success">{{ __('Добавить') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2>{{ 'Новости' }}</h2>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="{{ route('admin-news') }}" class="btn btn-primary">{{ 'Редактировать' }}</a>
                                    <a href="{{ route('createnewsview') }}" class="btn btn-success">{{ 'Добавить' }}</a>
                                    <a href="{{ route('chek_coments') }}" class="btn btn-success">{{ 'Одобрить коментарии' }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h2>{{ 'Категории' }}</h2>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="{{ route('all_categori') }}"
                                        class="btn btn-primary">{{ 'Редактировать' }}</a>
                                    <a href="{{ route('create_categori') }}"
                                        class="btn btn-success">{{ __('Добавить') }}</a>
                                </div>
                            </div>
                        @endsection
