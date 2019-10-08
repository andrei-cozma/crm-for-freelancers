@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h3>Adauga Serviciu Recurent</h3>
        </div>
    </div>

    <form action="{{ route('recurrent-services.store') }}" method="POST">
        @include('recurrent-services.form')
        @csrf
        <button type="submit" class="btn btn-primary">Adauga Serviciu Recurent</button>
    </form>

@endsection