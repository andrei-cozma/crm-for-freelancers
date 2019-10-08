@extends('layouts.app')

@section('page-header', 'Companie')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    Nume: {{ $company->name }}
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRecurrentServiceModal">
        Adauga serviciu recursiv
    </button>

    <div class="modal fade" id="addRecurrentServiceModal" tabindex="-1" role="dialog" aria-labelledby="addRecurrentService">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="addRecurrentService">Adauga serviciu recurent</h4>
                </div>
                <div class="modal-body">
                    <add-recurrent-service></add-recurrent-service>
                </div>
            </div>
        </div>
    </div>
@endsection