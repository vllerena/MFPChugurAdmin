@extends('layouts.vertical', ['title' => 'Crear Empresa'])

@section('css')
    <link href="{{asset('assets/libs/mohithg-switchery/mohithg-switchery.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/libs/multiselect/multiselect.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/libs/selectize/selectize.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/libs/jquery-toast-plugin/jquery-toast-plugin.min.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Crear Empresa</h4>
                </div>
            </div>
        </div>
        <form action="{{route('admin.empresa.store')}}" method="POST"
              enctype="multipart/form-data" novalidate>
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-xl-6">
                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Datos Principales</h5>
                                <div class="form-group">
                                    <label for="ruc">RUC <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('ruc') is-invalid @enderror"
                                           name="ruc" id="ruc"
                                           placeholder="ej. 10724923530"
                                           value="{{old('ruc')}}">
                                    @error('ruc')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="razon_social">Razón Social <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('razon_social') is-invalid @enderror"
                                           name="razon_social" id="razon_social"
                                           placeholder="ej. Empresa ABC S.A.C"
                                           value="{{old('razon_social')}}">
                                    @error('razon_social')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="domicilio_fiscal">Domicilio Fiscal <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('domicilio_fiscal') is-invalid @enderror"
                                           name="domicilio_fiscal" id="domicilio_fiscal"
                                           placeholder="ej. Jr. ABC #123"
                                           value="{{old('domicilio_fiscal')}}">
                                    @error('domicilio_fiscal')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="logo_path">Logo <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="file"
                                           class="form-control-file @error('logo_path') is-invalid @enderror"
                                           name="logo_path" id="logo_path"
                                           value="{{old('logo_path')}}">
                                    @error('logo_path')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Datos para
                                    Sistema</h5>
                                <div class="form-group">
                                    <label for="username">Nombre del Usuario <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('username') is-invalid @enderror"
                                           name="username" id="username"
                                           placeholder="ej. victor"
                                           value="{{old('username')}}">
                                    @error('username')
                                    <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña del Usuario <span
                                            class="badge badge-soft-danger badge-pill">Requerido</span></label>
                                    <input type="text"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password" id="password"
                                           placeholder="ej. Ingresar contraseña"
                                           value="{{old('password')}}">
                                    @error('password')
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
                                <a href="{{route('admin.empresa.index')}}"
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
    <script src="{{asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/libs/dropify/dropify.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/form-fileuploads.init.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-toast-plugin/jquery-toast-plugin.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/toastr.init.js')}}"></script>
@endsection
