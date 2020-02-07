@extends('app')
@section('content')


<div id="crud" class="row mt-5">
    <div class="col-12">
        <h1 class="border-bottom pb-2">CRUD Laravel y VUEjs</h1>
    </div>

    <div class="col-7 pb-3 pt-3">
        <a href="#" class="btn btn-primary float-right mb-3">Nueva Tarea</a>
        <table class="table table-hover table-sprite">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>TAREA</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="keep in keeps">
                    <td width="10px">@{{keep.id}}</td>
                    <td>Tarea</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-5">
        <pre>
            @{{ $data }}
        </pre>
    </div>
</div>



@endsection
