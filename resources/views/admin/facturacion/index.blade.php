@extends('layouts.vertical', ['title' => 'Facturación Electrónica'])

@section('css')
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Facturación Electrónica</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="selectEmpresa">Selecciona una empresa</label>
                                <select class="form-control" id="selectEmpresa" data-toggle="select2">
                                </select>
                            </div>
                            <div class="col-md-3" id="divSucursal">
                            </div>
                            <div class="col-md-6" id="divFecha" style="display: none">
                                <label for="date">Filtrar por Fecha</label>
                                <input type="date" class="form-control col-3" id="date" name="date" value={{date('Y-m-d')}} required>
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
                                <th>Cliente</th>
                                <th>Fecha de Emisión</th>
                                <th>Tipo Comprobante</th>
                                <th>Serie</th>
                                <th>N° de Comprobante</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Acciones</th>
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
                $('#divFecha').slideUp();
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
                    $('#divFecha').slideDown();
                    crearTable();
                });
            });
            $("#date").change(function(){
                crearTable();
            });
            function crearTable() {
                $('#datatable-buttons').DataTable().destroy();
                var sucursal = $('#selectSucursal').val();
                let date = $('#date').val();
                var table = $('#datatable-buttons').DataTable({
                    destroy: true,
                    ajax: {
                        url: '/api/admin/facturacion/' + sucursal + '/' + date,
                        dataSrc: 'respuesta'
                    },
                    columns: [
                        { data: 'RazonSocial', render: function ( data, type, row ) {
                                return row.NroTipoDocumento + ' - ' + row.RazonSocial;
                            }},
                        { data: 'FechaEmision' },
                        { data: 'TipoComprobante' },
                        { data: 'Serie' },
                        { data: 'NumeroComprobante' },
                        { data: 'TotalRedondeo', render: function ( data, type, row ) {
                                return 'S/. ' + data;
                            }},
                        { data: 'EstadoCE', render: function ( data, type, row ) {
                                if (data === 'Aceptado'){
                                    return '<span class="badge badge-success p-1">' + data + '</span>';
                                } else if (data === 'Pendiente'){
                                    return '<span class="badge badge-info p-1">' + data + '</span>';
                                } else if (data === ''){
                                    return '<span class="badge badge-warning p-1">' + data + '</span>';
                                } else{
                                    return '<span class="badge danger p-1">' + data + '</span>';
                                }
                            }},
                        { data: 'Ruc', render: function ( data, type, row ) {
                            if (row.EstadoCE != 'Aceptado' && row.EstadoCE != 'Anulado'){
                                return '<a class="btn btn-tealdark waves-effect waves-light mr-1" href="#"><span class="btn-label"><i class="mdi mdi-chevron-double-down"></i></span>Enviar</a>';
                            } else {
                                return '<a class="btn btn-teal waves-effect waves-light mr-1" target="_blank" href="https://chugursunat.mifacturaperu.com/api/facturador/download/xml/' + row.Ruc + '-' + row.CodigoTipoComprobante + '-' + row.Serie + '-' + row.NumeroComprobante + '"><span class="btn-label"><i class="mdi mdi-chevron-double-down"></i></span>XML</a>' +
                                '<a class="btn btn-teal waves-effect waves-light" target="_blank" href="https://chugursunat.mifacturaperu.com/api/facturador/download/cdr/' + row.Ruc + '-' + row.CodigoTipoComprobante + '-' + row.Serie + '-' + row.NumeroComprobante + '"><span class="btn-label"><i class="mdi mdi-chevron-double-down"></i></span>CDR</a>';
                            }
                        }},
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
            }
        });
    </script>
@endsection
