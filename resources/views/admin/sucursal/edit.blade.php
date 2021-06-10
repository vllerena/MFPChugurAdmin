@extends('layouts.vertical', ['title' => 'Editar Sucursal'])

@section('css')
    <link href="{{asset('assets/libs/multiselect/multiselect.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/jquery-toast-plugin/jquery-toast-plugin.min.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Editar Sucursal</h4>
                </div>
            </div>
        </div>
        <form action="{{route('admin.sucursal.update', ['sucursal' => $sucursal])}}" method="POST" novalidate>
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-xl-6">
                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Datos Principales</h5>
                                <div class="form-group">
                                    <label for="ruc">Nombre <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('nombre') is-invalid @enderror"
                                           name="nombre" id="nombre"
                                           placeholder="ej. Sucursal ABC"
                                           value="{{$sucursal->nombre}}">
                                    @error('nombre')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="url">URL <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('url') is-invalid @enderror"
                                           name="url" id="url"
                                           placeholder="ej. sucursal1.mifacturaperu.com"
                                           value="{{$sucursal->url}}">
                                    @error('url')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Domicilio Fiscal <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('direccion') is-invalid @enderror"
                                           name="direccion" id="direccion"
                                           placeholder="ej. Jr. ABC #123"
                                           value="{{$sucursal->direccion}}">
                                    @error('direccion')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Datos Adicionales</h5>
                                <div class="form-group">
                                    <label for="telefono">Teléfono <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('telefono') is-invalid @enderror"
                                           name="telefono" id="telefono"
                                           placeholder="ej. 925786403"
                                           value="{{$sucursal->telefono}}">
                                    @error('telefono')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" id="email"
                                           placeholder="ej. sucursal@gmail.com"
                                           value="{{$sucursal->email}}">
                                    @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="empresas_id">Empresa Principal <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <select class="form-control" data-toggle="select2" name="empresas_id" id="empresas_id">
                                        @foreach($empresas as $e)
                                            <option value="{{$e->id}}" {{$sucursal->empresas_id == $e->id ? 'selected' : ''}} >{{$e->razon_social}}</option>
                                        @endforeach
                                    </select>
                                    @error('empresas_id')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <button type="submit"
                                        class="btn btn-primary waves-effect waves-light m-1"><i
                                        class="fe-check-circle mr-1"></i> Registrar
                                </button>
                                <a href="{{route('admin.sucursal.index')}}"
                                   class="btn btn-secondary waves-effect waves-light m-1">
                                    <i class="fe-check-circle mr-1"></i>
                                    Regresar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/libs/jquery-toast-plugin/jquery-toast-plugin.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/toastr.init.js')}}"></script>
    <script src="{{asset('assets/libs/multiselect/multiselect.min.js')}}"></script>
    <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
@endsection

