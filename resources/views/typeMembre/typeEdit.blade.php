@extends('gabarie')
@section('type')
    class="active"
@stop
@section('title') Modifier Type
    <a href="{{ route('typeMembre.index') }}" class="btn btn-danger btn-rounded btn-flat btn-addon m-b-10 m-l-5">Annuler </a>
@stop

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        {!! BootForm::open()->action( route('typeMembre.update', $typeMembre->id) )->put()->class("form-valide")->novalidate('novalidate') !!}
                        {!! BootForm::bind($typeMembre) !!}
                        {!! BootForm::text('Nom', 'nom')->class("form-control input-rounded") !!}
                        {!! BootForm::submit('Valider')->class("btn btn-primary btn-rounded btn-flat btn-addon m-b-10 m-l-5") !!}
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