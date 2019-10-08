@extends('layouts.app')

@section('page-header', 'Lista Servicii Recurente')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Default Box Example</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('recurrent-services.create') }}" class="btn btn-primary">Adauga Serviciu Recurent</a>
                    </div>
                </div>
                <div class="box-body">
                    @if (count($recurrentServices) > 0)
                        @foreach ($recurrentServices as $recurrentService)
                            <div class="row">
                                <div class="col-xs-2">
                                    {{ $recurrentService->name }}
                                </div>
                                <div class="col-xs-1">
                                    {{ $recurrentService->price }}
                                </div>
                                <div class="col-xs-2">
                                    <a href="{{ route('recurrent-services.show', ['recurrent_service' => $recurrentService]) }}">view</a>
                                </div>
                            </div>
                        @endforeach

                    @else
                        <div class="row">
                            <div class="col-xs-12">
                                Nu exista servicii recurente create.
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection