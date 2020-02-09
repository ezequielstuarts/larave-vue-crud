@extends('app')
@section('content')


<div id="crud" class="row mt-5">
    <div class="col-12">
        <h1 class="border-bottom pb-2">CRUD Laravel y VUEjs</h1>
    </div>

    <div class="col-7 pb-3 pt-3">
        <span>Total de tareas <b>@{{pagination.total}}</b></span>
        <a href="#" class="btn btn-primary float-right mb-3" data-toggle="modal" data-target="#create">Nueva Tarea</a>
        <table class="table table-hover table-striped">
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
                    <td>@{{ keep.keep }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"v-on:click.prevent="editKeep(keep)">Editar</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="row mt-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    <li class="page-item" v-if="pagination.current_page > 1">
                        <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page -1)">Anterior</a>
                    </li>

                    <li class="page-item" v-for="page in pageNumber" v-bind:class="[ page == isActived ? 'active' : '' ]">
                    <a class="page-link" href="#" @click.prevent="changePage(page)">@{{page}}</a>
                    </li>

                    <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                        <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page +1)">Siguiente</a>
                    </li>

                </ul>
            </nav>
        </div>
        @include('create')
        @include('edit')
    </div>
    <div class="col-5">
        <pre>
            @{{ $data }}
        </pre>
    </div>
</div>



@endsection
