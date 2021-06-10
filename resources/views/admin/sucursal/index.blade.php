@extends('layouts.vertical', ['title' => 'Sucursales'])

@section('css')
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Lista de Sucursales</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('admin.sucursal.create')}}" class="btn btn-primary waves-effect waves-light mb-3">
                            <span class="btn-label"><i class="mdi mdi-check-all"></i></span>Registrar Sucursal
                        </a>
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Docimilio Fiscal</th>
                                <th>URL</th>
                                <th>Empresa</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sucursales as $s)
                                <tr>
                                    <td>{{$s->nombre}}</td>
                                    <td>{{$s->direccion}}</td>
                                    <td>{{$s->url}}</td>
                                    <td>{{$s->empresa->razon_social}}</td>
                                    <td>
                                        <a href="{{ route('admin.sucursal.edit', ['sucursal' => $s]) }}" type="button"
                                           class="btn btn-soft-warning btn-sm waves-effect waves-light">
                                            <span class="btn-label"><i class="mdi mdi-plus-circle"></i></span>Editar
                                        </a>
                                        <form action="{{route('admin.sucursal.destroy', ['sucursal' => $s])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-soft-danger btn-sm waves-effect waves-light">
                                                <span class="btn-label"><i class="mdi mdi-plus-circle"></i></span>Eliminar
                                            </button>
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
@endsection

@section('script')
    <script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
@endsection
