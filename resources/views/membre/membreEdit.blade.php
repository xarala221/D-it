@extends('gabarie')
@section('membre')
    class="active"
@stop
@section('title') Modifier Membre
    <a href="{{ route('membre.index') }}" class="btn btn-danger btn-rounded btn-flat btn-addon m-b-10 m-l-5">Annuler </a>
@stop

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        {!! BootForm::open()->action( route('membre.store') )->post()->class("form-valide")->novalidate('novalidate') !!}
                        {!! BootForm::bind($membre) !!}
                        {!! BootForm::text('Prénom', 'prenom')->class("form-control input-rounded") !!}
                        {!! BootForm::text('Nom', 'nom')->class("form-control input-rounded") !!}
                        {!! BootForm::text('Email', 'email')->class("form-control input-rounded") !!}
                        {!! BootForm::text('Téléphone', 'telephone')->class("form-control input-rounded") !!}
                        {!! BootForm::submit('<i class="ti-save"></i> Enregistrer')->class("btn btn-primary btn-rounded btn-flat btn-addon m-b-10 m-l-5") !!}
                        {!! BootForm::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

    @stop


@section('script')
    <script src="{{ asset('template') }}/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="{{ asset('template') }}/js/lib/form-validation/jquery.validate-init.js"></script>
    @stop