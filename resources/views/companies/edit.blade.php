@extends('layouts.app')

@section('page-header', 'Editeaza compania ' . $company->name)

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <form action="/companies/{{ $company->id }}" method="post" role="form">
                    @method('PATCH')
                    @include('companies.form')
                    <div class="box-footer">
                        @csrf
                        <button type="submit" class="btn btn-primary">Salveaza modificarile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection