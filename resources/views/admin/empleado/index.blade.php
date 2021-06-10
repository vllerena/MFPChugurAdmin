@extends('layouts.vertical', ['title' => 'Empleados'])

@section('css')
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Empleados</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Selecciona una empresa</label>
                                <select class="form-control" id="selectEmpresa" data-toggle="select2">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#selectEmpresa').select2({
                placeholder: 'Seleccione una empresa',
                ajax: {
                    url: '/api/admin/empresas',
                    dataType: 'json',
                    processResults: function (data) {
                        console.log(data)
                        return {
                            results: $.map(data, function(obj) {
                                return { id: obj.id, text: obj.razon_social };
                            })
                        };
                    }
                }
            });
        });

    </script>
@endsection
