<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\TableInfo\EmpresaTableInfo;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    public function run()
    {
        Empresa::create([
           EmpresaTableInfo::RUC => '20570709357',
           EmpresaTableInfo::RAZON_SOCIAL => 'AGROINDUSTRIAS LA PIRAMIDE S.R.L.',
           EmpresaTableInfo::DOMICILIO_FISCAL => 'AV. DEFENSORES DEL MORRO NRO. 421 URB. SAN JUAN BAUTISTA DE VILLA LIMA - LIMA - CHORRILLOS',
           EmpresaTableInfo::LOGO_PATH => 'https://res.cloudinary.com/escobedomedina/image/upload/v1606260857/logopiramide_eb0izw.jpg',
           EmpresaTableInfo::USERNAME => 'adminpiramide',
           EmpresaTableInfo::PASSWORD => '45693907',
        ]);

        Empresa::create([
            EmpresaTableInfo::RUC => '20601868831',
            EmpresaTableInfo::RAZON_SOCIAL => 'EL POTRERILLO E.I.R.L.',
            EmpresaTableInfo::DOMICILIO_FISCAL => 'AV. HORACIO URTEAGA NRO. 1470 LIMA - LIMA - JESUS MARIA',
            EmpresaTableInfo::LOGO_PATH => 'https://res.cloudinary.com/escobedomedina/image/upload/v1606260857/logopotrerillo_akasxs.png',
            EmpresaTableInfo::USERNAME => 'adminpotrerillo',
            EmpresaTableInfo::PASSWORD => '45693907',
        ]);

        Empresa::create([
            EmpresaTableInfo::RUC => '20601849934',
            EmpresaTableInfo::RAZON_SOCIAL => 'GREAT CHEESE E.I.R.L.',
            EmpresaTableInfo::DOMICILIO_FISCAL => 'AV. ARGENTINA NRO. 3093 INT. 227 PROV. CONST. DEL CALLAO - PROV. CONST. DEL CALLAO - CALLAO',
            EmpresaTableInfo::LOGO_PATH => 'https://res.cloudinary.com/escobedomedina/image/upload/v1606260857/logogreatcheese_q4hlpd.jpg',
            EmpresaTableInfo::USERNAME => 'admingreatcheese',
            EmpresaTableInfo::PASSWORD => '45693907',
        ]);

        Empresa::create([
            EmpresaTableInfo::RUC => '20479062022',
            EmpresaTableInfo::RAZON_SOCIAL => 'PERU CHEESE S.R.L',
            EmpresaTableInfo::DOMICILIO_FISCAL => 'AV. AVIACION NRO. 2777 - SAN BORJA',
            EmpresaTableInfo::LOGO_PATH => 'https://res.cloudinary.com/escobedomedina/image/upload/v1612368480/logoperucheese_b3hbna.png',
            EmpresaTableInfo::USERNAME => 'adminperucheese',
            EmpresaTableInfo::PASSWORD => '45693907',
        ]);

        Empresa::create([
            EmpresaTableInfo::RUC => '20570672844',
            EmpresaTableInfo::RAZON_SOCIAL => 'RICA NATA E.I.R.L.',
            EmpresaTableInfo::DOMICILIO_FISCAL => 'AV. LA MAR NRO. 2281 - SAN MIGUEL',
            EmpresaTableInfo::LOGO_PATH => 'https://res.cloudinary.com/escobedomedina/image/upload/v1606260857/logoricanata_iydfnn.png',
            EmpresaTableInfo::USERNAME => 'adminricanata',
            EmpresaTableInfo::PASSWORD => '45693907',
        ]);

        Empresa::create([
            EmpresaTableInfo::RUC => '20607742937',
            EmpresaTableInfo::RAZON_SOCIAL => 'DON QUESO E.I.R.L.',
            EmpresaTableInfo::DOMICILIO_FISCAL => 'AV. ARGENTINA NRO. 3093 INT. 227 PROV. CONST. DEL CALLAO - PROV. CONST. DEL CALLAO - CALLAO',
            EmpresaTableInfo::LOGO_PATH => 'https://res.cloudinary.com/escobedomedina/image/upload/v1622483789/logodonqueso_cqydmq.jpg',
            EmpresaTableInfo::USERNAME => 'admindonqueso',
            EmpresaTableInfo::PASSWORD => '45693907',
        ]);
    }
}
