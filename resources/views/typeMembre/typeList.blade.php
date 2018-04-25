@extends('gabarie')

@section('type')
    class="active"
@stop

@section('title') Liste des Types de Membres
<a href="{{ route('typeMembre.create') }}" class="btn btn-primary btn-rounded btn-flat btn-addon m-b-10 m-l-5"><i class="ti-plus"></i>Ajouter type de membre</a>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Export</h4>
                    <h6 class="card-subtitle">Exporter les données</h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Type de Membre</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Type de membre</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($typemembres as $typemembre)
                                <tr>
                                    <td>{{ $typemembre->nom }}</td>
                                    <td>
                                        <a class="btn btn-info btn-rounded" href="{{ route('typeMembre.edit', $typemembre->id) }}"><i class="fa fa-edit"></i></a>

                                        <form style="display: initial;" id="supFomrs_{{ $typemembre->id }}" action="{{ route('typeMembre.destroy', $typemembre->id) }}" method="post">
                                            <input type="hidden" name="_method" value="delete" />
                                            {{ csrf_field() }}
                                            <a class="btn btn-danger btn-rounded" onclick="dialogTypeMembre({{ $typemembre->id }})" ><i class="fa fa-recycle"></i></a>
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