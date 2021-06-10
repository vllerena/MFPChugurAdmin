<?php

namespace Database\Seeders;

use App\Models\Sucursal;
use App\TableInfo\SucursalTableInfo;
use Illuminate\Database\Seeder;

class SucursalSeeder extends Seeder
{
    public function run()
    {
        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL CHUGUR',
            SucursalTableInfo::URL => 'https://sucursal1.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JR. AMALIA PUGA NRO. 925 BAR. SAN SEBASTIAN - CAJAMARCA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 1,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL ANDES',
            SucursalTableInfo::URL => 'https://sucursal2.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JR. AMAZONAS NRO. 507 BAR. LA MERCED - CAJAMARCA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 1,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL CASA QUESO',
            SucursalTableInfo::URL => 'https://sucursal3.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JR. DOS DE MAYO NRO. 572 BAR. DOS DE MAYO - CAJAMARCA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 1,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL VIAJERO',
            SucursalTableInfo::URL => 'https://sucursal4.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JR. DEL BATAN NRO. 191 BAR. LA MERCED - CAJAMARCA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 1,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL BAÑOS DEL INCA',
            SucursalTableInfo::URL => 'https://sucursal5.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JR. SINCHI ROCA NRO. 154 - CAJAMARCA - LOS BAÑOS DEL INCA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 1,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL MIRAFLORES',
            SucursalTableInfo::URL => 'https://sucursal6.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'CAL. FRANCISCO LAZO NRO. 106 - LIMA - MIRAFLORES',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 1,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL CHORILLOS',
            SucursalTableInfo::URL => 'https://principal.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV. DEFENSORES DEL MORRO NRO. 421  - LIMA - CHORRILLOS',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 1,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL CHICLAYO 1',
            SucursalTableInfo::URL => 'https://sucursal1.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'CAL.SAN JOSE NRO. 389 - LAMBAYEQUE - CHICLAYO',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 2,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL CHICLAYO 2',
            SucursalTableInfo::URL => 'https://sucursal2.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV. BALTA NRO. 404 - CHICLAYO',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 2,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL CHICLAYO 3',
            SucursalTableInfo::URL => 'https://sucursal3.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV. FRANCISCO BOLOGNESI NRO. 1153 - LAMBAYEQUE - CHICLAYO',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 2,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL TRUJILLO 1',
            SucursalTableInfo::URL => 'https://sucursal4.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'MZA. A LOTE. 003 INT. 0101 URB. LA ARBOLEDA - LA LIBERTAD - TRUJILLO',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 2,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL TRUJILLO 2',
            SucursalTableInfo::URL => 'https://sucursal5.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV. MANUEL VERA ENRIQUE NRO. 580 - LA LIBERTAD - TRUJILLO',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 2,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL TRUJILLO 3',
            SucursalTableInfo::URL => 'https://sucursal6.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JR. ORBEGOZO NRO. 689 - LA LIBERTAD - TRUJILLO',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 2,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL LIMA',
            SucursalTableInfo::URL => 'https://principal.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JESUS MARÍA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 2,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL TAMBO',
            SucursalTableInfo::URL => 'https://sucursal1.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JR. DOS DE MAYO NRO. 576 BAR. DOS DE MAYO - CAJAMARCA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 3,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL MINKA',
            SucursalTableInfo::URL => 'https://principal.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV. ARGENTINA NRO. 3093 INT. 227 OTR. C.C. MIMKA - PROV. CONST. DEL CALLAO',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 3,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL SAN BORJA',
            SucursalTableInfo::URL => 'https://principal.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV. AVIACION NRO. 2777 - SAN BORJA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 4,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL MAGDALENA',
            SucursalTableInfo::URL => 'https://sucursal1.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JR.  SAN MARTIN  NRO. 653 - MAGDALENA DEL MAR',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 4,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL ENCALADA',
            SucursalTableInfo::URL => 'https://sucursal2.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV.  LA ENCALADA  NRO. 722 - SANTIAGO DE SURCO',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 4,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL SUPERMERCADOS',
            SucursalTableInfo::URL => 'https://sucursal3.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV.  LA ENCALADA  NRO. 722 - SANTIAGO DE SURCO',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 4,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL SAN MIGUEL',
            SucursalTableInfo::URL => 'https://principal.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV. LA MAR NRO. 2281 TIENDA 53 Y 54 - SAN MIGUEL',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 5,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL LINCE',
            SucursalTableInfo::URL => 'https://sucursal1.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'JR. MARISCAL DE LAS HERAS NRO. 288 SEC. 0540 MZT 096 - LIMA - LINCE',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 5,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL BREÑA',
            SucursalTableInfo::URL => 'https://sucursal2.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'AV. BRASIL 274 A - BREÑA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 5,
        ]);

        Sucursal::create([
            SucursalTableInfo::NOMBRE => 'SUCURSAL PIURA',
            SucursalTableInfo::URL => 'https://sucursal3.mifacturaperu.com/',
            SucursalTableInfo::DIRECCION => 'CAL.ICA NRO. 830 PIURA - PIURA',
            SucursalTableInfo::TELEFONO => '',
            SucursalTableInfo::EMAIL => '',
            SucursalTableInfo::EMPRESA => 5,
        ]);
    }
}
