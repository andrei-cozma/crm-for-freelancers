@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h3>Adauga contact</h3>
        </div>
    </div>

    <form action="/contacts" method="POST">
        <div class="form-group">
            <label for="company_id">Companie</label>
            <select name="company_id" id="company_id" class="form-control">
                <option value="" disabled>Selecteaza o companie</option>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="first_name">Prenume</label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="last_name">Nume</label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="form-control">
        </div>

        @csrf
        <button type="submit" class="btn btn-primary">Adauga contact</button>
    </form>

@endsection