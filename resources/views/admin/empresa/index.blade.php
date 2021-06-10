@extends('layouts.vertical', ['title' => 'Empresas'])

@section('css')
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Lista de Empresas</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('admin.empresa.create')}}" class="btn btn-primary waves-effect waves-light mb-3">
                            <span class="btn-label"><i class="mdi mdi-check-all"></i></span>Registrar Empresa
                        </a>
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Razón Social</th>
                                <th>RUC</th>
                                <th>Docimilio Fiscal</th>
                                <th>Logo</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($empresas as $e)
                                    <tr>
                                        <td>{{$e->razon_social}}</td>
                                        <td>{{$e->ruc}}</td>
                                        <td>{{$e->domicilio_fiscal}}</td>
                                        <td><img src="{{$e->logo_path}}" alt="logo" width="45px"></td>
                                        <td>
                                            <a href="{{ route('admin.empresa.edit', ['empresa' => $e]) }}" type="button"
                                               class="btn btn-soft-warning btn-sm waves-effect waves-light">
                                                <span class="btn-label"><i class="mdi mdi-plus-circle"></i></span>Editar
                                            </a>
                                            <form action="{{route('admin.empresa.destroy', ['empresa' => $e])}}" method="POST">
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
