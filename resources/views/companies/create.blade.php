@extends('layouts.app')

@section('page-header', 'Adauga companie')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <form action="/companies" method="post" role="form">
                    @include('companies.form')
                    <div class="box-footer">
                        @csrf
                        <a href="/companies" class="btn btn-default">Inapoi</a>
                        <button type="submit" class="btn btn-primary pull-right">Adauga companie</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection