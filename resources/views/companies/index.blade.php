@extends('layouts.app')

@section('page-header', 'Lista companii')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-tools pull-right">
                        <a href="/companies/create" class="btn btn-primary">Adauga companie</a>
                    </div>
                </div>
                <div class="box-body">
                    @if (count($companies) > 0)
                        <div class="row">
                            <div class="col-xs-2">
                                <strong>Nume</strong>
                            </div>
                            <div class="col-xs-2">
                                <strong>CUI</strong>
                            </div>
                            <div class="col-xs-2">
                                <strong>J</strong>
                            </div>
                            <div class="col-xs-2">
                                <strong>Localitate</strong>
                            </div>
                            <div class="col-xs-2">
                                <strong>Adresa</strong>
                            </div>
                            <div class="col-xs-1">
                                <strong>Tarif ora</strong>
                            </div>
                            <div class="col-xs-1"></div>
                        </div>
                        @foreach ($companies as $company)
                            <div class="row">
                                <div class="col-xs-2">
                                    {{ $company->name }}
                                </div>
                                <div class="col-xs-2">
                                    {{ $company->unique_registration_code }}
                                </div>
                                <div class="col-xs-2">
                                    {{ $company->trade_register_number }}
                                </div>
                                <div class="col-xs-2">
                                    {{ $company->city }}
                                </div>
                                <div class="col-xs-2">
                                    {{ $company->address }}
                                </div>
                                <div class="col-xs-1">
                                    {{ $company->hourly_rate }}
                                </div>
                                <div class="col-xs-1">
                                    <a href="/companies/{{ $company->id }}/edit">
                                        <i class="fa fa-edit"></i> Modifica
                                    </a>
                                    <form action="/companies/{{ $company->id }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-link"><i class="fa fa-trash"></i> Sterge</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="row">
                            <div class="col-xs-12">
                                Nu ai companii inregistrate.
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection