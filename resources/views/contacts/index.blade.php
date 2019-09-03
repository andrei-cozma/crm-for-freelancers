@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h3>Lista de contacte</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="/contacts/create">Adauga contact</a>
        </div>
    </div>

    @if (count($contacts) > 0)
        @foreach ($contacts as $contact)
    <div class="row">
        <div class="col-2">
            {{ $contact->first_name }}
        </div>
        <div class="col-2">
            {{ $contact->email }}
        </div>
    </div>
        @endforeach

    @else

        <div class="row">
            <div class="col">
                Nu ai contacte inregistrate.
            </div>
        </div>

    @endif

@endsection