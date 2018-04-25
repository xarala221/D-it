@extends('gabarie')
@section('dashboard')
    class="active"
    @stop

@section('title') Dash board @stop

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary p-20">
                <div class="media widget-ten">
                    <div class="media-left meida media-middle">
                        <span><i class="ti-user f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="color-white">{{ $data["nombreMembre"] }}</h2>
                        <p class="m-b-0">Membres</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-pink p-20">
                <div class="media widget-ten">
                    <div class="media-left meida media-middle">
                        <span><i class="ti-comment f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="color-white">{{ $data["nombreMembreBureau"] }}</h2>
                        <p class="m-b-0">Membres du Bureau</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success p-20">
                <div class="media widget-ten">
                    <div class="media-left meida media-middle">
                        <span><i class="ti-vector f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="color-white">$27647</h2>
                        <p class="m-b-0">ont Cotisés ce mois</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger p-20">
                <div class="media widget-ten">
                    <div class="media-left meida media-middle">
                        <span><i class="ti-location-pin f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="color-white">278</h2>
                        <p class="m-b-0">ont une redevance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop