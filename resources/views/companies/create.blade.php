@extends('layouts.app')

@section('page-header', 'Adauga companie')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Adauga companie</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection