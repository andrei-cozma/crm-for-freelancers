@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h3>Editeaza Serviciu Recurent</h3>
        </div>
    </div>

    <form action="{{ route('recurrent-services.update', ['recurrent_service' => $recurrentService]) }}" method="post">
        @method('patch')
        @include('recurrent-services.form')
        @csrf
        <button type="submit" class="btn btn-primary">Salveaza</button>
    </form>

@endsection