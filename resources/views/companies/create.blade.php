@extends('layouts.app')

@section('page-header', 'Adauga companie')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <form action="/companies/store" method="post" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nume</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="unique_registration_code">CUI</label>
                            <input type="text" name="unique_registration_code" id="unique_registration_code" class="form-control" value="{{ old('unique_registration_code') }}">
                        </div>
                        <div class="form-group">
                            <label for="trade_register_number">J</label>
                            <input type="text" name="trade_register_number" id="trade_register_number" class="form-control" value="{{ old('trade_register_number') }}">
                        </div>
                        <div class="form-group">
                            <label for="city">Localitate</label>
                            <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Adresa</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                        </div>
                        <div class="form-group">
                            <label for="hourly_rate">Tarif / ora</label>
                            <input type="text" name="hourly_rate" id="hourly_rate" class="form-control" value="{{ old('hourly_rate') }}">
                        </div>
                    </div>

                    <div class="box-footer">
                        @csrf
                        <button type="submit" class="btn btn-primary">Adauga companie</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection