@extends('layouts.app')

@section('page-header', 'Trimite ticket')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Trimite ticket</h3>
                </div>
                <div class="box-body">
                    <form action="/tickets" method="post">
                        <div class="form-group">
                            <label for="subject">Subiect</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                            <div>{{ $errors->first('subject') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="message">Mesaj</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                            <div>{{ $errors->first('message') }}</div>
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary">Trimite</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection