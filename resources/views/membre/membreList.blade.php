@extends('gabarie')

@section('membre')
    class="active"
@stop

@section('title') Liste des Membres
<a href="{{ route('membre.create') }}" class="btn btn-primary btn-rounded btn-flat btn-addon m-b-10 m-l-5"><i class="ti-plus"></i>Ajouter membre</a>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Export</h4>
                    <h6 class="card-subtitle">Exporter les données</h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Type de membre</th>
                                <th>Date d'ajout</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Type de membre</th>
                                <th>Date d'ajout</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($membres as $membre)
                                <tr>
                                    <td>{{ $membre->prenom }}</td>
                                    <td>{{ $membre->nom }}</td>
                                    <td>{{ $membre->telephone }}</td>
                                    <td>{{ $membre->email }}</td>
                                    <td>{{ $membre->type }}</td>
                                    <td>{{ $membre->created_at }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-rounded"><i class="fa fa-eye"></i></button>
                                        <a class="btn btn-info btn-rounded" href="{{ route('membre.edit', $membre->id) }}"><i class="fa fa-edit"></i></a>

                                        <form style="display: initial;" id="supFomrs_{{ $membre->id }}" action="{{ route('membre.destroy', $membre->id) }}" method="post">
                                            <input type="hidden" name="_method" value="delete" />
                                            {{ csrf_field() }}
                                            <a class="btn btn-danger btn-rounded" onclick="ab({{  $membre->id }})" ><i class="fa fa-recycle"></i></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    </div>
@stop

@section('script')
    @include('asset.datatable')
    @include('asset.modal')
@stop