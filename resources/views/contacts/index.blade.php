@extends('layouts.app')

@section('page-header', 'Lista contacte')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Default Box Example</h3>
                    <div class="box-tools pull-right">
                        <a href="/contacts/create" class="btn btn-primary">Adauga contact</a>
                    </div>
                </div>
                <div class="box-body">
                    @if (count($contacts) > 0)
                        @foreach ($contacts as $contact)
                            <div class="row">
                                <div class="col-xs-2">
                                    {{ $contact->first_name }}
                                </div>
                                <div class="col-xs-2">
                                    {{ $contact->email }}
                                </div>
                            </div>
                        @endforeach

                    @else

                        <div class="row">
                            <div class="col-xs-12">
                                Nu ai contacte inregistrate.
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection