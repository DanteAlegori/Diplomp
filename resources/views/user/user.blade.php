@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">{{ __('Личный кабинет') }}</h1>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="accordion" id="bioAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="bioHeader">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bioCollapse" aria-expanded="true" aria-controls="bioCollapse">
                                <h2>{{ __('Ваши возможности') }}</h2>
                            </button>
                        </h2>
                        <div id="bioCollapse" class="accordion-collapse collapse show" aria-labelledby="bioHeader"
                            data-bs-parent="#bioAccordion">
                            <div class="accordion-body">
                                <div class="list-group">
                                    <a href="{{ route('createbioviewuser') }}" class="btn btn-primary">{{ __('Добавить биографию') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   
                        @endsection
