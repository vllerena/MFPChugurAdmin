@extends('layouts.vertical', ['title' => 'Reporte Venta'])

@section('css')
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Reporte Venta</h4>
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
                            <div class="col-md-3" id="divFechaInicio" style="display: none">
                                <label for="dateinicio">Filtrar por Fecha - Inicio</label>
                                <input type="date" class="form-control" id="dateinicio" name="dateinicio"
                                       value={{date('Y-m-d')}} required>
                            </div>
                            <div class="col-md-3" id="divFechaFin" style="display: none">
                                <label for="datefin">Filtrar por Fecha - Fin</label>
                                <input type="date" class="form-control" id="datefin" name="datefin"
                                       value={{date('Y-m-d')}} required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="loadData">

        </div>
        <div id="showData" style="display: none">
            <div class="row" id="resumenUno">
                <div class="col-12">
                    <div class="card-box widget-inline">
                        <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-2 text-center">
                                    <i class="mdi mdi-cart-plus text-primary mdi-24px"></i>
                                    <h3>S/. <span data-plugin="counterup" id="totalSpan"></span></h3>
                                    <p class="text-muted font-15 mb-0">Ventas Totales (Pagado)</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="p-2 text-center">
                                    <i class="mdi mdi-currency-usd text-success mdi-24px"></i>
                                    <h3>S/. <span data-plugin="counterup" id="totalredondeoSpan"></span></h3>
                                    <p class="text-muted font-15 mb-0">Ventas Totales (Redondeo)</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="p-2 text-center">
                                    <i class="mdi mdi-currency-usd text-danger mdi-24px"></i>
                                    <h3>S/. <span data-plugin="counterup" id="redondeoSpan"></span></h3>
                                    <p class="text-muted font-15 mb-0">Total de Redondeo</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="p-2 text-center">
                                    <i class="mdi mdi-currency-usd text-blue mdi-24px"></i>
                                    <h3>S/. <span data-plugin="counterup" id="descuentoSpan"></span></h3>
                                    <p class="text-muted font-15 mb-0">Total de Descuento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="resumenDos">
                <div class="col-12">
                    <div class="card-box widget-inline">
                        <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-2 text-center">
                                    <i class="mdi mdi-clipboard-text text-danger mdi-24px"></i>
                                    <h3><span data-plugin="counterup" id="anuladoSpan"></span></h3>
                                    <p class="text-muted font-15 mb-0">Comprobantes Anulados</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="p-2 text-center">
                                    <i class="mdi mdi-clipboard-text text-warning mdi-24px"></i>
                                    <h3><span data-plugin="counterup" id="pendienteSpan"></span></h3>
                                    <p class="text-muted font-15 mb-0">Comprobantes Pendientes</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="p-2 text-center">
                                    <i class="mdi mdi-clipboard-text text-primary mdi-24px"></i>
                                    <h3><span data-plugin="counterup" id="vacioSpan"></span></h3>
                                    <p class="text-muted font-15 mb-0">Comprobantes Vacíos</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="p-2 text-center">
                                    <i class="mdi mdi-clipboard-text text-success mdi-24px"></i>
                                    <h3><span data-plugin="counterup" id="aceptadoSpan"></span></h3>
                                    <p class="text-muted font-15 mb-0">Comprobantes Aceptados</p>
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
                                    <th>Tipo Asto.</th>
                                    <th>Fecha Registro</th>
                                    <th>Fecha Documto.</th>
                                    <th>Fecha Vencmto</th>
                                    <th>TD</th>
                                    <th>Serie</th>
                                    <th>Número</th>
                                    <th>Número Final</th>
                                    <th>Código Cliente</th>
                                    <th>Ruc Cliente</th>
                                    <th>Razon Social del Cliente</th>
                                    <th>Centro de Costo</th>
                                    <th>Base Imponible</th>
                                    <th>Exonerado</th>
                                    <th>ISC</th>
                                    <th>IGV</th>
                                    <th>Otros Tributos</th>
                                    <th>Otros Cargos</th>
                                    <th>Importe Total</th>
                                    <th>Tipo Camb</th>
                                    <th>Fecha Doc. Ref.</th>
                                    <th>TD Ref.</th>
                                    <th>Número Ref.</th>
                                    <th>Doc. Anulado</th>
                                    <th>Exportación</th>
                                    <th>Nro. de File</th>
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
        $(document).ready(function () {
            $('#selectEmpresa').select2({
                placeholder: 'Seleccione una empresa',
                ajax: {
                    url: '/api/admin/empresas',
                    dataType: 'json',
                    processResults: function (data) {
                        return {
                            results: $.map(data, function (obj) {
                                return {id: obj.id, text: obj.razon_social};
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
                $("#selectSucursal").on("select2:select", async function (e) {
                    $('#divFechaInicio').slideDown();
                    $('#divFechaFin').slideDown();
                    var empresa = $('#selectEmpresa').val();
                    var sucursal = $('#selectSucursal').val();
                    let dateinicio = $('#dateinicio').val();
                    let datefin = $('#datefin').val();
                    let data = await fetchData(empresa, sucursal, dateinicio, datefin);
                    crearTable(data);
                    resumenDatos(data);
                });
            });

            async function fetchData(empresa, sucursal, dateinicio, datefin) {
                $("#showData").hide().fadeOut('slow');
                $("#loadData").html(
                    `<div class="card card-box py-3">
                        <div class="d-flex align-items-center">
                            <h4>Cargando...</h4>
                            <div class="spinner-border text-primary ml-auto" role="status" aria-hidden="true"></div>
                        </div>
                    </div>`)
                    .hide().fadeIn('slow');
                var url = '/api/admin/reportes/ventas';
                var data = {
                    empresa: empresa,
                    sucursal: sucursal,
                    dateinicio: dateinicio,
                    datefin: datefin,
                };
                let res = await fetch(url, {
                    method: 'POST',
                    body: JSON.stringify(data),
                    headers:{
                        'Content-Type': 'application/json'
                    }
                })
                $("#loadData").hide().fadeOut('slow');
                $("#showData").show().fadeIn('slow');

                if (res.ok)
                    return await res.json()
                return []

            }

            $("#dateinicio").change(async function () {
                var empresa = $('#selectEmpresa').val();
                var sucursal = $('#selectSucursal').val();
                let dateinicio = $('#dateinicio').val();
                let datefin = $('#datefin').val();
                let data = await fetchData(empresa, sucursal, dateinicio, datefin);
                crearTable(data);
                resumenDatos(data);
            });
            $("#datefin").change(async function () {
                var empresa = $('#selectEmpresa').val();
                var sucursal = $('#selectSucursal').val();
                let dateinicio = $('#dateinicio').val();
                let datefin = $('#datefin').val();
                let data = await fetchData(empresa, sucursal, dateinicio, datefin);
                crearTable(data);
                resumenDatos(data);
            });

            async function crearTable(data) {
                $('#datatable-buttons').DataTable().destroy();
                var table = $('#datatable-buttons').DataTable({
                    destroy: true,
                    data: data,
                    columns: [
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '1';
                            }
                        },
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                var today = new Date();
                                var date = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
                                return date;
                            }
                        },
                        {data: 'FechaEmision'},
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                        {
                            data: 'TipoComprobante', render: function (data, type, row) {
                                if (data === 'Boleta Electronica') {
                                    return 'BV';
                                } else {
                                    return 'FT';
                                }
                            }
                        },
                        {data: 'Serie'},
                        {data: 'NumeroComprobante'},
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                        {data: 'NroTipoDocumento'},
                        {data: 'NroTipoDocumento'},
                        {data: 'RazonSocial'},
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                        {data: 'Gravadas'},
                        {data: 'Exoneradas'},
                        {data: 'ISC'},
                        {data: 'IGV'},
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                        {data: 'Total'},
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '0';
                            }
                        },
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '0';
                            }
                        },
                        {
                            data: 'IdRegistroVenta', render: function (data, type, row) {
                                return '';
                            }
                        },
                    ],
                    lengthChange: false,
                    dom: 'Bfrtip',
                    buttons: ['print', 'pdf', 'excel'],
                    buttons: [
                        {extend: 'print', className: 'btn-light'},
                        {extend: 'pdf', className: 'btn-light'},
                        {extend: 'excel', className: 'btn-light'}
                    ],
                    retrieve: true,
                    paging: true,
                    "language": {
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "search": "Buscar:",
                        "zeroRecords": "No se encontraron registros coincidentes",
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

            async function resumenDatos(data) {
                let total = 0, totalredondeo = 0, redondeo = 0, descuento = 0, anulado = 0, pendiente = 0, aceptado = 0, vacio = 0;
                for (var i = 0; i < data.length; i++) {
                    total += data[i].Total;
                    totalredondeo += data[i].TotalRedondeo;
                    redondeo += data[i].Redondeo;
                    descuento += data[i].DescuentoTotal;
                    if (data[i].EstadoCE === 'Anulado'){
                        anulado = anulado + 1;
                    }else if (data[i].EstadoCE === 'Pendiente') {
                        pendiente = pendiente + 1;
                    }
                    else if (data[i].EstadoCE === 'Aceptado') {
                        aceptado = aceptado + 1;
                    }
                    else {
                        vacio = vacio + 1;
                    }

                }
                document.getElementById('totalSpan').innerHTML = total.toFixed(2);
                document.getElementById('totalredondeoSpan').innerHTML = totalredondeo.toFixed(2);
                document.getElementById('redondeoSpan').innerHTML = redondeo.toFixed(2);
                document.getElementById('descuentoSpan').innerHTML = descuento.toFixed(2);
                document.getElementById('anuladoSpan').innerHTML = anulado;
                document.getElementById('pendienteSpan').innerHTML = pendiente;
                document.getElementById('aceptadoSpan').innerHTML = aceptado;
                document.getElementById('vacioSpan').innerHTML = vacio;
            }
        });
    </script>
@endsection
