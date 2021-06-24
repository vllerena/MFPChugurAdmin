@extends('layouts.vertical', ['title' => 'Productos'])

@section('css')
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Productos</h4>
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
                            <div class="col-md-6" id="divSucursal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="tableProductos">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Lista de Productos</h4>
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Und. de Medida</th>
                                <th>Stock</th>
                                <th>Precio Costo (Inc. IGV)</th>
                                <th>Precio Venta (Inc. IGV)</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#selectEmpresa').select2({
                placeholder: 'Seleccione una empresa',
                ajax: {
                    url: '/api/admin/empresas',
                    dataType: 'json',
                    processResults: function (data) {
                        return {
                            results: $.map(data, function(obj) {
                                return { id: obj.id, text: obj.razon_social };
                            })
                        };
                    }
                }
            });
            $("#selectEmpresa").on("select2:select", function (e) {
                var empresa = $(e.currentTarget).val();
                div = document.getElementById("divSucursal");
                div.innerHTML = `<label>Selecciona una sucursal</label>
                    <select class="form-control" id="selectSucursal" data-toggle="select2">
                    </select>`
                $('#selectSucursal').select2({
                    placeholder: 'Seleccione una sucursal',
                    ajax: {
                        url: '/api/admin/sucursales/empresa/' + empresa,
                        dataType: 'json',
                        processResults: function (data) {
                            return {
                                results: $.map(data, function(obj) {
                                    return { id: obj.id, text: obj.nombre };
                                })
                            };
                        }
                    }
                });
                $("#selectSucursal").on("select2:select", function (e) {
                    var sucursal = $(e.currentTarget).val();
                    $('#datatable-buttons').DataTable().destroy();
                    var table = $('#datatable-buttons').DataTable({
                        destroy: true,
                        ajax: {
                            url: '/api/admin/productos/' + sucursal,
                            dataSrc: 'productos'
                        },
                        columns: [
                            { data: 'codigo' },
                            { data: 'nombre' },
                            { data: 'unidad_de_medida' },
                            { data: 'StockDisponibleConComprobante' },
                            { data: 'PrecioCostoConIgv' },
                            { data: 'PrecioConIgv' },
                        ],
                        lengthChange: false,
                        dom: 'Bfrtip',
                        buttons: ['print', 'pdf', 'excel'],
                        buttons: [
                            { extend: 'print', className: 'btn-light' },
                            { extend: 'pdf', className: 'btn-light' },
                            { extend: 'excel', className: 'btn-light' }
                        ],
                        retrieve: true,
                        paging: true,
                        "language": {
                            "loadingRecords": "Cargando...",
                            "processing":     "Procesando...",
                            "search": "Buscar:",
                            "zeroRecords":    "No se encontraron registros coincidentes",
                            "paginate": {
                                "previous": "<i class='mdi mdi-chevron-left'>",
                                "next": "<i class='mdi mdi-chevron-right'>"
                            }
                        },
                        "drawCallback": function () {
                            $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                        }
                    });
                    table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
                });
            });
        });
    </script>
@endsection
