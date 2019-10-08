@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $recurrentService->name }}</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('recurrent-services.edit', ['recurrent_service' => $recurrentService]) }}" class="btn btn-primary">Editeaza</a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table">
                        <tr>
                            <td>Nume</td><td>{{ $recurrentService->name }}</td>
                        </tr>
                        <tr>
                            <td>Pret</td><td>{{ $recurrentService->price }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection