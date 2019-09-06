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
                        @foreach ($companies as $company)
                            <div class="row">
                                <div class="col-xs-2">
                                    {{ $company->name }}
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